<?php

$ngo_id = $_GET['ngo'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors - NGO MS</title>
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
                        <h2>Donors</h2>
                        <div class="new-search">
                            <div class="input-search">
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="button-div">
                                <input type="submit" name="add-new-donor" id="add-new-donor" value="+">
                            </div>
                        </div>
                    </div>
                    <div class="data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Donor Name</th>
                                    <th>Donor Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    require_once '../Models/DonorModel.php';

                                    $donorIn = new DonorModel();
                                    $donors = $donorIn->listDonorsForNgo($ngo_id);
                                    foreach($donors as $donor){
                                        ?>
                                            <tr>
                                                <td><?php echo $donor['donor_id'] ?></td>
                                                <td><?php echo $donor['donor_name'] ?></td>
                                                <td><?php echo $donor['donor_email'] ?></td>
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
        <div id="addDonor" class="modal">
        <!-- Modal content -->
            <form class="modal-content" method="POST">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a new Donor</h2>
                </div>
                <div class="modal-body">
                    <div class="input-div">
                        <label for="d-name">Donor Name</label>
                        <input type="text" name="d-name" id="d-name" placeholder="Name" required>
                    </div>
                    <div class="input-div">
                        <label for="d-email">Donor Email</label>
                        <input type="email" name="d-email" id="d-email" placeholder="Email" required>
                    </div>
                    <div class="input-div">
                        <label for="d-phone">Donor Phone Number</label>
                        <input type="tel" name="d-phone" id="d-phone" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Donor" name="add-donor">
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['add-donor'])){
                $name = $_POST['d-name'];
                $email = $_POST['d-email'];
                $phone = $_POST['d-phone'];

                $donorIn->registerDonor(null, $name, $email, $phone, $ngo_id);
            }
        ?>
    </div>
    <script src="../js/donorModal.js"></script>
</body>
</html>