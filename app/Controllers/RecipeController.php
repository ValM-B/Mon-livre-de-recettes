<?php
namespace App\Controllers;

class RecipeController extends CoreController
{
    /**
     * Affiche la liste des recettes
     * 
     * @return void
     */
    public function browse(){
        $this->show("recipe/browse");
    }

    /**
     * Affiche une recette
     * 
     * @return void
     */
    public function read($recipeId){
        $bodyClassName = "recipe";
        $this->show("recipe/read", [
            "body-class-name" => $bodyClassName
        ]);
    }

    public function adminBrowse()
    {
        $this->show("recipe/admin-browse");
    }

    public function add()
    {
        $this->show("recipe/add");
    }

    public function edit($id)
    {
        $this->show("recipe/edit");
    }

    public function editExecute($id)
    {
        if(isset($_POST["submit"])){
            var_dump($_SESSION);

            unset($_SESSION['name']);
            unset($_SESSION['portions']);
            unset($_SESSION['categoryId']);
            unset($_SESSION['instructions']);
            unset($_SESSION['id']);
            var_dump($_SESSION);

        } else {
                        
            $_SESSION['name'] = filter_input(INPUT_POST, 'name');
            $_SESSION['portions'] = filter_input(INPUT_POST, 'portions');
            $_SESSION['categoryId'] = filter_input(INPUT_POST, 'category_id');
            $_SESSION['instructions'] = filter_input(INPUT_POST, 'instructions');
            $_SESSION['id'] = $id;
            
            $this->redirectToRoute('recipe-admin-edit-addIngredient');


        }
    }

    public function addIngredient(){
        $this->show("recipe/add-ingredients");
    }

    public function addIngredientExecute()
    {
        global $router;
        header('Location: ' . $router->generate('recipe-admin-edit',["id" => $_SESSION['id']]));
        
    }
}