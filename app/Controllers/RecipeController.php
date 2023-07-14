<?php
namespace App\Controllers;

class RecipeController extends CoreController
{
    /**
     * Affiche la liste des recettes d'une catégorie
     * 
     * @return void
     */
    public function category(){
        $this->show("recipe/recipe-list");
    }

    /**
     * Affiche une recette
     */
    public function recipe(){
        $bodyClassName = "recipe";
        $this->show("recipe/recipe", [
            "body-class-name" => $bodyClassName
        ]);
    }
}