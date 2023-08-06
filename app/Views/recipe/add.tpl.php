<main>
    <!-- Display the appropriate title based on whether updating a recipe or adding a new one -->
    <h2 class="display-1 home-title">
        <?php echo isset($recipeToUpdate) ? "Modifier une recette" : "Ajouter une recette";?>
    </h2>
    <div class="container">
        <div class="card card-category mt-4 p-4 ">
            <div class="row justify-content-center">

            <?php
            if(isset($errorList)){
                foreach ($errorList as $error) :?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                <?php
                endforeach;
            } ?>

                <!-- Form to add or update a recipe -->
                <form class="col-sm-8" method="POST" action="">

                    <!-- Field for the recipe title -->
                    <div class="mb-3 recipeTitle">
                        <label for="recipeTitle">Titre de la recette</label>
                        <input type="text" name="title" class="form-control" id="recipeTitle"  placeholder="Nom de la recette" 
                            value='<?php echo isset($recipe) ? $recipe->getTitle() : "" ?>' 
                        >
                    </div>

                    <!-- Field for the number of servings -->
                    <div class="mb-3 portions">
                        <label for="portions">Nombre de parts</label>
                        <input type="number" name="portions" class="form-control" id="portions" placeholder="Nombre de parts" 
                        value='<?php echo isset($recipe) ? $recipe->getPortions() : "" ?>' >
                    </div>

                    <!-- Selecting the recipe category -->
                    <div class="mb-3 categoryId">
                        <label for="category_id" class="form-label">Categorie</label>
                        <select id="category_id" name="category_id" class="form-control">
                            <option value="0">Choisir une catégorie</option>
                            <?php
                            // Display all available categories in a loop
                            foreach ($categories as $category) :?>
                                <option value="<?= $category->getId() ?>"
                                        
                                    <?php 
                                    // Select the category associated with the recipe being updated
                                    if(isset($recipe) && $recipe->getCategory_id() === $category->getId()){
                                        echo "selected";
                                    }?>
                                ><?= $category->getName() ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <!-- Field for the recipe rate -->
                    <div class="mb-3 rate">
                        <label for="rate">Note sur 5</label>
                        <input type="number" name="rate" class="form-control" id="rate" placeholder="Note" 
                        value='<?php echo isset($recipe) ? $recipe->getRate() : "" ?>' >
                    </div>

                    <!-- Field for the recipe ingredients -->
                    <div class="mb-3 ingrédients">
                        <label for="ingredients">Ingrédients</label>
                        <textarea name="ingredients" class="form-control" id="ingredients" placeholder="Liste des ingrédients" rows="10">
                            <?php echo isset($recipe) ? $recipe->getIngredients() : "" ?>
                        </textarea>
                    </div>

                    <!-- Field for the recipe instructions -->
                    <div class="mb-3 instructions">
                        <label for="instructions">Instructions</label>
                        <textarea name="instructions" class="form-control" id="instructions" placeholder="Instructions" rows="10">
                            <?php echo isset($recipe) ? $recipe->getInstructions() : "" ?>
                        </textarea>
                    </div>

                    <!-- Field for the recipe picture -->
                    <div class="mb-3 recipePicture">
                        <label for="recipePicture">Url de la photo de la recette</label>
                        <input type="text" name="picture" class="form-control" id="recipePicture"  placeholder="url de la photo" 
                            value='<?php echo isset($recipe) ? $recipe->getPicture() : "" ?>' 
                        >
                    </div>

                    <!-- Button to submit the form -->
                    <button type="submit" class="btn btn-primary" value="validate" name="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>