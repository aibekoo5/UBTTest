<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "common/included.php" ?>
</head>
<body>
    <?php 
        require_once "common/checkAuth.php";
        include_once "common/asideMenu.php";
    ?>
    <div class="mainPage">
        <?php include_once "common/header.php";?>
        <div class="main-profile">
            <?php 

                $hasErrors = false;
                if(isset($_SESSION['status'])){
                    if($_SESSION['status'] == 'success'){
                        if (isset($_SESSION['message'])) {
                            echo '<div class="success"><span>' . $_SESSION['message'] . '  </span></div>';
                        }
                    }elseif($_SESSION['status'] == 'error'){
                        $hasErrors = true;
                    }
                }
            ?>
            <h3>Profile manage</h3>
            <div class="profileDiv">
                <?php include_once "common/asideProfile.php" ?>
                <div class="divider-profile"></div>
                <div class="right-profile">
                    <div style="display: flex; align-items:center; justify-content: space-between; height: 3rem">
                        <h4>Change password</h4>
                    </div>
                    <div class="divider2"></div>
                    <form action="changePass.php" method="post">
                        <div class="profile-info">
                            <div class="infoDivE">
                                <label for="lastPass" class="passs">Last password:</label>
                                <input type="password" class="fadeIn" name="lastPass" id="login-password">
                                <button type="button" class="toggle-password" onclick="togglePassword('login-password')">👁</button>
                                <?php if ($hasErrors && isset($_SESSION['errors']['lastPass'])) { ?>
                                    <p class="error-text"><?= $_SESSION['errors']['lastPass'] ?></p>
                                <?php } 
                                elseif (isset($_SESSION['status']) && $_SESSION['status'] == 'mainError') { ?>
                                    <p class="error-text"><?= $_SESSION['message'] ?></p>
                                <?php } ?>
                            </div>
                            <div class="infoDivE">
                                <label for="newPass" class="passs">New password:</label>
                                <input type="password" class="fadeIn" name="newPass" id="register-password">
                                <button type="button" class="toggle-password" onclick="togglePassword('register-password')">👁</button>
                                <?php if ($hasErrors && isset($_SESSION['errors']['newPass'])) { ?>
                                    <p class="error-text"><?= $_SESSION['errors']['newPass'] ?></p>
                                <?php }?>
                            </div>
                            <div class="infoDivE">
                                <label for="confPass" class="passs">Confirm new password:</label>
                                <input type="password" class="fadeIn" name="confPass" id="register-confirmPassword">
                                <button type="button" class="toggle-password" onclick="togglePassword('register-confirmPassword')">👁</button>
                                <?php if ($hasErrors && isset($_SESSION['errors']['confPass'])) { ?>
                                    <p class="error-text"><?= $_SESSION['errors']['confPass'] ?></p>
                                <?php } ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Updata</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
    
    <?php
        if (isset($_SESSION['status'])) {
            unset($_SESSION['status']);
            unset($_SESSION['message']);
            unset($_SESSION['mainError']);
            unset($_SESSION['errors']);
        }
    ?>


    <script src="http://localhost:8080/UBTTest/js/script.js"></script>
    
</body>
</html>