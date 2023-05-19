<?php
echo "mon test marche";
require("../config/fonction.php");
include("../layout/header.php")


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>insert</title>
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">titre de l'image </label>
                <input type="name" name="image" class="form-control" require>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">nom du produit</label>
                <input type="text" name="nom" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10" require></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prix</label>
                <input type="number" name="prix" class="form-control" require>
            </div>

            <button type="submit" name="valider" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>

<?php
 if(isset($_POST['valider']))
 {
    var_dump($_POST);
    
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['description']) AND isset($_POST['prix'])) 
    {
        if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['description']) AND !empty($_POST['prix'])) 
        {
            $image = htmlspecialchars($_POST['image']);
            $nom = htmlspecialchars($_POST['nom']);
            $description = htmlspecialchars($_POST['description']);
            $prix = htmlspecialchars($_POST['prix']);

            try
            {
                ajouter($nom, $image, $description, $prix);
            }catch (Exception $e){
                $e->getMessage();
            }
        }
    }
 }

?>