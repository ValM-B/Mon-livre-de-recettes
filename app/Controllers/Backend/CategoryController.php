<?php
namespace App\Controllers\Backend;

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