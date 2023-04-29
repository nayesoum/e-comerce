<?php
require("config/fonction.php");

$Produits=voirResultat();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/style.css" />
    <title>shopanaye</title>
</head>
<body>
    <p>jndizhbfuchzevhbficxjnezkl</p>
<div class="container">   
    <?php foreach($Produits as $produit):?>
    <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?=$produit->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$produit->nom ?></h5>
                    <p class="card-text"><?=$produit->description ?></p>
                    <p class="card-text"><?=$produit->prix ?></p>
                    
                    <a href="#" class="btn btn-primary">voir plus</a>
                </div>
            </div>
    </div>  
    <?php endforeach; ?>
</div> 



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>