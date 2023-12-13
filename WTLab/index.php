<?php 
session_start();

// if (!isset($_SESSION['flname'])) {
//     $_SESSION['mgs'] = "You must Log in First";
//     header('location: login.php');
// }
// if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['flname']);
//     header('location: login.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Home Page</h2>
    </div>

    <div class="content">
        <?php if(isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if(isset($_SESSION['flname'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['flname']; ?> </p>
            <p>Welcome to my project page</p>
            <!-- <p><strong> <a href="index.php?logout='1'" style="color: red;" >logout </a></strong></p> -->
        <?php endif ?>
    </div>
    
</body>
</html>