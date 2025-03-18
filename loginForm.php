<div class="wrapper fadeInDown" id="wrapperL">
    <div id="formContent">
        <?php
        $hasErrors = false;
        if (isset($_SESSION['status'])) {
            if ($_SESSION['status'] == 'error') {
                $hasErrors = true;
            } elseif ($_SESSION['status'] == 'success') {
                echo '<div class="success">' . $_SESSION['message'] . '</div>';
            } elseif ($_SESSION['status'] == 'mainError') {
                echo '<div class="mainError">' . $_SESSION['message'] . '</div>';
            }
        }
        ?>

        <button class="closeForm-btn" onclick="hideModalL()">×</button>

        <h2 class="active">Sign In</h2>
        <h2 class="inactive underlineHover"><a type="button" onclick="showRegisterForm()">Sign Up</a></h2>

        <div class="fadeIn first">
            <img src="img/загрузка.png" id="icon" alt="User Icon">
        </div>

        <form action="login.php" method="POST">
            <div class="input-groupp">
                <input type="email" id="login-email" class="fadeIn second" name="email" placeholder="email">
                <?php if ($hasErrors && isset($_SESSION['errors']['email'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['email'] ?></p>
                <?php } ?>
            </div>

            <div class="input-groupp">
                <input type="password" id="login-password" class="fadeIn third" name="password" placeholder="password" required>
                <button type="button" class="toggle-password" onclick="togglePassword('login-password')">👁</button>
                <?php if ($hasErrors && isset($_SESSION['errors']['password'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['password'] ?></p>
                <?php } ?>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>