<?php
require("../config/fonction.php");

$Produits = voirResultat();
include("../layout/header.php")
?>

<div class="container">
    <?php foreach ($Produits as $produit) : ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= $produit->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $produit->nom ?></h5>
                    <p class="card-text"><?= $produit->description ?></p>
                    <p class="card-text"><?= $produit->prix ?></p>

                    <a href="#" class="btn btn-primary">voir plus</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
include("../layout/footer.php")
?>