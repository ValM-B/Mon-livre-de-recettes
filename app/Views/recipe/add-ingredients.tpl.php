<main>
    <h1 class="display-1 home-title">Ajouter un ingredient à la recette</h1>
    <div class="container">
        <div class="card card-category mt-4 p-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?= $router->generate('admin-ingredient-add') ?>" class="btn btn-warning float-end" role="button">Créer un nouvel ingrédient</a> 
        </div>
        <form method="POST" action="">
            <div class="mb-3 ingrédient">
                <label for="ingrédient" class="form-label">Ingrédient</label>
                <select id="ingrédient" name="ingrédient" class="form-control">
                
                    <option value="tarte">Farine</option>
                    <option value="tarte">Lait</option>
                
                </select>
            </div>

            <div class="form-group">
                <label for="ingredientUnit">Quantité</label>
                <input type="number" step="0.01" class="form-control" id="quantity"  placeholder="Quantité">
                <p>ml</p>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>