<div class="wrapper fadeInDown" id="wrapperE"> 
    <div id="formContent">

        <?php

            $hasErrors = false;
            if (isset($_SESSION['status'])) {
                if ($_SESSION['status'] == 'error') {
                    $hasErrors = true;
                } elseif ($_SESSION['status'] == 'mainError') {
                    echo '<div class="mainError">' . $_SESSION['message'] . '</div>';
                }
            }
        ?>

        <button class="closeForm-btn" onclick="hideModalE()">×</button>

        <h4>Updata profile</h4>
        <div class="divider"></div>
        <form action="edit.php" method="post" enctype="multipart/form-data">
            <div class="avatarE">
                <label class="input-file">
                    <span class="input-file-btn">Choose image <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M440-200h80v-167l64 64 56-57-160-160-160 160 57 56 63-63v167ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg></span>
                    <input type="file" id="avatar" name="avatar" accept="image/jpeg,image/jpg,image/png,image/webp" />      
                    <span class="input-file-text" type="text">No file chosen</span>
                </label>
                 <?php if ($hasErrors && isset($_SESSION['errors']['avatar'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['avatar'] ?></p>
                <?php } ?>
            </div>
            <div class="infoDivE">
                <label for="username" class="edit-name">Name:</label>
                <input type="text" id="username" class="fadeIn second" name="username" value="<?= $_SESSION['user']['name'] ?>">
                <?php if ($hasErrors && isset($_SESSION['errors']['name'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['name'] ?></p>
                <?php } ?>
            </div>
            <div class="infoDivE">
                <label for="email" class="edit-name">Email:</label>
                <input type="email" id="email" class="fadeIn second" name="email" value="<?= $_SESSION['user']['email'] ?>">
                <?php if ($hasErrors && isset($_SESSION['errors']['email'])) { ?>
                    <p class="error-text"><?= $_SESSION['errors']['email'] ?></p>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>