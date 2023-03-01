<?php
require '../Models/NgoModel.php';

$obj = new NgoModel();
$obj.getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NGO MS</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
        <?php include('./assets/components/notLoggedInNav.php') ?>
        <div class="center-part">
            <h3>Login to your account</h3>
            <form class="login-form" action="./welcome.php">
                <div class="input-div">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="User name">
                </div>
                <div class="input-div">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password">
                </div>
                <div class="button-div">
                    <input type="submit" value="Log in" name="login-btn">
                    <a href="./register.php">Register</a>
                </div>
            </form>
        </div>
        <footer>
            <p>&copy; Achille Songa 2023</p>
        </footer>
    </div>
</body>
</html>