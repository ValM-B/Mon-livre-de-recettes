<?php
namespace App\Models;

use App\Models\CoreModel;
use App\Utils\Database;
use PDO;

class User extends CoreModel
{
    private $email;
    private $password;
    private $name;
    private $role;
    private $status;

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email) : self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password) : self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role) : self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status) : self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Récupère tous les utilisateurs de la DB
     * 
     * @param string (optionnel) nom du champs sur lequel la liste doit etre triée
     * @return User[]
     */
    public static function findAll($sort ="")
    {
        $pdo = Database::getPDO();

        $sql = "SELECT `id`, `email`, `password`, `name`, `role`, `status`, `created_at`, `updated_at` FROM user";

        if($sort !== "") {
            $sql .= " ORDER BY $sort";
        }

        $pdoStatement = $pdo->query($sql);
        if ($pdoStatement === false) {
            exit("Problème lors de la récupération de la liste des catégories");
        }

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\User');
    }

    public static function find($id)
    {
        
    }
    public function insert()
    {
        
    }
    public function update($id)
    {
        
    }
    public static function delete(int $id)
    {
        
    }

    /**
	 * Recherche un utilisateur en fonction d'un email en DB
	 *
	 * @param string $email
	 * @return User
	 */
	public static function findByEmail($email)
	{
		$pdo = Database::getPDO();

		$sql = "SELECT `id`,`email`, `password`, `name`, `role`, `status`, `created_at`, `updated_at` 
		FROM `user` 
		WHERE `email` = :email";
	
		$preparedQuery = $pdo->prepare($sql);
				
		$preparedQuery->execute([
			':email' => $email,
		]);

        return $preparedQuery->fetchObject(self::class);

	}
}