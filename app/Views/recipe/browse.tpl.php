<main>
		<h2 class="display-1 home-title">Recettes de la catégorie
		</h2>
		<div class="category-recipes row row-cols-1 row-cols-md-3 g-4">
			<?php
			foreach ($recipeList as $currentRecipe) :?>
				<div class="col">
					<a href="<?= $router->generate('recipe-read', ['id' => $currentRecipe->getId()]) ?>">
						<div class="card h-100">
							<img src="<?=$currentRecipe->getPicture()?>" class="card-img-top" alt="...">
							<div class="card-body">
							<h5 class="card-title"><?= $currentRecipe->getTitle() ?></h5>
							</div>
						</div>
					</a>
				</div>
			<?php
			endforeach;
			
			?>
						
		</div>