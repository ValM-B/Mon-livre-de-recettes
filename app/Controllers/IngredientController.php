<?php
namespace App\Controllers;

class IngredientController extends CoreController
{
    public function browse()
    {
        $this->show("ingredient/browse");
    }

    public function add()
    {
        $this->show("ingredient/add");
    }

    public function addExecute()
    {
        var_dump($_POST);
        var_dump($_SESSION);
        if(!empty($_SESSION)){
            $this->redirectToRoute("admin-recipe-edit-addIngredient");
        } else {
            $this->redirectToRoute("admin-ingredient-browse");
        }
    }

    public function edit($id)
    {
        $this->show("ingredient/edit");
    }
}