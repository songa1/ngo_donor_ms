<?php

?>
    <div class="header-part">
        <h2 class="logo">NGO MS</h2>
        <?php
        if(isset($_COOKIE['auth'])){
            if($_COOKIE['auth'] == 1){
                ?>
                    <div class="menu">
                        <div class="profile-name">
                            <img src="./assets/images/TRAINING BANNER.gif" alt="Profile picture">
                            <a href="welcome.php"><?php echo $_COOKIE['userName']; ?></a>
                        </div>
                        <?php
                            if($_COOKIE['userRole'] == 1) {
                                ?>
                                    <a href="./dashboard/analytics.php?ngo=0">Admin</a>
                                <?php
                            }
                        ?>
                        <form method="POST" action="out.php">
                            <input type="submit" id="logout" value="Log out">
                        </form>
                    </div>
                <?php
            }else{
                ?>
                    <div class="menu">
                        <a href="./index.php">Login</a>
                        <a href="./register.php" id="register">Signup</a>
                    </div>
                <?php
            }
        }else{
            ?>
                <div class="menu">
                    <a href="./index.php">Login</a>
                    <a href="./register.php" id="register">Signup</a>
                </div>
            <?php
        }
        ?>
    </div>
<?php
?>