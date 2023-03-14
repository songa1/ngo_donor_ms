<?php

require 'assets/components/checkAuth.php';
checkAuth();

require_once '../Models/NgoModel.php';
require_once '../Models/BeneficiaryModel.php';
require_once '../Models/DonorModel.php';
require_once '../Models/FundModel.php';

$ngo_id = $_GET['ngo'];
$ngoIn = new NgoModel();
$benefIn = new BeneficiaryModel();
$donorIn = new DonorModel();
$funds = new FundModel();

$ngos = $ngoIn->getAll();
$donors = $donorIn->listDonorsForNgo($ngo_id);
$beneficiaries = $benefIn->listBeneficiariesByNgo($ngo_id);

$fundAmount = 0;

$funds = $funds->listFundsForNgo($ngo_id);
foreach($funds as $fund){
    $fundAmount += $fund['fund_amount'];
}

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
                        <?php
                            if($_COOKIE['userRole'] == 1){
                                ?>
                                    <div class="analytic">
                                        <h1>NGOs</h1>
                                        <p><?php echo count($ngos); ?></p>
                                    </div>
                                <?php
                            }
                        
                        ?>
                        <div class="analytic">
                            <h1>Donors</h1>
                            <p><?php echo count($donors); ?></p>
                        </div>
                        <div class="analytic">
                            <h1>Beneficiaries</h1>
                            <p><?php echo count($beneficiaries); ?></p>
                        </div>
                        <div class="analytic">
                            <h1>Raised (RWF)</h1>
                            <p><?php echo $fundAmount; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>