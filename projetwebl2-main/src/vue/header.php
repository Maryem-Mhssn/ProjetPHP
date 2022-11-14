<?php
    include_once('../model/bdd_model.php');
    include_once('lang/lang.php');   
?>

<!doctype html>

    <html>
        <head>
            <meta charset="UTF-8"/>
            <title>Book</title>
            <link rel="shortcut icon" type="image/png" href="../../asset/favicon.png">
            <link rel='stylesheet' href="main.css"/>
            <link rel='stylesheet' href="../../css/home.css" />
            <link rel='stylesheet' href="../../css/contact.css" />
            <link rel='stylesheet' href="../../css/livres.css" />
            <link rel='stylesheet' href="../../css/detail_livre.css" />
            <link rel='stylesheet' href="../../css/header.css" />
            <link rel='stylesheet' href="../../css/footer.css" />        
        </head>

        <body>
            <header>
                <nav class="f_navbar">
                    <div>
                        <a title="Lien vers l'acceuil" href="index.php"><img alt="Logo du site" class="logo" src="../../asset/logo.png"></a>
                        <a title="Lien vers l'acceuil" href="index.php" class="activated"><?= $lang['btn_home']; ?></a>
                        <a title="Lien vers la page qui liste des livres" href="livres.php"class="activated"><?= $lang['btn_book']; ?></a>
                        <a title="Lien vers la page de contact du site" href="contact.php" class="activated"><?= $lang['btn_contact']; ?></a>

                    </div>
                    
                    
                    <div class="f_navbar_p2">

                        <?php if( isset($_SESSION['username']) )
                        {?>
                        <a title="Lien qui permet de se déconnecter du site" href="../model/logout.php"> <img alt="L'icone de déconnection" class="avatar_icon" src="../../asset/logout.png"/></a>
                        <?php } ?>

                        <?php if( !isset($_SESSION['username']) )
                        {?>
                        <button class="icon_button" type="submit" id="connection">
                            <img alt="Un avatar de l'utilisateur" class="avatar_icon" src="../../asset/avatar.png"/>
                        </button>
                        <?php } ?>
                        
                        <form style="height: 3vh; margin: auto;"  method="post" id="form">
                            <select  class="select-css" name="langues" id="langue">
                            <?php if($_POST['langues'] == "en" ||$_SESSION['langues'] == "en")
                            { echo "in";?>
                                <option value="en">en</option>
                                <option value="fr">fr</option>
                            <?php }else{ ?>
                                <option value="fr">fr</option>
                                <option value="en">en</option>
                            <?php } ?>
                            </select>
                        </form>

                    </div>

                </nav>

            </header>


            <!-- FORM DE CONNECTION-->
            
            <div id="connection_modal" class="modal">
                
                <div class="form-modal">
                        
                    <div class="header_panel">
                        <h1><?= $lang['t_connection']; ?></h1>
                        <span class="close">&times;</span>
                    </div>

                    <div class="panel_content_form">            

                        <!--FORM LOGIN -->
                        <form method="POST" action="../controller/login_ctrl.php" id="login_form">
                                
                            <div class="infos_connection"> 

                                <div>
                                    <label><?= $lang['lbl_pseudo']; ?></label>
                                    <input name="username_login" type="text" placeholder="<?= $lang['lbl_pseudo']; ?>" id="username_login">
                                </div>
                                    
                                <div>
                                    <label><?= $lang['lbl_mdp']; ?></label>
                                    <input name="mdp_login" type="password" placeholder="<?= $lang['lbl_mdp']; ?>" id="mdp_login">
                                </div>

                                <input id="btn_login_form" name="submit_login_form" type="submit" value="<?= $lang['btn_se_connecter']; ?>"/>
                                <a href=""><?= $lang['lbl_mdp_oublie']; ?></a>

                            </div>

                        </form>

                        <!--FORM SIGNIN -->
                        <form method="POST" action="../controller/signin_ctrl.php" id="form_signin">
                            <div class="infos_connection"> 
                                
                                <div>
                                    <label><?= $lang['lbl_pseudo']; ?></label>
                                    <input name="username_signin" type="text" placeholder="<?= $lang['lbl_pseudo']; ?>" id="username_signin">
                                    
                                </div>

                                <div>
                                    <label><?= $lang['lbl_prenom']; ?></label>
                                    <input name="prenom_signin" type="text" placeholder="<?= $lang['lbl_prenom']; ?>" id="prenom_signin">
                                </div>
                                        
                                <div>
                                    <label><?= $lang['lbl_nom']; ?></label>
                                    <input name="nom_signin" type="text" placeholder="<?= $lang['lbl_nom']; ?>" id="nom_signin">
                                </div>
                                        
                                <div>
                                    <label><?= $lang['lbl_mdp']; ?></label>
                                    <input name="mdp_signin" type="password" placeholder="<?= $lang['lbl_mdp']; ?>" id="mdp_signin">
                                </div>

                                <div>
                                    <label><?= $lang['lbl_email']; ?></label>
                                    <input name="email_signin" type="text" placeholder="<?= $lang['lbl_email']; ?>" id="email_signin">
                                </div>

                                <input id="btn_signin_form" name="submit_signin_form" type="submit" value="<?= $lang['btn_s_inscrire']; ?>">
                                <a><?= $lang['lbl_pas_inscrit'] ?></a>
                            </div>
                        </form>                        

                    </div>

                </div>
                
            </div>