<?php 

  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $errors = [];

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

    if($errors){
      $_SESSION['status'] = 'error';
      $_SESSION['errors'] = $errors;
      $_SESSION['show_login_form'] = true;
      header("Location: index.php");
      exit();
    }
    else{
      require_once "common/db.php";

      $user = loginUser($email, $password);

      if($user){
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'You have logged in';
        $_SESSION['user'] = $user;
        header("Location: main.php");
      }
      else{
        $_SESSION['status'] = 'mainError';
        $_SESSION['message'] = 'No user with such email or password';
        $_SESSION['show_login_form'] = true;
        header("Location: index.php");
        exit();
      }
    }
  }

?>