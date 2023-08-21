<h2 class="display-1 home-title"><?= $recipe->getTitle(); ?></h2>
<div class="container">

    <!-- Card for displaying recipe details -->
    <div class="card card-ingredients">
        <div class="card-body">
            <div class="container">
                <div class="row">

                    <!-- Column for displaying recipe image -->
                    <div class="col-md-6 d-flex align-items-center">
                        <img src="<?= $recipe->getPicture(); ?>" alt="">
                    </div>

                    <div class="col-md-6">
                        <h3 class="text-center">Ingrédients pour <?= $recipe->getPortions(); ?> personnes</h3>

                        <!-- Rating display -->
                        <div class="rate text-center">
                            <?php
                            /**
                             * Loop to display rating cupcakes
                             */
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

                        <!-- Displaying the list of ingredients -->
                        <div class="ingredients-list">
                            <?= $recipe->getIngredients(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card for displaying recipe instructions -->
    <div class="card card-recipe mt-4 p-4">
        <p><?= $recipe->getInstructions(); ?></p>
    </div>
</div>