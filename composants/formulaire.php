
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Article</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'headerblog.php';?>

    <main id="article">
       <form action="../bdd/creation.php" method="POST"> 
        <div class="backgroundimg"></div>
        <section  class ="blog">
        <input type="text" name="titreArticle" id="titreArticle" placeholder="Un titre">
            <p>Pulished on <p>
            <div class="circle">
                <img src="https://secure.gravatar.com/avatar/5af83c554b772438cfc5eec34fa8faa4?s=96&d=mm&r=g" alt="">
            </div>
        </section>

        <section id="corps">

                <label for="resume">Resumé de l'article</label>
                <textarea name="resume" id="resume" cols="150" rows="10"></textarea>

                <input type="text" name="titre2" id="titre2" placeholder="Soustitre">

                <label for="contenu2">Premier paragraphe de l'article</label>
                <textarea name="contenu2" id="contenu2" cols="150" rows="20"></textarea>

                <input type="text" name="photo" id="photo" placeholder="Une illustration">

                <input type="text" name="titre3" id="titre3" placeholder="Soustitre">

                <label for="contenu3">Deuxième paragraphe de l'article</label>
                <textarea name="contenu3" id="contenu3" cols="150" rows="20"></textarea>

                <input type="submit" value="Créer un nouvel article">
            
        </section></form>
    </main>
</body>
</html>

