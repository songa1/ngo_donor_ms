<?php

require '../assets/components/checkAuth.php';
checkAuth();

$ngo_id = $_GET['ngo'];
require_once '../Models/DonorModel.php';
$donorIn = new DonorModel();

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
    <link rel="stylesheet" href="../css/funds.css">
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
                                        $donorName = $donorIn->getDonorById($fund['fund_donor']);
                                        ?>
                                            <tr>
                                                <td><?php echo $fund['fund_id'] ?></td>
                                                <td><?php echo $fund['fund_amount'] ?></td>
                                                <td><?php echo $donorName['donor_name']; ?></td>
                                                <td>
                                                    <form class="button-div
                                                    " method="POST">
                                                        <input type="submit" value="Edit">
                                                        <input type="submit" value="Delete" name="delete_fund">
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                    }

                                    if(isset($_POST['delete_fund'])){
                                        $result = $userIn->deleteFund($userId);
                                        if($result){
                                            echo "<script>window.location.href = './funds.php?ngo='+$ngo_id</script>";
                                        }else{
                                            echo $result;
                                        }
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
                        <label for="f-source">Fund Source</label>
                        <select name="f-source" id="f-source" required>
                            <option>Select the source of this fund</option>
                            <?php
                                $donors = $donorIn->listDonorsForNgo($ngo_id);
                                foreach($donors as $donor){
                                    ?>
                                        <option value="<?php echo $donor['donor_id'] ?>"><?php echo $donor['donor_name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-div">
                        <label for="f-amount">Fund Amount</label>
                        <input type="number" name="f-amount" id="f-amount" placeholder="Amount" required>
                    </div>
                    <div class="input-div">
                        <label for="b-type">Funds Type</label>
                        <select name="f-type" id="f-type" required>
                            <option>Select a fund type</option>
                            <?php
                                $types = $fundIn->listAllTypesOfFunds();
                                foreach($types as $type){
                                    ?>
                                        <option value="<?php echo $type['funtype_id'] ?>"><?php echo $type['type_name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Fund" name="add-fund">
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['add-fund'])){
                $source = $_POST['f-source'];
                $amount = $_POST['f-amount'];
                $type = $_POST['f-type'];

                $fundIn->registerFunds(null, $source, $amount, $ngo_id, $type);
            }
        ?>
    </div>
    <script src="../js/fundsModal.js"></script>
</body>
</html>