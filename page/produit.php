<?php
require("../config/fonction.php");

$Produits = voirResultat();
include("../layout/header.php")
?>



<div class="container">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://picsum.photos/id/237/200/300" class="d-block w-50 img-fluid" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://picsum.photos/seed/picsum/200/300" class="d-block w-50 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/seed/picsum/200/300" class="d-block w-50 img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
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