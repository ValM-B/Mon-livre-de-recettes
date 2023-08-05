<?php
namespace App\Controllers\Backoffice;

use App\Controllers\CoreController;
use App\Models\Category;

class CategoryController extends CoreController
{   
    public function browse()
    {
        $categories = Category::findAll();
        $this->show("category/admin-browse", [
            'categories' => $categories
        ]);
    }

    public function add()
    {
        $this->show("category/add");
    }
    
    public function addExecute()
    {
        $name = filter_input(INPUT_POST, 'name');
        $family = filter_input(INPUT_POST, 'family');
        
        $errorList = [];

        if(empty($name) || empty($family)) {
            $errorList[] = "Merci de remplir tous les champs";
        }

        $newCategory = new Category();
        $newCategory->setName($name);
        $newCategory->setFamily($family);

        if(!empty($errorList)){
            
            $this->show("category/add", [
                "category" => $newCategory,
                "errorList" => $errorList,
            ]);
            exit;
        }

        if (! $newCategory->save())
        {
            $errorList[] = "Une erreur s'est produite lors de l'enregitrement de la recette. Veuillez réessayer.";
            $this->show("category/add", [
                "category" => $newCategory,
                "errorList" => $errorList,
            ]);
            exit;
        }

        $this->redirectToRoute("admin-category-browse");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        var_dump($category);
        $this->show("category/add", [
            "categoryToUpdate" => true,
            "category1" => $category,
        ]);
    }
}