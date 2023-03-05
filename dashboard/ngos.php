<?php

$ngo_id = $_GET['ngo'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGOs we have</title>
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
                        <h2>NGOs</h2>
                        <div class="new-search">
                            <div class="input-search">
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="button-div">
                                <input type="submit" name="add-new-ngo" id="add-new-ngo" value="+">
                            </div>
                        </div>
                    </div>
                    <div class="data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NGO Name</th>
                                    <th>NGO Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once '../Models/NgoModel.php';

                                    $ngoInstance = new NgoModel();
                                    $ngos = $ngoInstance->getAll();
                                    foreach($ngos as $ngo){
                                        ?>
                                            <tr>
                                                <td><?php echo $ngo['ngo_id'] ?></td>
                                                <td><?php echo $ngo['ngo_name'] ?></td>
                                                <td><?php echo $ngo['ngo_address'] ?></td>
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
        <div id="addNgo" class="modal">
        <!-- Modal content -->
            <form class="modal-content" method="POST">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a new Ngo</h2>
                </div>
                <div class="modal-body">
                    <div class="input-div">
                        <label for="b-name">Ngo Name</label>
                        <input type="text" name="b-name" id="b-name" placeholder="Name" required>
                    </div>
                    <div class="input-div">
                        <label for="b-email">Ngo Email</label>
                        <input type="email" name="b-email" id="b-email" placeholder="Email" required>
                    </div>
                    <div class="input-div">
                        <label for="b-phone">Ngo Phone Number</label>
                        <input type="tel" name="b-phone" id="b-phone" placeholder="Phone Number" required>
                    </div>
                    <div class="input-div">
                        <label for="b-occupation">Ngo Phone</label>
                        <input type="text" name="b-occupation" id="b-occupation" placeholder="Occupation" required>
                    </div>
                    <div class="input-div">
                        <label for="e-dob">Beneficiary Date Of Birth</label>
                        <input type="date" name="b-dob" id="b-dob" placeholder="Date Of Birth" required>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Ngo" name="add-ngo">
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['add-ngo'])){
                $name = $_POST['b-name'];
                $email = $_POST['b-email'];
                $phone = $_POST['b-phone'];
                $dob = $_POST['b-dob'];
                $occupation = $_POST['b-occupation'];

                $userIn->registerDonor(null, $name, $email, $phone, $dob, $occupation, $ngo_id);
            }
        ?>
    </div>
    <script src="../js/ngoModal.js"></script>
</body>
</html>