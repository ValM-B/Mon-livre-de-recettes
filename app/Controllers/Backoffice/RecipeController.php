<?php
namespace App\Controllers\Backoffice;

use App\Controllers\CoreController;
use App\Models\Category;
use App\Models\Recipe;

class RecipeController extends CoreController
{
    
    public function browse()
    {
        $recipes = Recipe::findAll("created_at");
        $this->show("recipe/admin-browse", [
            "recipes" => $recipes
        ]);
    }

    public function add()
    {
        $categories = Category::findAll();
        $this->show("recipe/add", [
            "categories" => $categories
        ]);
    }

    public function addExecute()
    {
        $title = filter_input(INPUT_POST, 'title');
        $portions = filter_input(INPUT_POST, 'portions', FILTER_VALIDATE_INT);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
        $ingredients = filter_input(INPUT_POST, 'ingredients');
        $instructions = filter_input(INPUT_POST, 'instructions');
        $rate = filter_input(INPUT_POST, 'rate', FILTER_VALIDATE_INT);
        $picture = filter_input(INPUT_POST, 'picture', FILTER_VALIDATE_URL);

        $errorList = [];

        if(empty($title) || empty($portions) || $category_id == 0 || empty($ingredients) || empty($instructions) || empty($rate) || empty($picture)){
            $errorList[] = "Merci de remplir tous les champs";
        }

        if(!$portions){
            $errorList[] = "Le nombre de parts doit etre un nombre entier";
        }
        if(!$category_id){
            $errorList[] = "Veuillez sélectionner une catégorie dans la liste";
        }
        if(!$rate){
            $errorList[] = "Le note doit être un chiffre entier entre 0 et 5";
        }
        if(!$picture){
            $errorList[] = "Veuillez remplir un url valide";
        }

        $newRecipe = new Recipe();
        $newRecipe->setTitle($title);
        $newRecipe->setPortions($portions);
        $newRecipe->setCategory_id($category_id);
        $newRecipe->setIngredients($ingredients);
        $newRecipe->setInstructions($instructions);
        $newRecipe->setRate($rate);
        $newRecipe->setPicture($picture);

        if(!empty($errorList)){
            $categories = Category::findAll();
            $this->show("recipe/add", [
                "recipe" => $newRecipe,
                "errorList" => $errorList,
                "categories" => $categories
            ]);
            exit;
        }

        if (! $newRecipe->save())
        {
            $errorList[] = "Une erreur s'est produite lors de l'enregitrement de la recette. Veuillez réessayer.";
            $categories = Category::findAll();
            $this->show("recipe/add", [
                "recipe" => $newRecipe,
                "errorList" => $errorList,
                "categories" => $categories
            ]);
            exit;
        }

        $this->redirectToRoute("admin-recipe-browse");
        
    }

    public function edit($id)
    {
        $recipe = Recipe::find($id);
        $categories = Category::findAll();
        $this->show("recipe/add", [
            "recipeToUpdate" => true,
            "recipe" => $recipe,
            "categories" => $categories
        ]);
    }

    public function editExecute($id)
    {
        $title = filter_input(INPUT_POST, 'title');
        $portions = filter_input(INPUT_POST, 'portions', FILTER_VALIDATE_INT);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
        $ingredients = filter_input(INPUT_POST, 'ingredients');
        $instructions = filter_input(INPUT_POST, 'instructions');
        $rate = filter_input(INPUT_POST, 'rate', FILTER_VALIDATE_INT);
        $picture = filter_input(INPUT_POST, 'picture', FILTER_VALIDATE_URL);

        $errorList = [];

        if(empty($title) || empty($portions) || $category_id == 0 || empty($ingredients) || empty($instructions) || empty($rate) || empty($picture)){
            $errorList[] = "Merci de remplir tous les champs";
        }

        if(!$portions){
            $errorList[] = "Le nombre de parts doit etre un nombre entier";
        }
        if(!$category_id){
            $errorList[] = "Veuillez sélectionner une catégorie dans la liste";
        }
        if(!$rate){
            $errorList[] = "Le note doit être un chiffre entier entre 0 et 5";
        }
        if(!$picture){
            $errorList[] = "Veuillez remplir un url valide";
        }

        $recipeToUpdate = Recipe::find($id);
        $recipeToUpdate->setTitle($title);
        $recipeToUpdate->setPortions($portions);
        $recipeToUpdate->setCategory_id($category_id);
        $recipeToUpdate->setIngredients($ingredients);
        $recipeToUpdate->setInstructions($instructions);
        $recipeToUpdate->setRate($rate);
        $recipeToUpdate->setPicture($picture);

        if(!empty($errorList)){
            $categories = Category::findAll();
            $this->show("recipe/add", [
                "recipe" => $recipeToUpdate,
                "errorList" => $errorList,
                "categories" => $categories
            ]);
            exit;
        }

        if (! $recipeToUpdate->save())
        {
            $errorList[] = "Une erreur s'est produite lors de l'enregitrement de la recette. Veuillez réessayer.";
            $categories = Category::findAll();
            $this->show("recipe/add", [
                "recipe" => $recipeToUpdate,
                "errorList" => $errorList,
                "categories" => $categories
            ]);
            exit;
        }

        $this->redirectToRoute("admin-recipe-browse");
        
    }

    public function addIngredient(){
        $this->show("recipe/add-ingredients");
    }

    public function addIngredientExecute()
    {
        global $router;
        header('Location: ' . $router->generate('admin-recipe-edit',["id" => $_SESSION['id']]));
        
    }

    public function editIngredient($idRecipe, $idIngredient)
    {
        $this->show("recipe/edit-ingredient", [
            "idRecipe" => $idRecipe,
            "idIngredient" => $idIngredient
        ]);
    }

    public function editIngredientExecute($idRecipe, $idIngredient)
    {
        global $router;
        header('Location: ' . $router->generate('admin-recipe-edit',["id" => $idRecipe]));
    }

}