<?php 

  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    $errors = [];

    if(empty($name)){
      $errors['name'] = 'Name is empty';
    }

    if(empty($email)){
      $errors['email'] = 'Email is empty';
    }
    else{
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Invalid email format';
      }
    }

    if(empty($password)){
      $errors['password'] = 'Password is empty';
    }
    else{
      if(strlen($password) < 6){
        $errors['password'] = 'Password length should be at least 6 symbols';
      }
    }

    if($confirm_password != $password){
      $errors['confirm_password'] = 'Passwords does not match';
    }

    if(empty($confirm_password)){
      $errors['confirm_password'] = 'Confirm password is empty';
    }
    else{
      if(strlen($confirm_password) < 6){
        $errors['confirm_password'] = 'Password length should be at least 6 symbols';
      }
    }



    if($errors){
      $_SESSION['status'] = 'error';
      $_SESSION['errors'] = $errors;
      $_SESSION['show_register_form'] = true;
      header("Location: index.php");
      exit();
    }
    else{
      require_once "common/db.php";

      $isRegistered = registerUser($name, $email, $password);

      if($isRegistered){
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'You have registered. And log in';
        $_SESSION['show_login_form'] = true;
        header("Location: index.php");
        exit();
      }
      else{
        $_SESSION['status'] = 'mainError';
        $_SESSION['message'] = 'User with this email already exists';
        $_SESSION['show_register_form'] = true;
        header("Location: index.php");
        exit();
      }
    }

  }

?>