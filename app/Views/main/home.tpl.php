<main>
    <h1 class="display-1 home-title">Le Cupcake Enchanté</h1>
    <div class="container">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                
                foreach ($lastRecipes as $key => $recipe) :?>
                
                    <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>" data-bs-interval="3000">
                        <a href="<?= $router->generate('recipe-read', ['id' => $recipe->getId()]) ?>">
                            <img src="<?= $recipe->getPicture() ?>" class="d-block w-75 mx-auto" alt="Photo de la recette <?= $recipe->getTitle(); ?>">
                        </a>    
                    </div>
                <?php
                
                endforeach;
                ?>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <form class = "home-search">
            <div class="container text-center">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-12">
                        <label  for="specificSizeInputName">Rechercher une recette</label>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="specificSizeInputName" placeholder="">
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <button type="submit" class="btn btn-primary col-sm-2">Submit</button>
                </div>
            </div>
        </form>
    </div>