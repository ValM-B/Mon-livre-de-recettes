<nav class="navbar navbar-expand-lg">
    <div class="container-fluid header_menu">
        <a class="navbar-brand" href="<?=$router->generate("main-home")?>">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sucré
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tarte</a></li>
                        <li><a class="dropdown-item" href="#">Glace</a></li>
                        <li><a class="dropdown-item" href="#">Gâteau</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Salé</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tarte</a></li>
                        <li><a class="dropdown-item" href="#">pain</a></li>
                    </ul>
                </li>
                
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
		</div>
	</div>
</nav>