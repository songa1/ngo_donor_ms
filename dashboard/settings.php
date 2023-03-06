<?php

require '../assets/components/checkAuth.php';
checkAuth();

$ngo_id = $_GET['ngo'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - NGO MS</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/setting.css">
</head>
<body>
    <div class="container">
        <div class="dashboard">
            <?php include('../assets/components/topNavigationDashboard.php') ?>
            <div class="content-part">
                <div class="left">
                    <?php include('../assets/components/sidebarMenu.php') ?>
                </div>
                <div class="right">
                    <div class="top-action">
                        <h2>Settings</h2>
                        <div class="new-search">
                            <div class="button-div">
                                <input type="submit" name="add-new" id="add-new" value="Save Settings">
                            </div>
                        </div>
                    </div>
                    <div class="data-table">
                        <div class="setting">
                            <p>Edit your Name:</p>
                            <input type="text" placeholder="Full Name" value="Damascene">
                        </div>
                        <div class="setting">
                            <p>Edit your User name:</p>
                            <input type="text" placeholder="User name" value="Damascene">
                        </div>
                        <div class="setting">
                            <p>Edit your Email:</p>
                            <input type="email" placeholder="Email" value="damascene@email.com">
                        </div>
                        <div class="setting">
                            <p>Edit your Occupation:</p>
                            <input type="text" placeholder="Occupation">
                        </div>
                        <div class="setting">
                            <p>Allow us to send you promotional emails:</p>
                            <input type="checkbox" placeholder="Occupation">
                        </div>
                        <div class="setting">
                            <p>Allow us to show your funding data to donors:</p>
                            <input type="checkbox" placeholder="Occupation">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>