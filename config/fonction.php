<?php
require("connexion.php");
// je crée une fonction qui va ajouter les produits
function ajouter($nom, $image, $description, $prix)
{
    
    if (require("connexion.php")) {
        //demande d'inserer dans la bdd
        $req = $bdd->prepare("INSERT INTO produits(nom, image, description, prix) VALUES ('$nom', '$image', '$description' , $prix ) ");
   //pour le execute ppas besoin de remettre les infos dedans le excute doit etre vide 
        $req->execute();

        //c'est pour fermer le tous
        $req->closeCursor();
    }
}

function voirResultat()
{
    if (require("connexion.php")) {
        //ici je prépare ma demande
        $req = $bdd->prepare("SELECT * FROM produits");
        //ici pour tous recuperer
        $req->execute();
        //data est égale à 
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
        $req->closeCursor();
    }
}

function supprimer($id)
{
    if (require("connexion.php")) {
        $req = $bdd->prepare("DELETE * FROM produits WHERE id=?");
        $req->execute(array($id));
    }
}

