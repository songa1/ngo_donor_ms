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
    <title>Employees - NGO MS</title>
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
                        <h2>Employees</h2>
                        <div class="new-search">
                            <div class="input-search">
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="button-div">
                                <input type="submit" name="add-new" id="add-new" value="+">
                            </div>
                        </div>
                    </div>
                    <div class="data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employee Name</th>
                                    <th>Employee Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once '../Models/UserModel.php';

                                    $userIn = new UserModel();
                                    $employees = $userIn->listEmployees($ngo_id);
                                    $userId = 0;
                                    foreach($employees as $employee){
                                        $userId = $employee['employee_id'];
                                        ?>
                                            <tr>
                                                <td><?php echo $employee['employee_id'] ?></td>
                                                <td><?php echo $employee['employee_name'] ?></td>
                                                <td><?php echo $employee['employee_email'] ?></td>
                                                <td>
                                                    <form class="button-div
                                                    " method="POST">
                                                        <input type="submit" value="Edit">
                                                        <input type="submit" value="Delete" name="delete_user">
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                    }

                                    if(isset($_POST['delete_user'])){
                                        $result = $userIn->deleteNgo($userId);
                                        if($result){
                                            echo "<script>window.location.href = './users.php?ngo='+$ngo_id</script>";
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

        <div id="addUser" class="modal">
        <!-- Modal content -->
            <form class="modal-content" method="POST">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a new Employeee</h2>
                </div>
                <div class="modal-body">
                    <div class="input-div">
                        <label for="e-name">Employee Name</label>
                        <input type="text" name="e-name" id="e-name" placeholder="Name" required>
                    </div>
                    <div class="input-div">
                        <label for="-e-email">Employee Email</label>
                        <input type="email" name="e-email" id="e-email" placeholder="Email" required>
                    </div>
                    <div class="input-div">
                        <label for="e-phone">Employee Phone Number</label>
                        <input type="tel" name="e-phone" id="e-phone" placeholder="Phone Number" required>
                    </div>
                    <div class="input-div">
                        <label for="e-dob">Employee Date Of Birth</label>
                        <input type="date" name="e-dob" id="e-dob" placeholder="Date Of Birth" required>
                    </div>
                </div>
                <div class="modal-footer button-div">
                    <div></div>
                    <input type="submit" value="Add Employee" name="add-employee">
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['add-employee'])){
                $name = $_POST['e-name'];
                $email = $_POST['e-email'];
                $phone = $_POST['e-phone'];
                $dob = $_POST['e-dob'];
                $pass = 'pass';

                $userIn->registerUser(null, $name, $email, $phone, $dob, $pass, $ngo_id, 3);
            }
        ?>
    </div>
    <script src="../js/modal.js"></script>
</body>
</html>