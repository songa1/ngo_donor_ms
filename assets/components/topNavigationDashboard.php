<?php

?>
    <div class="header-part">
        <h2 class="logo">NGO MS</h2>
        <div class="menu">
            <div class="profile-name">
                <img src="../assets/images/TRAINING BANNER.gif" alt="Profile picture">
                <a href="../welcome.php"><?php echo $_COOKIE['userName']; ?></a>
            </div>
            <form action="../out.php" method="POST">
                <input type="submit" id="logout" value="Log out">
            </form>
            
        </div>
    </div>
<?php

?>