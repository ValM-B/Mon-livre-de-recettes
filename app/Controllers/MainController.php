<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Recipe;

class MainController extends CoreController
{
    public function home()
    {
        $recipes = Recipe::findLast5();
        $this->show("main/home", [
            'lastRecipes' => $recipes
        ]);
    }

    public function admin()
    {
        $lastRecipes = Recipe::findLast5();
        $lastCategories = Category::findLast5();
        $this->show("main/admin-home", [
            'lastRecipes' => $lastRecipes,
            'lastCategories' => $lastCategories
        ]);
    }
}