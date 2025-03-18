<?php 
    session_start();

    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
        $_SESSION['status'] = 'logError';
        $_SESSION['message'] = 'You can not open Main page without login!';
        header("Location: http://localhost:8080/UBTTest/index.php");
        exit();
    }

?>

