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
}