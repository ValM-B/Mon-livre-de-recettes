<main>
    <h1 class="display-1 home-title">Administration</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-recipe mt-4 p-4">
                    <h2>Liste des recettes</h2>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= $router->generate('recipe-add') ?>" class="btn btn-warning" role="button">Ajouter</a> 
                    </div>
                    <table class="table table-striped" id="table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($lastRecipes as $recipe) :?>
                                <tr>
                                    <th scope="row"><?= $recipe->getId(); ?></th>
                                    <td><?= $recipe->getTitle(); ?></td>
                                    <td class="text-end">
                                        <a href="<?= $router->generate('admin-recipe-edit', ['id' => $recipe->getId()]) ?>" class="btn btn-sm btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= $router->generate('admin-recipe-delete', ['id' => $recipe->getId()]) ?>">Oui, je veux supprimer</a>
                                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>

                        </tbody>
                    </table>
                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                        <a href="<?= $router->generate('admin-recipe-browse') ?>" class="btn btn-warning float-end" role="button">Voir toutes les recettes</a> 
            
                    </div>
                </div>
            </div>    
            <div class="col-md-6">
                <div class="card card-category mt-4 p-4">
                    <h2>Liste des catégories</h2>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= $router->generate('admin-category-add') ?>" class="btn btn-warning float-end" role="button">Ajouter</a> 
                    </div>
                    <table class="table table-striped" id="table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($lastCategories as $category) :?>
                                <tr>
                                    <th scope="row"><?= $category->getId(); ?></th>
                                    <td><?= $category->getName(); ?></td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        
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
                            <?php
                            endforeach;
                            ?>
                            
                        </tbody>
                    </table>
                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                        <a href="<?= $router->generate('admin-category-browse') ?>" class="btn btn-warning float-end" role="button">Voir toutes les catégories</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
