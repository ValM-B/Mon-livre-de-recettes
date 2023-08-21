<?php
namespace App\Controllers;

use App\Models\Category;

class CoreController
{
    private $router;

    public function __construct($match, $routerFromAltoDispatcher)
    {
        $this->router = $routerFromAltoDispatcher;
        
        if (is_array($match))
        {
            $currentRouteId = $match['name'];
            
            require_once __DIR__ . '/../acl.php';
            if (array_key_exists($currentRouteId, $acl))
            {
                $rolesToCheck = $acl[$currentRouteId];
                $this->checkAuthorization($rolesToCheck);
            }
        }

        //     // TODO centraliser la validation des token csrf ( prononcé sea surf )
        //     $postCSRF = [
        //         'category-editHomeOrderExecute',
        //     ];
        //     if (array_key_exists($currentRouteId, $postCSRF))
        //     {
        //         // vérifier le token csrf
        //         if (! array_key_exists('csrf-token', $_POST))
        //         {
        //             // TODO afficher une page d'erreur non autorisé
        //             die('petit malandrin');
        //         }
        //         if ($_POST['csrf-token'] !== $_SESSION['csrf-token'])
        //         {
        //             die('petit malandrin tu te crois malin');
        //         }
        //     }
        // }
    }

    public function setRouter($router)
    {
        $this->router = $router;
    }

    protected function show ($viewName, $viewData = [])
    {
        $router = $this->router;

        $viewData["categoryList"] = Category::findAll("name");

        $viewData['currentPage'] = $viewName;

        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';

        $viewData['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewData);

        require_once __DIR__ . '/../Views/layout/header.tpl.php';
        require_once __DIR__ . '/../Views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../Views/layout/footer.tpl.php';
    }

    /**
     * redirects to another route
     * 
     * @param $routeName
     * @return void
     */
    protected function redirectToRoute($routeName)
    {
        $router = $this->router;
        
        header('Location: ' . $router->generate($routeName));
    }

    /**
     * checks if the user can access a page
     *
     * @return void
     */
    protected function checkAuthorization($authorisationRoles)
    {
        if(!isset($_SESSION["userId"])){
            $this->redirectToRoute('main-login');
        } else {
            $user = $_SESSION["userObject"];

            if ( !in_array($user->getRole(), $authorisationRoles)) {
                http_response_code(403);
                die("Vous n'avez pas les droits");
            }
        }
    }


}