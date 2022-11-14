<?php
    include_once('header.php');
    include_once('../controller/livres_ctrl.php');
?>
    
    <div class="card">

        <section class="panel">
                
            <div class="header_panel">
                <h1><?= $lang['t_livres']; ?></h1>
            </div>
                
            <div class="content">

                <div class="list-book">
                    <div id="item-list-book">
                    
                        <?php 
                        if(!$empty)
                        {
                            for($i = 0; $i <4; $i++)
                            {?>
                            <div class="item-book">
                                <a title="Lien qui mène à une page qui détaille le livre <?= $books[$i]->getTitre() ?>" href="detail_livre.php?id=<?php echo $books[$i]->getId(); ?>"><img alt="Première de couverture du livre <?= $books[$i]->getTitre() ?>" src="<?php echo $books[$i]->getCouverture(); ?>"/></a>
        
                                <div>
                                    <a title="Lien qui mène à une page qui détaille le livre <?= $books[$i]->getTitre() ?>" href="detail_livre.php?id=<?php echo $books[$i]->getId(); ?>" class="infos_books"><?php echo $books[$i]->getTitre();?></a> 
                                    <p class="infos_books"><?php echo $books[$i]->getAuteur();?></p> 
                                    <p  class="infos_books text-fondu"><?php echo $books[$i]->getDescription();?></p>
                                </div>                                 
                            </div>
                        <?php }
                        }?>
                    </div>

                    <button id="more_books"><?= $lang['btn_plus_livres']; ?></button>

                </div>                   
                
            </div>            
    
        </section>

    </div> 

    <script src="livres_ajx.js"></script>
         
<?php 
    include('footer.php');
?>
