<?php
    require_once "../model/bdd_model.php";

    if(isset($_POST['nom_signin']) &&
        isset($_POST['prenom_signin']) &&
        isset($_POST['mdp_signin']) &&
        isset($_POST['username_signin']) &&
        isset($_POST['email_signin'])         
    ){
        $nom = htmlentities($_POST['nom_signin']);
        $prenom = htmlentities($_POST['prenom_signin']);
        $mdp = htmlentities($_POST["mdp_signin"]);
        $pwd_hash = password_hash($mdp, PASSWORD_DEFAULT);
        $username = htmlentities($_POST['username_signin']);
        $email = htmlentities($_POST['email_signin']);

        $db = new Database();
        $db->init_user_table();        

        $exist = $db->user_exist($username, $email);
        
        if(count($exist) == 0)
        {
            $db->new_user($username,$pwd_hash,$prenom,$nom,$email);
        }else{
            echo "pas dans bdd";
        }

        header("Location: ../vue/index.php");
        
    }
?>