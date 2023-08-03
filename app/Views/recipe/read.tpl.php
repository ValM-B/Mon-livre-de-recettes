
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
                        <?= $recipe->getIngredients(); ?>
                        <!-- <ul class="ingredient">
                            <li>Pommes de terre</li>
                            <li>Oignons</li>
                            <li>Beurre</li>
                            <li>Crème fraîche</li>
                            <li>Fromage râpé</li>
                            <li>Sel</li>
                            <li>Poivre</li>
                            <li>Persil</li>
                            <li>Chapelure</li>
                        </ul> -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card card-recipe mt-4 p-4">
            <p><?= $recipe->getInstructions(); ?></p>
        </div>
    </div>