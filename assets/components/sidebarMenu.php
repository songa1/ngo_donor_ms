<?php

?>
    <div class="sidebar-menu">
        <a href="./analytics.php?ngo=<?php echo $ngo_id; ?>">Analytics</a>
        <?php
            if($_COOKIE['userRole'] == 1) {
                ?>
                    <a href="./ngos.php>NGO</a>
                <?php
            }
        ?>
        <a href="./beneficiaries.php?ngo=<?php echo $ngo_id; ?>">Beneficiaries</a>
        <a href="./donors.php?ngo=<?php echo $ngo_id; ?>">Donors</a>
        <a href="./funds.php?ngo=<?php echo $ngo_id; ?>">Funds</a>
        <a href="./users.php?ngo=<?php echo $ngo_id; ?>">Employees</a>
        <a href="./settings.php?ngo=<?php echo $ngo_id; ?>">Settings</a>
    </div>
<?php

?>