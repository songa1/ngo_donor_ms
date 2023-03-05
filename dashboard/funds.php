<?php

$ngo_id = $_GET['ngo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funds - NGO MS</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/modal.css">
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
                        <h2>Funds</h2>
                        <div class="new-search">
                            <div class="input-search">
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="button-div">
                                <input type="submit" name="add-new-fund" id="add-new-fund" value="+">
                            </div>
                        </div>
                    </div>
                    <div class="data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Fund ID</th>
                                    <th>Amount</th>
                                    <th>Donor</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once '../Models/FundModel.php';

                                    $fundIn = new FundModel();
                                    $funds = $fundIn->listFundsForNgo($ngo_id);
                                    foreach($funds as $fund){
                                        ?>
                                            <tr>
                                                <td><?php echo $fund['fund_id'] ?></td>
                                                <td><?php echo $fund['fund_amount'] ?></td>
                                                <td><?php echo $fund['fund_donor'] ?></td>
                                                <td>
                                                    <div class="button-div
                                                    ">
                                                        <input type="submit" value="Edit">
                                                        <input type="submit" value="Delete">
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="addFunds" class="modal">
        <!-- Modal content -->
            <form class="modal-content" method="POST">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a new Fund</h2>
                </div>
                <div class="modal-body">
                    <div class="input-div">
                        <label for="b-name">Beneficiary Name</label>
                        <input type="text" name="b-name" id="b-name" placeholder="Name" required>
                    </div>
                    <div class="input-div">
                        <label for="b-email">Beneficiary Email</label>
                        <input type="email" name="b-email" id="b-email" placeholder="Email" required>
                    </div>
                    <div class="input-div">
                        <label for="b-phone">Beneficiary Phone Number</label>
                        <input type="tel" name="b-phone" id="b-phone" placeholder="Phone Number" required>
                    </div>
                    <div class="input-div">
                        <label for="b-occupation">Beneficiary Occupation</label>
                        <input type="text" name="b-occupation" id="b-occupation" placeholder="Occupation" required>
                    </div>
                    <div class="input-div">
                        <label for="e-dob">Beneficiary Date Of Birth</label>
                        <input type="date" name="b-dob" id="b-dob" placeholder="Date Of Birth" required>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Beneficiary" name="add-beneficiary">
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['add-beneficiary'])){
                $name = $_POST['b-name'];
                $email = $_POST['b-email'];
                $phone = $_POST['b-phone'];
                $dob = $_POST['b-dob'];
                $occupation = $_POST['b-occupation'];

                $benefIn->registerBeneficiary(null, $name, $email, $phone, $dob, $occupation, $ngo_id);
            }
        ?>
    </div>
    <script src="../js/fundsModal.js"></script>
</body>
</html>