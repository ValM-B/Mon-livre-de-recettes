<main>
    <h1 class="display-1 home-title">Administration</h1>
    <div class="container">
        <div class="card card-recipe mt-4 p-4">
            <h2>Liste des recettes</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= $router->generate('recipe-add') ?>" class="btn btn-warning" role="button">Ajouter</a> 
            </div>
            <table class="table table-striped" id="table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-end">
                        <a href="<?= $router->generate('admin-recipe-edit', ['id' => 1]) ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                            </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                            </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                            </div>
                        </div>
                    </td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-center">
                <a href="<?= $router->generate('admin-recipe-browse') ?>" class="btn btn-warning float-end" role="button">Voir toutes les recettes</a> 
    
            </div>
        </div>
        <div class="container row">
            <div class="card card-category mt-4 p-4 col-6">
                <h2>Liste des catégories</h2>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?= $router->generate('admin-category-add') ?>" class="btn btn-warning float-end" role="button">Ajouter</a> 
                </div>
                <table class="table table-striped" id="table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-center">
                <a href="<?= $router->generate('admin-category-browse') ?>" class="btn btn-warning float-end" role="button">Voir toutes les catégories</a> 
    
            </div>
            </div>
            <div class="card card-category mt-4 p-4 col-6">
                <h2>Liste des ingrédients</h2>
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
            <div class="d-grid gap-2 d-md-flex justify-content-center">
                <a href="<?= $router->generate('admin-ingredient-browse') ?>" class="btn btn-warning float-end" role="button">Voir tous les ingrédients</a> 
    
            </div>
        </div>
        </div>
    </div>