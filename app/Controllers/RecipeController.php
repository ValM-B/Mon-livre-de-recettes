<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Recipe;

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
     * Affiche la liste des recettes
     * 
     * @return void
     */
    public function browseByCategory($categoryId){
        $recipeList = Recipe::findByCategory($categoryId);
        
        $this->show("recipe/browse", [
            "recipeList" => $recipeList
        ]);
    }

    /**
     * Affiche une recette
     * 
     * @return void
     */
    public function read($recipeId){
        $recipe = Recipe::find($recipeId);
        
        
        $this->show("recipe/read", [
            "bodyClassName" => "recipe",
            "recipe" => $recipe,
            
        ]);
    }


}