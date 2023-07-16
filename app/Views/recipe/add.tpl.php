<main>
    <h1 class="display-1 home-title">Ajouter une recette</h1>
    <div class="container col-md-6">
        <div class="card card-category mt-4 p-4 ">
            <div class="row justify-content-center">
                <form class="col-sm-8" action="" method="POST">
                    <div class="form-group">
                        <label for="recipeName">Nom</label>
                        <input type="text" class="form-control" id="recipeName"  placeholder="Nom de la recette">
                    </div>
                    <div class="form-group">
                        <label for="portions">Nombre de parts</label>
                        <input type="number" name="rate" class="form-control" id="portions" placeholder="Nombre de parts">
                    </div>
                    <div class="mb-3 categoryId">
                    <label for="category_id" class="form-label">Categorie</label>
                    <select id="category_id" name="category_id" class="form-control">
                    
                        <option value="tarte">Tarte</option>
                        <option value="tarte">Macaron</option>
                    
                    </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>