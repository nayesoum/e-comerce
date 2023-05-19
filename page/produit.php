<?php
require("../config/fonction.php");

$Produits = voirResultat();
include("../layout/header.php")
?>
<!-- <div class="" style="display:none" id="mySidebar">

    <button class="w3-bar-item w3-button w3-large" onclick="closeSidebar()">Close &times;</button>
    <div class="d-flex flex-column mb-3">



    </div>
</div>
<div class="w3-teal">
    <button id="openNav" class=" " onclick="openSidebar()">&#9776;</button>



</div> -->

<div id="main">
    <div id="carouselExampleControls" class="carousel slide mycarousel" data-bs-ride="carousel">

        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/1040173/pexels-photo-1040173.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1374910/pexels-photo-1374910.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1375736/pexels-photo-1375736.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container ">
        <div class="d-flex justify-content-evenly flex-row shadow p-3 mb-5 bg-body rounded">
            <div class="card" style="width: 18rem;">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quam architecto sint sed optio veniam harum, blanditiis quae nobis. Blanditiis sequi at ipsum et atque in exercitationem, vero facere omnis.</p>
            </div>
            <div class="card" style="width: 18rem;">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, distinctio fugiat aperiam fugit at, omnis id esse nostrum vitae dicta quod soluta optio velit modi! Quod quo saepe hic asperiores.</p>
            </div>
        </div>
        <div class="d-flex justify-content-around flex-row card">
            <div class="card" style="width: 18rem;">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam esse eveniet, a animi deserunt consequuntur odit repudiandae dolore adipisci possimus assumenda nobis rem totam saepe sint voluptatem quam error laudantium.</p>
            </div>
            <div class="card" style="width: 18rem;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus velit quisquam dolores explicabo reprehenderit aspernatur amet atque dolor. Optio eos modi fuga consequatur? Harum mollitia vero eveniet quaerat tempora omnis.</p>
            </div>
        </div>
    </section>


    <button>
        <a href="../page/test.php">ajout de produit</a>
    </button>
    <div class="container">
        <section>
            <div>
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                        Toggle width collapse
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-vertical" id="collapseWidthExample">
                        <div class="card card-body" style="width: 300px;">
                            This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section id="lesCards" class="shadow p-3 mb-5 bg-body rounded">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($Produits as $produit) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $produit->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $produit->nom ?></h5>
                                <p class="card-text"><?= $produit->description ?></p>
                                <p class="card-text"><?= $produit->prix ?>£</p>
                                <!-- Scrollable modal -->

                                <a href="#" class="btn btn-primary">voir plus</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


    </div>




    <!-- fermeture de la div main qui se deplace sur la droite  -->
</div>
</div>
<?php
include("../layout/footer.php")
?>