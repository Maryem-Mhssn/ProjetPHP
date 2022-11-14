<?php 
    include_once('header.php'); 
    include_once('../controller/detail_livre_ctrl.php');
?>

    <div class="card">
        <div class="header_panel">
            <h1><?= $book->getTitre() ; ?></h1>
        </div>

        <section class="panel">

            <div class="info_livre">

                <img alt="Première de couverture du livre <?= $book->getTitre() ; ?>" src="<?= $book->getCouverture(); ?>"/>

                <div>
                    <p><?= $lang['lbl_auteur']; ?>: <?= $book->getAuteur() ?> </p>
                    <p><?= $lang['lbl_langue_originale']; ?>: <?= $book->getLangueOriginal() ?> </p>
                    <p><?= $lang['lbl_date_sortie']; ?>: <?= $book->date_de_sortie() ?> </p>
                    
                    <p><?= $lang['lbl_date_parution_fr']; ?>: <?= $book->date_parution_fr() ?> </p>
                    <p><?= $lang['lbl_theme']; ?>: <?= $book->themes() ?> </p>
                </div>

            </div>
                
            <div class="descr_livre">
                <p><?= $lang['lbl_description']; ?>:</p>
                <p><?= $book->getDescription(); ?></p>    
            </div>        
    
        </section>

    </div>     

<?php include('footer.php'); ?>