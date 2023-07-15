<main>
    <h1 class="display-1 home-title">Modifier l'ingrédient <?=$idIngredient?> de la recette <?= $idRecipe ?></h1>
    <div class="container">
        <div class="card card-category mt-4 p-4">
        <form method="POST" action="">
            <div class="form-group">
                <label for="ingredientUnit">Quantité</label>
                <input type="number" step="0.01" class="form-control" id="quantity"  placeholder="Quantité">
                <p>ml</p>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>