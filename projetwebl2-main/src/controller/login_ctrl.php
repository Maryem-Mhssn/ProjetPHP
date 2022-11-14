<?php
    //require_once "bdd.php";
    require_once "../model/bdd_model.php";

    if(isset($_POST['username_login']) && isset($_POST['mdp_login']))
    {   
        
        if(isset($_POST['username_login']) &&
        isset($_POST['mdp_login'])        
        )
        {
            $username = htmlentities($_POST['username_login']);
            $mdp = htmlentities($_POST["mdp_login"]);
            
            $db = new Database();
            $db->init_user_table();
            $user = $db->login($username);
            $exist = count($user);

            if($exist == 0)
            {
                //echo "le compte n'existe pas ";
                header("Location: ../vue/index.php");
            }else{
                $bool = false;
                if(password_verify($mdp,$user[0]->getPwd()))
                {
                    session_start();
                    $_SESSION['id'] = $user[0]->getId();
                    $_SESSION['username'] = $username;
                    $_SESSION['langues'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

                }else{
                    //echo "ce n'est pas le bon";
                }

                header("Location: ../vue/index.php");
            }
        }
    }
    echo "oups heuuu";