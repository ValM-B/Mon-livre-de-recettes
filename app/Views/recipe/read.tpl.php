
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
                            <ul class="ingredients">
                                <?php
                                foreach ($ingredients as $ingredient) : ?>
                                    <li><?= $ingredient ?></li>
                                <?php
                                endforeach;
                                ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card card-recipe mt-4 p-4">
            <p><?= $recipe->getInstructions(); ?></p>
        </div>
    </div>