<?php

?>
    <div class="header-part">
        <h2 class="logo">NGO MS</h2>
        <div class="menu">
            <div class="profile-name">
                <img src="./assets/images/TRAINING BANNER.gif" alt="Profile picture">
                <p><?php echo $_COOKIE['userName']; ?></p>
            </div>
            <?php
                if($_COOKIE['userRole'] == 1) {
                    ?>
                        <a href="./dashboard/analytics.php">Admin</a>
                    <?php
                }
            ?>
            <a href="./index.php" id="logout">Log out</a>
        </div>
    </div>
<?php

?>