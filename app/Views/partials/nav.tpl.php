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
                    Pâtisserie
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($categoryList as $currentCategory) : 
                            if($currentCategory->getFamily() === "patisserie"){?>
                            <li><a class="dropdown-item" href="<?= $router->generate('recipe-browse-category', ['id' => $currentCategory->getId()]) ?>"><?=$currentCategory->getName()?></a></li>
                        <?php
                            }
                        endforeach;
                        
                        ?>
                    </ul>
                </li>
                <?php
                    foreach ($categoryList as $currentCategory) : 
                        if($currentCategory->getFamily() === "autre"){?>
                        <li class="nav-item"><a class="nav-link" href="<?= $router->generate('recipe-browse-category', ['id' => $currentCategory->getId()]) ?>"><?=$currentCategory->getName()?></a></li>
                <?php
                        }
                    endforeach;
                    
                ?>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boulange</a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($categoryList as $currentCategory) : 
                            if($currentCategory->getFamily() === "boulange"){?>
                            <li><a class="dropdown-item" href="<?= $router->generate('recipe-browse-category', ['id' => $currentCategory->getId()]) ?>"><?=$currentCategory->getName()?></a></li>
                        <?php
                                }
                            endforeach;
                            unset($currentCategory);
                        ?>
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