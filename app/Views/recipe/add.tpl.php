<main>
    <!-- Display the appropriate title based on whether updating a recipe or adding a new one -->
    <h1 class="display-1 home-title">
        <?php echo isset($recipeToUpdate) ? "Modifier une recette" : "Ajouter une recette";?>
    </h1>
    <div class="container">
        <div class="card card-category mt-4 p-4 ">
            <div class="row justify-content-center">

                <!-- Form to add or update a recipe -->
                <form class="col-sm-8" method="POST" action="">

                    <!-- Field for the recipe title -->
                    <div class="mb-3 recipeTitle">
                        <label for="recipeTitle">Titre de la recette</label>
                        <input type="text" name="Title" class="form-control" id="recipeTitle"  placeholder="Nom de la recette" 
                            value='<?php echo isset($recipeToUpdate) ? $recipeToUpdate->getTitle() : "" ?>' 
                        >
                    </div>

                    <!-- Field for the number of servings -->
                    <div class="mb-3 portions">
                        <label for="portions">Nombre de parts</label>
                        <input type="number" name="portions" class="form-control" id="portions" placeholder="Nombre de parts" 
                        value='<?php echo isset($recipeToUpdate) ? $recipeToUpdate->getPortions() : "" ?>' >
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
                                    if(isset($recipeToUpdate) && $recipeToUpdate->getCategory_id() === $category->getId()){
                                        echo "selected";
                                    }?>
                                ><?= $category->getName() ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <!-- Field for the recipe ingredients -->
                    <div class="mb-3 ingrédients">
                        <label for="ingrédients">Ingrédients</label>
                        <textarea name="ingrédients" class="form-control" id="ingredients" placeholder="Liste des ingrédients" rows="10">
                            <?php echo isset($recipeToUpdate) ? $recipeToUpdate->getIngredients() : "" ?>
                        </textarea>
                    </div>

                    <!-- Field for the recipe instructions -->
                    <div class="mb-3 instructions">
                        <label for="instructions">Instructions</label>
                        <textarea name="instructions" class="form-control" id="instructions" placeholder="Instructions" rows="10">
                            <?php echo isset($recipeToUpdate) ? $recipeToUpdate->getInstructions() : "" ?>
                        </textarea>
                    </div>

                    <!-- Button to submit the form -->
                    <button type="submit" class="btn btn-primary" value="validate" name="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>