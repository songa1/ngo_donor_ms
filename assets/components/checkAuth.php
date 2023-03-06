<?php
    function checkAuth(){
        if(isset($_COOKIE['auth'])){
            if($_COOKIE['auth'] == 0){
                header("Location: ../index.php");
            }else{
                
            }
        }else{
            header("Location: ../index.php");
        }
        
    }
?>