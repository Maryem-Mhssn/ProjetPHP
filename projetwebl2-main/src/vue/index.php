<?php 
    include_once('header.php'); 
    include_once('../controller/users_ctrl.php');
    include_once('../controller/livres_ctrl.php');  
?>
    
<div class="card">
    <section class="panel">
        <div class="header_panel">
            <h1> <?= $lang['t_actu_mois_titre'] ?></h1>
        </div>

        <div class="panel_content">
                    
        <!--CAROUSSEL-->
            <div class="carousel">

                <div class="carousel_track-container">
                    <ul class="carousel_track">
                    
                        <li class="carousel_slide">
                            <img alt="Image de l'article" class="carousel_image" src="../../asset/comingsoon.png"/>
                        </li>
                    </ul>
                </div>
                
                <button class="carousel_button carousel_button-right">></button>
                <button class="carousel_button carousel_button-left"><</button>
            </div>

            <div class="carousel_nav">
                <button class="carousel_indicator curent-slide"></button>
                <button class="carousel_indicator"></button>
                <button class="carousel_indicator"></button>
            </div>
        </div>

    </section>


    <div class="section_2">

        <section class="panel ab">

            <div class="header_panel">
                <h1><?= $lang['t_ajouts_récents']; ?></h1>
            </div>

            <div class="display_recent_livre">

            <?php for($i=count($books)-1; $i >= 0; $i--)
            {
            ?>
                            
                <a title="Lien qui mène au livre <?= $books[$i]->getTitre(); ?>" href="detail_livre.php?id=<?= $books[$i]->getId(); ?>">
                    <img alt="Première de couverture du livre <?= $books[$i]->getTitre(); ?>" style="height: 23vh; width: auto;" src="<?= $books[$i]->getCouverture(); ?>" />
                </a>
                            
            <?php }?>
            </div>

                        
        </section>
    

        <section class="panel cd">
    
            <div class="header_panel ">
                <h1><?= $lang['t_utilisateurs_recents']; ?></h1>
            </div>

            <div id="testjs">
            <?php foreach($users as $user)
            { ?>
                <p><?php echo $user->getUsername() ;?></p>
            <?php 
            }?>

            </div>
                       
        </section>

    </div>
</div>

            
<script src="js/carousel.js"></script>
                       
<?php include('footer.php') ; ?>
