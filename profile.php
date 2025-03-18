<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php include_once "common/included.php" ?>
</head>
<body>
    <?php 
        require_once "common/checkAuth.php";
        include_once "common/asideMenu.php";
    
        if (isset($_SESSION['show_edit_form'])) {
            echo "<script>sessionStorage.setItem('show_edit_form', 'true');</script>";
        } 
    ?>
    <div class="mainPage">
        <?php include_once "common/header.php";?>
        <div class="main-profile">
            <?php 
                if(isset($_SESSION['status'])){
                    if($_SESSION['status'] == 'success'){
                        if (isset($_SESSION['message'])) {
                            echo '<div class="success"><span>' . $_SESSION['message'] . '  </span></div>';
                        }
                    }
                }
            ?>
            <h3>Profile manage</h3>
            <div class="profileDiv">
                <?php include_once "common/asideProfile.php" ?>
                <div class="divider-profile"></div>
                <div class="right-profile">
                    <div style="display: flex; align-items:center; justify-content: space-between; height: 3rem">
                        <h4>Personal information</h4>
                        <button class="edit" onclick="showEditForm()"><i><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></i></button>
                    </div>
                    <div class="divider2"></div>
                    <div class="profile-info">
                        <div class="avatar">
                            <span class="info-name">Avatar </span>
                            <img class="info-img" src="http://localhost:8080/UBTTest/img/avatars/<?=$_SESSION['user']['avatar'] ?? 'default.jpg'?>" alt="no-avatar">
                        </div>
                        <div class="divider2"></div>
                        <div class="infoDiv">
                            <span class="info-name">Name </span>
                            <span class="info"><?= $_SESSION['user']['name'] ?></span>
                        </div>
                        <div class="divider2"></div>
                        <div class="infoDiv">
                            <span class="info-name">Email </span>
                            <span class="info"><?= $_SESSION['user']['email'] ?></span>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <?php include_once "editProfile.php" ?>

    <?php
        if (isset($_SESSION['status'])) {
            unset($_SESSION['status']);
            unset($_SESSION['message']);
            unset($_SESSION['mainError']);
            unset($_SESSION['errors']);
            unset($_SESSION['show_edit_form']);
        }
    ?>


    <script src="http://localhost:8080/UBTTest/js/script.js"></script>

</body>
</html>

