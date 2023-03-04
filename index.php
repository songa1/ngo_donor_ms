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
            <form class="login-form" method="POST">
                <div class="input-div">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="input-div">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="button-div">
                    <input type="submit" name="loginBtn" value="Log in">
                    <a href="./register.php">Register</a>
                </div>
            </form>

            <?php

                if(isset($_POST['loginBtn'])){
                    
                    require_once('./Models/UserModel.php');

                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    
                    $userInstance = new UserModel();
                    $login = $userInstance->login($email, $password);

                    echo $login;
                }

            ?>
        </div>
        <footer>
            <p>&copy; Achille Songa 2023</p>
        </footer>
    </div>
</body>
</html>