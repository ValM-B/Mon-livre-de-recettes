<?php
namespace App\Controllers;

class MainController extends CoreController
{
    public function home()
    {
        $this->show("main/home");
    }

    public function admin()
    {
        $this->show("main/admin-home");
    }
}