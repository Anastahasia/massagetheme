<?php
class maConnexion{

    private $titreBaseDeDonnees/* = ""*/;
    private $motDePasse/* = ""*/;
    private $utilisateur/* = "root"*/;
    private $hote/* = "localhost"*/;
    private $connexionPDO;

    public function __construct($titreBaseDeDonnees, $motDePasse, $utilisateur, $hote){
        $this ->titreBaseDeDonnees = $titreBaseDeDonnees;
        $this ->motDePasse = $motDePasse;
        $this ->utilisateur = $utilisateur;
        $this ->hote = $hote;

        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->titreBaseDeDonnees;charset=utf8mb4";
            $this->connexionPDO = new PDO($dsn, $this ->utilisateur, $this ->motDePasse);
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }

    }
    
    public function select($table,$colonne){
        try {
            $requete = "SELECT $colonne FROM $table";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat ->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultat;
            
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }

    }

    public function insertionArticle($titre, $resume, $titre2, $contenu2, $contenu3, $titre3, $photo){
        try {
            $requete = "INSERT INTO articles (titre, resume, titre2, contenu2, titre3, contenu3, photo) VALUES(:titre, :resume, :titre2, :contenu2, :titre3, :contenu3, :photo)";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->bindParam(':titre',$titre,PDO::PARAM_STR);
            $requete_prepare->bindParam(':resume',$resume,PDO::PARAM_STR);
            $requete_prepare->bindParam(':titre2',$titre2,PDO::PARAM_STR);
            $requete_prepare->bindParam(':contenu2',$contenu2,PDO::PARAM_STR);
            $requete_prepare->bindParam(':titre3',$titre3,PDO::PARAM_STR);
            $requete_prepare->bindParam(':contenu3',$contenu3,PDO::PARAM_STR);
            $requete_prepare->bindParam(':photo',$photo,PDO::PARAM_STR);
            
            
            $requete_prepare->execute();
            return $requete_prepare;
            echo 'insertion reussie';
        }catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function updateArticle($colonne, $valeurs, $numero){
        try {
            $requete = "UPDATE article SET $colonne = '$valeurs' WHERE idarticle = $numero";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->bindParam(':titre',$titre,PDO::PARAM_STR);
            $requete_prepare->bindParam(':resume',$resume,PDO::PARAM_STR);
            $requete_prepare->bindParam(':titre2',$titre2,PDO::PARAM_STR);
            $requete_prepare->bindParam(':contenu2',$contenu2,PDO::PARAM_STR);
            $requete_prepare->bindParam(':titre3',$titre3,PDO::PARAM_STR);
            $requete_prepare->bindParam(':contenu3',$contenu3,PDO::PARAM_STR);
            $requete_prepare->bindParam(':photo',$photo,PDO::PARAM_STR);
            
            
            $requete_prepare->execute();
            return $requete_prepare;
            echo 'insertion reussie';
        }catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}

$blog = new maConnexion('massageproject','','root','localhost');
$affichage = $blog->select('articles','*');
/*$blog->insertionArticle("you","should","probably","choose","your","words","wisely","my","dear");*/