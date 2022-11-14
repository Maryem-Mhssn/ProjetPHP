<?php
    session_start(); 

    if(isset($_POST['langues']))
    {
        $_SESSION['langues'] = $_POST['langues'];
        
        if($_POST['langues'] == "en")
        {
            require_once('en-lang.php');
        }else{
            require_once('fr-lang.php');
        }
    }else if(isset($_SESSION['langues'])){
        
        if($_SESSION['langues'] == "en")
        {
            require_once('en-lang.php');
        }else{
            require_once('fr-lang.php');
        }

    }else{
        require_once('fr-lang.php');
    }

    // vérifier si post existe
        // redef session charger bon fichier php
    // else verif si session existe
        // charger fichier
        //fichier par defaut

?>