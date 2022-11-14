<?php 
    include_once('header.php'); 
    include_once('../controller/contact_form.php')
?>

    <section class="card">

        <div class="header_panel"> 
            <h1><?= $lang['t_contact']; ?></h1>
        </div>

        <form method="POST" class="panel" id="contact_form">

            <div class="panel_content_bis">

                <div class="info_p1">

                    <label><?= $lang['lbl_nom']; ?></label>
                    <input  name="nom" type="text" placeholder="<?= $lang['lbl_nom']; ?>" id="nom">
                              
                    <label><?= $lang['lbl_prenom']; ?></label>
                    <input name="prenom" type="text" placeholder="<?= $lang['lbl_prenom']; ?>" id="prenom">
                    
                    <label><?= $lang['lbl_email']; ?></label>
                    <input name="email" type="email" name="email" placeholder="<?= $lang['lbl_email']; ?>" id="email">
                        
                </div>                
                        
                <label><?= $lang['lbl_message']; ?></label>
                <textarea name="message" id="message"></textarea>

                <input id="btn_contact_form" name="contact_form" type="submit" value="<?= $lang['btn_envoyer']; ?>"/>
                   
            </div>   
        </form>
            
    </section>

<script src="js/contact.js"></script>

<?php 
    include('footer.php'); 
?>