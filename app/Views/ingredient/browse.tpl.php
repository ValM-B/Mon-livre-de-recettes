<main>
    <h1 class="display-1 home-title">Liste des ingrédients</h1>
    <div class="container">
        <div class="card card-category mt-4 p-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= $router->generate('admin-ingredient-add') ?>" class="btn btn-warning float-end" role="button">Ajouter</a> 
    
            </div>
            
            <table class="table table-striped" id="table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Unité</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Sucre</td>
                    <td>g</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>farine</td>
                    <td>g</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Lait</td>
                    <td>ml</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>