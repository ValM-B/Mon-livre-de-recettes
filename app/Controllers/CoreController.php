<?php
namespace App\Controllers;

class CoreController
{
    protected function show ($viewName, $viewData = [])
    {
        //! A supprimer quand je pourrai
        global $router;

        $viewData['currentPage'] = $viewName;

        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';

        $viewData['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewData);

        require_once __DIR__ . '/../Views/layout/header.tpl.php';
        require_once __DIR__ . '/../Views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../Views/layout/footer.tpl.php';
    }

    /**
     * redirige vers une autre route
     * 
     * @param $routeName
     * @return void
     */
    protected function redirectToRoute($routeName)
    {
        global $router;
        // une fois le formulaire traité on redirige l'utilisateur
        header('Location: ' . $router->generate($routeName));
    }

    /**
     * vérifie si l'utilsateur peut acceder à une page
     *
     * @return void
     */
    // protected function checkAuthorisation($authorisationRoles)
    // {
    //     if(!isset($_SESSION["userId"])){
    //         $this->redirectToRoute('main-login');
    //     } else {
    //         $user = $_SESSION["userObject"];
          
    //         if ( !in_array($user->getRole(), $authorisationRoles)) {
    //             http_response_code(403);
    //             die("Vous n'avez pas les droits");
    //         }
    //     }
    // }
}