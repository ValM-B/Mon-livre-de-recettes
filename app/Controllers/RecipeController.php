<?php
namespace App\Controllers;

class RecipeController extends CoreController
{
    public function category(){
        $this->show("recipe/recipe-list");
    }

    public function recipe(){
        $bodyClassName = "recipe";
        $this->show("recipe/recipe", [
            "body-class-name" => $bodyClassName
        ]);
    }
}