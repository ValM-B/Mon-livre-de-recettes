<?php
namespace App\Controllers;

class CategoryController extends CoreController
{   
    /**
     * S'occupe de 'laffichage de la liste de toutes les catégories
     * 
     * @return void
     */
    public function browse()
    {
        $this->show("category/browse");
    }

    /**
     * s'occupe de l'affichage de la liste des recettes d'une catégorie
     * 
     * @return void
     */
    public function read($categoryId){
        $this->show("category/read");
    }

    public function adminBrowse()
    {
        $this->show("category/admin-browse");
    }

    public function add()
    {
        $this->show("category/add");
    }
    
}