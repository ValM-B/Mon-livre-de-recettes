<?php
namespace App\Controllers\Backoffice;

use App\Controllers\CoreController;
use App\Models\Category;
use App\Models\Recipe;

class RecipeController extends CoreController
{
    
    public function browse()
    {
        $this->show("recipe/admin-browse");
    }

    public function add()
    {
        $this->show("recipe/add");
    }

    public function addExecute()
    {
        $this->redirectToRoute("admin-recipe-browse");
    }

    public function edit($id)
    {
        $this->show("recipe/edit");
    }

    public function editExecute($id)
    {
        
        if(isset($_POST["submit"])){
            

            $submit = $_POST["submit"];
            var_dump($submit);

            if($submit === "validate"){
                unset($_SESSION['name']);
                unset($_SESSION['portions']);
                unset($_SESSION['categoryId']);
                unset($_SESSION['instructions']);
                unset($_SESSION['id']);
                
                $this->redirectToRoute('admin-recipe-browse');

            } else {
                        
            $_SESSION['name'] = filter_input(INPUT_POST, 'name');
            $_SESSION['portions'] = filter_input(INPUT_POST, 'portions');
            $_SESSION['categoryId'] = filter_input(INPUT_POST, 'category_id');
            $_SESSION['instructions'] = filter_input(INPUT_POST, 'instructions');
            $_SESSION['id'] = $id;

                if($submit === "addIngredient"){
                    $this->redirectToRoute('admin-recipe-edit-addIngredient');
                } else {
                    global $router;
                    header('Location: ' . $router->generate('admin-recipe-edit-editIngredient',["idRecipe" => $id, "idIngredient" => $submit]));
                }
            
            }
        }
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