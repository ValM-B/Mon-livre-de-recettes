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
}