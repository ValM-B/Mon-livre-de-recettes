<?php
namespace App\Controllers\Backoffice;

use App\Controllers\CoreController;
use App\Models\User;

class UserController extends CoreController
{
    public function browse()
    {
        $users = User::findAll();
        $this->show("user/browse", [
            'bodyClassName' => "admin",
            'users' => $users
        ]);
    }
}