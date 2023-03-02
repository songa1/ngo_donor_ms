<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NGO MS</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/ngo-list.css">
</head>
<body>
    <div class="container">
        <?php include('./assets/components/topNavigation.php') ?>
        <div class="center-part">
            <h2>Welcome Damascene!</h2>
            <p>Here's a list of NGOs you belong to. Click on it to go to the dashboard, or create another one.</p>
            <div class="ngo-list">
                <div class="ngo">
                    <div><p>Compassion International</p></div>
                </div>
                <div class="ngo">
                    <div><p>Save The Children</p></div>
                </div>
                <div class="ngo-add" id="openAddModal">
                    <h1>+</h1>
                </div>
            </div>
            <?php
                
            ?>
        </div>
        <footer>
            <p>&copy; Achille Songa 2023</p>
        </footer>
    </div>
</body>
</html>