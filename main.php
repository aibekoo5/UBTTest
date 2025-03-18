<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <?php include_once "common/included.php" ?>
</head>
<body>
    <?php 
        require_once "common/checkAuth.php";
        include_once "common/asideMenu.php";
    ?>

    <div class="mainPage">
        <?php
            include_once "common/header.php";
        ?>
        <main class="main-content">
            <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] == 'success') {
                    echo '<div class="success">' . $_SESSION['message'] . '</div>';
                } 
            ?>

            <h1>Main Page</h1>
        </main>
    </div>

    <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'success'){
        unset($_SESSION['status']);
        unset($_SESSION['success']);
    } ?>

    <script src="http://localhost:8080/UBTTest/js/script.js"></script>
</body>
</html>