<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account on NGO MS</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
    <?php include('./assets/components/notLoggedInNav.php') ?>
        <div class="center-part">
            <h3>Create a new account</h3>
            <form class="login-form" action="./welcome.php">
                <div class="input-div">
                    <label for="full-name">Full name</label>
                    <input type="text" name="full-name" id="full-name" placeholder="Full Name">
                </div>
                <div class="input-div">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="User name">
                </div>
                <div class="input-div">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="input-div">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password">
                </div>
                <div class="input-div">
                    <label for="c-password">Confirm Password</label>
                    <input type="text" name="c-password" id="c-password" placeholder="Confirm Password">
                </div>
                <div class="button-div">
                    <input type="submit" value="Register" name="register-btn">
                    <a href="./index.php">Login</a>
                </div>
            </form>
        </div>
        <footer>
            <p>&copy; Achille Songa 2023</p>
        </footer>
    </div>
</body>
</html>