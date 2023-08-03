<?php
namespace App\Controllers\Backoffice;

use App\Controllers\CoreController;

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