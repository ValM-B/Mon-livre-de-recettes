<?php
namespace App\Controllers\Backoffice;

use App\Controllers\CoreController;

class CategoryController extends CoreController
{   
    public function browse()
    {
        $this->show("category/admin-browse");
    }

    public function add()
    {
        $this->show("category/add");
    }
    
}