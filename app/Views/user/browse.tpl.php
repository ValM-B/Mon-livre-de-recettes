<main>

    <h2 class="display-1 home-title">Liste des utilisateurs</h2>
    <div class="container">
        <div class="card card-recipe mt-4 p-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= $router->generate('admin-user-add') ?>" class="btn btn-warning" role="button">Ajouter</a> 
            </div>
            <table class="table table-striped" id="table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">email</th>
                    <th scope="col">Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $user) :?>
                        <tr>
                            <th scope="row"><?= $user->getId(); ?></th>
                            <td><?= $user->getName() ?></td>
                            <td><?= $user->getEmail() ?></td>
                            <td><?= $user->getRole() ?></td>
                            <td class="text-end">
                                <a href="<?= $router->generate('admin-user-edit', ['id' => $user->getId()]) ?>" class="btn btn-sm btn-warning">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?= $router->generate('admin-user-delete', ['id' => $user->getId()]) ?>">Oui, je veux supprimer</a>
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
        </div>
    </div>