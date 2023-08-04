<main>
    <h1 class="display-1 home-title">Ajouter une recette</h1>
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
                        <input type="number" name="portions" class="form-control" id="portions" placeholder="Nombre de parts">
                           
                        
                    </div>
                    <div class="mb-3 categoryId">
                    <label for="category_id" class="form-label">Categorie</label>
                    <select id="category_id" name="category_id" class="form-control">
                    
                        <option value="tarte">Tarte</option>
                        <option value="tarte">Macaron</option>
                    
                    </select>
                    </div>


                    <div class="mb-3 ingrédients">
                        <label for="ingrédients">Ingrédients</label>
                        <textarea name="ingrédients" class="form-control" id="ingredients" placeholder="Liste des ingrédients" rows="10">
                        </textarea>
                    
                    </div>
                    <div class="mb-3 instructions">
                        <label for="instructions">Instructions</label>
                        <textarea name="instructions" class="form-control" id="instructions" placeholder="Instructions" rows="10"><?php
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