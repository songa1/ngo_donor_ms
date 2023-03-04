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
                                <input type="submit" name="add-new" id="add-new" value="+">
                            </div>
                        </div>
                    </div>
                    <div class="data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Donor Name</th>
                                    <th>Donor Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Compassion International</td>
                                    <td>Spiritual Support</td>
                                    <td>
                                        <div class="button-div
                                        ">
                                            <input type="submit" value="Edit">
                                            <input type="submit" value="Delete">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Compassion International</td>
                                    <td>Spiritual Support</td>
                                    <td>
                                        <div class="button-div
                                        ">
                                            <input type="submit" value="Edit">
                                            <input type="submit" value="Delete">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Compassion International</td>
                                    <td>Spiritual Support</td>
                                    <td>
                                        <div class="button-div
                                        ">
                                            <input type="submit" value="Edit">
                                            <input type="submit" value="Delete">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Compassion International</td>
                                    <td>Spiritual Support</td>
                                    <td>
                                        <div class="button-div
                                        ">
                                            <input type="submit" value="Edit">
                                            <input type="submit" value="Delete">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Compassion International</td>
                                    <td>Spiritual Support</td>
                                    <td>
                                        <div class="button-div
                                        ">
                                            <input type="submit" value="Edit">
                                            <input type="submit" value="Delete">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>