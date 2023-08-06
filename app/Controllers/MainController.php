<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Recipe;
use Symfony\Component\VarDumper\VarDumper;

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
            'lastCategories' => $lastCategories,
            'bodyClassName' => "admin"
        ]);
    }

    /**
     * Méthode s'occupant d'afficher la page login
     *
     * @return void
     */
    public function login(){
        $this->show('main/login');
    }

    /**
     * Traite le formulaire de connexion
     *
     * @return void
     */
    public function loginExecute()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
var_dump($password);
        $errorList=[];

        if (!$email)
        {
            $errorList[] = "Veuillez saisir une adresse email valide.";
            $this->show('main/login', [
                "errorList" => $errorList
            ]);
        }

        
        $user = User::findByEmail($email);
       var_dump($user);
       
        if(!$user || !password_verify($password, $user->getPassword())){
 
                $errorList[]='Identifiant ou Mot de passe invalide';
                $this->show('main/login', [
                    "errorList" => $errorList
                ]);
            
        }else{
            $_SESSION['userId'] = $user->getId();
            $_SESSION['userObject'] = $user;

            $this->redirectToRoute('admin-home');
    
        }
      
    }

    public function logout(){

        unset($_SESSION['userId']);
        unset($_SESSION['userObject']);

        $this->redirectToRoute('main-login');
    }
}