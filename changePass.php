<?php 

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_id = $_SESSION['user']['id'];
        $lastPass = $_POST['lastPass'] ?? '';
        $newPass = $_POST['newPass'] ?? '';
        $confPass = $_POST['confPass'] ?? '';

        $errors = [];

        if(empty($lastPass)){
            $errors['lastPass'] = 'Last password is empty';
        }

        if(empty($newPass)){
            $errors['newPass'] = 'New password is empty';
        }
        elseif(strlen($newPass) < 6){
            $errors['newPass'] = 'Password length should be at least 6 symbols';
        } 
        elseif($newPass != $confPass){
            $errors['confPass'] = 'Passwords does not match';
        }

        if(empty($confPass)){
            $errors['confPass'] = 'Confirm new password is empty';
        }

        if($errors){
            $_SESSION['status'] = 'error';
            $_SESSION['errors'] = $errors;
            header("Location: changePassForm.php");
            exit();
          }
          else{
            require_once "common/db.php";
      
            $user = changePass($lastPass, $newPass, $user_id);
      
            if($user == true){
              $_SESSION['status'] = 'success';
              $_SESSION['message'] = 'Passwords changed successfully';
              header("Location: changePassForm.php");
            }
            else{
              $_SESSION['status'] = 'mainError';
              $_SESSION['message'] = 'Incorrect last password';
              header("Location: changePassForm.php");
              exit();
            }
          }
    }

?>