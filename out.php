<?php
    if(isset($_COOKIE['auth'])){
        if($_COOKIE['auth'] == 1){
            setcookie("auth", "", time() - 3600);
            setcookie("userRole", "", time() - 3600);
            setcookie("userName", "", time() - 3600);
            setcookie("userId", "", time() - 3600);
            header("Location: ./index.php");
        }else{
            return false;
        }
    }else{
        echo "<script>alert('Already looged out!')</script>";
    }

?>