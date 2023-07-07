<?php include_once '../bdd/connexion.php';?>

<section id="" class="">
    <div class="threeCards">   
         <?php
    foreach ($affichage as $article){
            echo '<div class="card">
            <img src="' .$article['photo']. '" alt="">
           <h3>' .$article['titre']. '</h3> 
           <p class="winner">'. $article['datePublication']. '</p>
           <a class="contact" href="article.php">Read more</a>
           </div>';
    }?>
    </div>
</section>