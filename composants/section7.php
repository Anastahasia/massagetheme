<?php include_once 'bdd/connexion.php';?>

<section id="partSeven" class="format">
    <p class="intro">Magazine</p>
    <h2>Our beauty blog</h2>

    <hr>

    <div class="threeCards">   
         <?php
    foreach ($affiche as $article){
            echo '<div class="card">
            <img src="' .$article['photo']. '" alt="">
           <h3>' .$article['titre']. '</h3> 
           <p class="winner">'. $article['author']. '</p>
           <a class="contact" href="article.php">Read more</a>
           </div>';
    }?>
    </div>
</section>