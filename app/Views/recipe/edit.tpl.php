<main>
    <h1 class="display-1 home-title">Modifier une recette</h1>
    <div class="container">
        <div class="card card-category mt-4 p-4 ">
            <div class="row justify-content-center">
                <form class="col-sm-8" method="POST" action="">
                    <div class="mb-3 recipeName">
                        <label for="recipeName">Nom</label>
                        <input type="text" name="name" class="form-control" id="recipeName"  placeholder="Nom de la recette" 
                        <?php
                        if(isset($_SESSION["name"])){?>
                            value="<?=$_SESSION["name"]?>"
                
                        <?php
                        }
                        ?>    
                        >
                    </div>
                    <div class="mb-3 portions">
                        <label for="portions">Nombre de parts</label>
                        <input type="number" name="portions" class="form-control" id="portions" placeholder="Nombre de parts"
                        <?php
                        if(isset($_SESSION["portions"])){?>
                            value="<?=$_SESSION["portions"]?>"
                
                        <?php
                        }
                        ?>    
                        >
                    </div>
                    <div class="mb-3 categoryId">
                    <label for="category_id" class="form-label">Categorie</label>
                    <select id="category_id" name="category_id" class="form-control">
                    
                        <option value="tarte">Tarte</option>
                        <option value="tarte">Macaron</option>
                    
                    </select>
                    </div>

                    <div class="card card-recipe mt-4 p-4 mb-3">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" name="submit" value="addIngredient" class="btn btn-primary">Ajouter un ingrédient</button>
                    </div>
                        <label  class="form-label">Liste des ingrédients</label>
                        <table class="table table-striped" id="table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Qantité</th>
                                <th scope="col">unité</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Sucre</td>
                                <td>150</td>
                                <td>g</td>
                                <td class="text-end">
                                    <button type="submit" class="btn btn-sm btn-warning" value="1" name="submit">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
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
                                <td>farine</td>
                                <td>150</td>
                                <td>g</td>
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
                                <td>lait</td>
                                <td>150</td>
                                <td>ml</td>
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
                    </div>

                    <div class="mb-3 instructions">
                        <label for="instructions">Instructions</label>
                        <textarea name="instructions" class="form-control" id="instructions" placeholder="Nombre de parts" rows="10"><?php
                        if(isset($_SESSION["instructions"])){?><?=$_SESSION["instructions"]?>
                        <?php
                        }
                        ?></textarea>
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary" value="validate" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>