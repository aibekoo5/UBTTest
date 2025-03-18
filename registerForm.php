<div class="wrapper fadeInDown" id="wrapperR">
    <div id="formContent">
        <?php
        $hasErrors = false;
        if (isset($_SESSION['status'])) {
            if ($_SESSION['status'] == 'error') {
                $hasErrors = true;
            }elseif ($_SESSION['status'] == 'mainError') {
                echo '<div class="mainError">' . $_SESSION['message'] . '</div>';
            }
        }
        ?>

        <button class="closeForm-btn" onclick="hideModalR()">×</button>

        <h2 class="inactive underlineHover"><a type="button" onclick="showLoginForm()">Sign In</a></h2>
        <h2 class="active">Sign Up</h2>

        <div class="fadeIn first">
            <img src="img/register.jpg" id="icon" alt="User Icon">
        </div>

        <form action="register.php" method="POST">
            <div class="input-groupp">
                <input type="text" id="register-name" class="fadeIn second" name="name" placeholder="name">
                <?php if ($hasErrors && isset($_SESSION['errors']['name'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['name'] ?></p>
                <?php } ?>
            </div>

            <div class="input-groupp">
                <input type="email" id="register-email" class="fadeIn third" name="email" placeholder="email">
                <?php if ($hasErrors && isset($_SESSION['errors']['email'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['email'] ?></p>
                <?php } ?>
            </div>

            <div class="input-groupp">
                <input type="password" id="register-password" class="fadeIn fourth" name="password" placeholder="password" required>
                <button type="button" class="toggle-password" onclick="togglePassword('register-password')">👁</button>
                <?php if ($hasErrors && isset($_SESSION['errors']['password'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['password'] ?></p>
                <?php } ?>
            </div>

            <div class="input-groupp">
                <input type="password" id="register-confirmPassword" class="fadeIn fifth" name="confirm_password" placeholder="confirm password" required>
                <button type="button" class="toggle-password" onclick="togglePassword('register-confirmPassword')">👁</button>
                <?php if ($hasErrors && isset($_SESSION['errors']['confirm_password'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['confirm_password'] ?></p>
                <?php } ?>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>