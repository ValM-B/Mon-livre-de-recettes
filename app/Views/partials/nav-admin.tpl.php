<nav class="navbar navbar-expand-lg">
    <div class="container-fluid header_menu">
        <a class="navbar-brand" href="<?=$router->generate("main-home")?>">Retour sur le site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate("admin-home")?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate("admin-category-browse")?>">Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate("admin-recipe-browse")?>">Recettes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate("admin-user-browse")?>">Utilisateurs</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= $router->generate('admin-user-session-edit') ?>"><i class="fa-solid fa-user me-2"></i><?= $_SESSION['userObject']->getName() ?></a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $router->generate("logout")?>">Se déconnecter</a>
                </li>
            </ul>
		</div>
	</div>
</nav>