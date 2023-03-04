<?php

$ngo_id = $_GET['ngo'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics - NGO MS</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/analytics.css">
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
                        <h2>Analytics</h2>
                        <div class="new-search">
                            <div class="input-search">
                                <select name="date" id="date">
                                    <option value="1">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="1">Previous 7 days</option>
                                    <option value="1">Previous 28 days</option>
                                    <option value="1">Lifetime</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="data-table">
                        <div class="analytic">
                            <h1>NGOs</h1>
                            <p>12</p>
                        </div>
                        <div class="analytic">
                            <h1>Donors</h1>
                            <p>12</p>
                        </div>
                        <div class="analytic">
                            <h1>Beneficiaries</h1>
                            <p>12</p>
                        </div>
                        <div class="analytic">
                            <h1>Funds ($)</h1>
                            <p>12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>