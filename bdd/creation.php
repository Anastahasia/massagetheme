<?php include_once '../bdd/connexion.php';
$titreArticle = $_POST['titreArticle'];
$resume = $_POST['resume'];
$titre2 = $_POST['titre2'];
$contenu2 = $_POST['contenu2'];
$titre3 = $_POST['titre3'];
$contenu3 = $_POST['contenu3'];
$photo = $_POST['photo'];

$blog ->insertionArticle($titreArticle, $resume, $titre2, $contenu2, $titre3,$contenu3, $photo)

?>