<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Recipe;

class RecipeController extends CoreController
{
    /**
     * Affiche la liste des recettes d'une catégorie
     * 
     * @param int $categoryId identifiant de la catégorie
     * @return void
     */
    public function browseByCategory($categoryId){
        $recipeList = Recipe::findByCategory($categoryId);
        
        $this->show("recipe/browse", [
            "recipeList" => $recipeList,
            'bodyClassName' => "category"
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