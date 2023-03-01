<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account on NGO MS</title>
    <link rel="stylesheet" href="./css/main.css">
    <style>
        .reg-parts {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        .reg-part {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php include('./assets/components/notLoggedInNav.php') ?>
        <div class="center-part">
            <h3>Create a new account</h3>
            <form class="register-form">
                <div class="reg-parts">
                    <div class="reg-part">
                        <h2>NGO INFORMATION</h2>
                        <div class="input-div">
                            <label for="full-name">NGO Name</label>
                            <input type="text" name="full-name" id="full-name" placeholder="Full Name">
                        </div>
                        <div class="input-div">
                            <label for="username">NGO Address</label>
                            <input type="text" name="username" id="username" placeholder="User name">
                        </div>
                        <div class="input-div">
                            <label for="email">NGO Phone</label>
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="input-div">
                            <label for="password">NGO Email</label>
                            <input type="text" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="input-div">
                            <label for="c-password">NGO Website</label>
                            <input type="text" name="c-password" id="c-password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="reg-part">
                        <h2>USER INFORMATION</h2>
                        <div class="input-div">
                            <label for="full-name">Full name</label>
                            <input type="text" name="full-name" id="full-name" placeholder="Full Name">
                        </div>
                        <div class="input-div">
                            <label for="username">User Email</label>
                            <input type="text" name="username" id="username" placeholder="User name">
                        </div>
                        <div class="input-div">
                            <label for="email">User Phone</label>
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="input-div">
                            <label for="email">Date of Birth</label>
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
                    </div>    
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