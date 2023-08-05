<main>
<h1 class="display-1 home-title">
        <?php echo isset($recipeToUpdate) ? "Modifier une catégorie" : "Ajouter une catégorie";?>
    </h1>
    <div class="container">
        <div class="card card-category mt-4 p-4">
            <?php
            if(isset($errorList)){
                foreach ($errorList as $error) :?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                <?php
                endforeach;
            } ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="categoryName">Nom</label>
                <input type="text" class="form-control" id="categoryName"  placeholder="Nom de la catégorie" name="name">
                <label for="categoryFamily">Famille</label>
                <input type="text" class="form-control" id="categoryFamily"  placeholder="Nom de la catégorie" name="family">
            </div>
            
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
        </div>
    </div>