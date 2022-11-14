<?php
    session_start();

    unset($_SESSION['username']);
    unset($_SESSION) ; 
        
    session_destroy();
    header("Location: ../vue/index.php");
   


?>