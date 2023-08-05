
<main>
    <h1 class="display-1 home-title"><?= $recipe->getTitle(); ?></h1>
    <div class="container">
        <div class="card card-ingredients">
            <div class="card-body">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?= $recipe->getPicture(); ?>" alt="">
                        </div>
                    
                        <div class="col-md-6">
                        <h2 class="text-center">Ingrédients pour <?= $recipe->getPortions(); ?> personnes</h2>
                        <div class="rate text-center">
                            <?php
                            for ($i=1; $i < 6; $i++) { 
                                if($i<=$recipe->getRate()){?>
                                    <img src="<?=$assetsBaseUri?>images/cupcake-couleur.gif" alt="" class="rateCupcake d-inline">
                                <?php } else { ?>
                                    <img src="<?=$assetsBaseUri?>images/cupcake-gris.gif" alt="" class="rateCupcake d-inline">
                                <?php
                                }
                            }
                            ?>
                            
                        </div>
                    
                            <?= $recipe->getIngredients(); ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card card-recipe mt-4 p-4">
            <p><?= $recipe->getInstructions(); ?></p>
        </div>
    </div>