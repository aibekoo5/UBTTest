<?php  
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $new_username = $_POST['username'] ?? '';
        $new_email = $_POST['email'] ?? '';
        $user_id = $_SESSION['user']['id'] ?? '';

        $new_avatar = $_FILES['avatar'] ?? null;
        $ava_name = null;

        $errors = [];

        if ($new_avatar && $new_avatar['error'] == 0) {
            $allowed_files = ['jpg', 'png', 'webp', 'jpeg'];
            $extension = strtolower(pathinfo($new_avatar['name'], PATHINFO_EXTENSION));

            if (in_array($extension, $allowed_files)) {
                if ($new_avatar['size'] < 1000000) {
                    $ava_name = $new_email . '_' . time() . '.' . $extension;
                    $ava_path = 'img/avatars/' . $ava_name;
                    if (move_uploaded_file($new_avatar['tmp_name'], $ava_path)) {
                    } else {
                        $errors['avatar'] = 'Failed to upload file';
                    }
                } else {
                    $errors['avatar'] = 'File size too big. Choose less than 1mb';
                }
            } else {
                $errors['avatar'] = 'File should be JPG, PNG, WEBP, JPEG';
            }
        }

        if(empty($new_username)){
            $errors['name'] = 'Name is empty';
          }

        if(empty($new_email)){
            $errors['email'] = 'Email is empty';
        }
        else{
            if(!filter_var($new_email, FILTER_VALIDATE_EMAIL)){
              $errors['email'] = 'Invalid email format';
            }
         }

        if($errors){
            $_SESSION['status'] = 'error';
            $_SESSION['errors'] = $errors;
            $_SESSION['show_edit_form'] = true;
            header("Location: profile.php");
            exit();
        }
        else{
            require_once "common/db.php";

            $user = editUser($new_username, $new_email, $ava_name, $user_id);
          
            if($user){
                $_SESSION['status'] = 'success';
                $_SESSION['message'] = 'Updated successfully';
                $_SESSION['user']['name'] = $user['name'];
                $_SESSION['user']['email'] = $user['email'];
                $_SESSION['user']['avatar'] = $user['avatar'];
                    
                header("Location: profile.php");
            }
            else{
                $_SESSION['status'] = 'mainError';
                $_SESSION['message'] = 'User with this email already exists';
                $_SESSION['show_edit_form'] = true;
                header("Location: profile.php");
                exit();
            }
        }
    }
?>