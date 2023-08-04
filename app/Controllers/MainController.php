<?php
namespace App\Controllers;

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

        $this->show("main/admin-home");
    }
}