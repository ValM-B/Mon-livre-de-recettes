<main>
		<h1 class="display-1 home-title">Recettes de la catégorie
		</h1>
		<div class="category-recipes row row-cols-1 row-cols-md-3 g-4">
			<?php
			foreach ($recipeList as $recipe) :?>
				<div class="col">
					<a href="<?= $router->generate('recipe-read', ['id' => $recipe->getId()]) ?>">
						<div class="card h-100">
							<img src="<?=$recipe->getPicture()?>" class="card-img-top" alt="...">
							<div class="card-body">
							<h5 class="card-title"><?= $recipe->getTitle() ?></h5>
							</div>
						</div>
					</a>
				</div>
			<?php
			endforeach;
			?>
						
		</div>