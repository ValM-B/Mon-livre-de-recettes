<?php
namespace App\Controllers\Backoffice;

use App\Controllers\CoreController;
use App\Models\User;

class UserController extends CoreController
{
    /**
     * Display a list of users in the admin area.
     * @return void
     */
    public function browse()
    {
        $users = User::findAll();
        $this->show("user/browse", [
            'bodyClassName' => "admin",
            'users' => $users
        ]);
    }

    /**
     * Display the form to add a new user.
     */
    public function add()
    {
        $this->show("user/add", [
            'bodyClassName' => 'admin'
        ]);
    }

     /**
     * Handle the form submission to add a new user.
     * 
     */
    public function addExecute()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$password = filter_input(INPUT_POST, 'password');
		$role = filter_input(INPUT_POST, 'role');
		$status = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT, ["options" => ['min_range' => 0, 'max_range' => 1]]);
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

        $errorList = [];
        // Validate inputs
        if (!$email)
        {
            $errorList[] = 'Merci de saisir un email valide';
        } else {
			if ( User::findByEmail($email) !== false ) {
				$errorList[] = "Cet utilisateur existe déjà";
			}
		}
        
        if (strlen($password) < 8)
        {
            $errorList[] = 'Le mot de passe doit faire 8 caractères';
        }
        if (strtoupper($password) === $password)
        {
            $errorList[] = 'Le mot de passe doit contenir une lettre minuscule';
        }
        if(! preg_match('/[A-Z]/', $password))
        {
            $errorList[] = 'Le mot de passe doit contenir une lettre majuscule';
        }

        $user = new User;
        $user->setName($name);
        $user->setEmail($email);
		$user->setPassword($passwordHashed);
		$user->setRole($role);
		$user->setStatus($status);

        if(!empty($errorList)){
            $this->show('user/add', [
                "user" => $user,
                "errorList" => $errorList,
                'bodyClassName' => 'admin'
            ]);
            exit;
        }

        if (! $user->save())
        {
            $errorList[] = "Une erreur s'est produite lors de l'enregitrement de l'utilisateur. Veuillez réessayer.";
            $this->show('user/add', [
                "user" => $user,
                "errorList" => $errorList,
                'bodyClassName' => 'admin'
            ]);
            exit;
        }

        $this->redirectToRoute("admin-user-browse");

    }

    /**
     * Display the form to edit a user.
     */
    public function edit($id)
    {
        $user = User::find($id);
        $this->show("user/add", [
            'bodyClassName' => 'admin',
            'user' => $user,
            'userToUpdate' => true
        ]);
    }

    /**
     * Handle the form submission to edit a user.
     * 
     * @return void
     */
    public function editExecute($id)
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$password = filter_input(INPUT_POST, 'password');
		$role = filter_input(INPUT_POST, 'role');
		$status = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT, ["options" => ['min_range' => 0, 'max_range' => 1]]);
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

        $errorList = [];
        // Validate inputs
        if (!$email)
        {
            $errorList[] = 'Merci de saisir un email valide';
        } 
		
        if (strlen($password) < 8)
        {
            $errorList[] = 'Le mot de passe doit faire 8 caractères';
        }
        if (strtoupper($password) === $password)
        {
            $errorList[] = 'Le mot de passe doit contenir une lettre minuscule';
        }
        if(! preg_match('/[A-Z]/', $password))
        {
            $errorList[] = 'Le mot de passe doit contenir une lettre majuscule';
        }

        $user = User::find($id);
        $user->setName($name);
		$user->setPassword($passwordHashed);
		$user->setRole($role);
		$user->setStatus($status);

        
		if ( User::findByEmail($email) !== false && $user->getEmail() !== $email) {
			$errorList[] = "Cet email existe déjà";
		} else {
            $user->setEmail($email);
        }

        if(!empty($errorList)){
            $this->show('user/add', [
                "user" => $user,
                "errorList" => $errorList,
                'bodyClassName' => 'admin'
            ]);
            exit;
        }

        if (! $user->save())
        {
            $errorList[] = "Une erreur s'est produite lors de l'enregitrement de l'utilisateur. Veuillez réessayer.";
            $this->show('user/add', [
                "user" => $user,
                "errorList" => $errorList,
                'bodyClassName' => 'admin'
            ]);
            exit;
        }

        $this->redirectToRoute("admin-user-browse");
    }

    /**
     * Delete a user by ID.
     * @return void
     */
    public function delete($id)
    {
        User::delete($id);
        $this->redirectToRoute("admin-user-browse");
    }

    /**
     * Display the form to edit the currently logged-in user's session.
     * @return void
     */
    public function editUserSession()
    {
        $user = User::find($_SESSION["userId"]);
        $this->show("user/edit-session-user", [
            'bodyClassName' => 'admin',
            'user' => $user
        ]);
    }

    /**
     * Handle the form submission to edit the currently logged-in user's session.
     * @return void
     */
    public function editUserSessionExecute()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$password = filter_input(INPUT_POST, 'password');
		$role = filter_input(INPUT_POST, 'role');
		$status = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT, ["options" => ['min_range' => 0, 'max_range' => 1]]);
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

        $errorList = [];
        // Validate inputs
        if (!$email)
        {
            $errorList[] = 'Merci de saisir un email valide';
        } 
		
        if (strlen($password) < 8)
        {
            $errorList[] = 'Le mot de passe doit faire 8 caractères';
        }
        if (strtoupper($password) === $password)
        {
            $errorList[] = 'Le mot de passe doit contenir une lettre minuscule';
        }
        if(! preg_match('/[A-Z]/', $password))
        {
            $errorList[] = 'Le mot de passe doit contenir une lettre majuscule';
        }

        $user = User::find($_SESSION["userId"]);
        $user->setName($name);
		$user->setPassword($passwordHashed);
		$user->setRole($role);
		$user->setStatus($status);

        
		if ( User::findByEmail($email) !== false && $user->getEmail() !== $email) {
			$errorList[] = "Cet email existe déjà";
		} else {
            $user->setEmail($email);
        }

        if(!empty($errorList)){
            $this->show('user/add', [
                "user" => $user,
                "errorList" => $errorList,
                'bodyClassName' => 'admin'
            ]);
            exit;
        }

        if (! $user->save())
        {
            $errorList[] = "Une erreur s'est produite lors de l'enregitrement de l'utilisateur. Veuillez réessayer.";
            $this->show('user/add', [
                "user" => $user,
                "errorList" => $errorList,
                'bodyClassName' => 'admin'
            ]);
            exit;
        }

        $this->redirectToRoute("admin-home");
    }


}