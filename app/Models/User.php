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

    /**
     * Récupère un utilisateur en fonction de son id
     * 
     * @param $id identifiant de l'utilisateur
     * @return User
     */
    public static function find($id)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT `id`, `email`, `password`, `name`, `role`, `status`, `created_at`, `updated_at` 
        FROM user
        WHERE `id` = $id";
        $pdoStatement = $pdo->query($sql);
        return $pdoStatement->fetchObject('App\Models\User');
    }

    /**
     * Insert un nouvel utilisateur dans la DB
     * 
     * @return boolean
     */
    public function insert()
    {
        $pdo = Database::getPDO();
        $sql = "
        INSERT INTO `user` (`name`, `email`, `password`, `role`, `status`)
        VALUES (:name, :email, :password, :role, :status)
        ";
        $preparedQuery = $pdo->prepare($sql);
        $querySuccess = $preparedQuery->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':password' => $this->password,
            ':role' => $this->role,
            ':status' => $this->status,
        ]);

        if ($querySuccess) {
            
            $this->id = $pdo->lastInsertId();
            
            return true;
        }
        return false;
    }

    public function update($id)
    {
        $pdo = Database::getPDO();
        $sql = " UPDATE `user`
                SET `name` = :name,
                `email` = :email,
                `password` = :password,
                `role` = :role,
                `status` = :status,
                updated_at = now()
                WHERE id = :id";

        $preparedQuery = $pdo->prepare($sql);
        $querySuccess = $preparedQuery->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':password' => $this->password,
            ':role' => $this->role,
            ':status' => $this->status,
            ':id'=> $this->id
        ]);
        return $querySuccess;
    }

    /**
     * Supprime un utilisateur dans la DB en fonction de son ID
     * 
     * @param int $id identifiant de l'utilisateur à supprimer
     * @return void
     */
    public static function delete(int $id)
    {
        $pdo = Database::getPDO();
        $sql = "
            DELETE FROM `user` 
            WHERE `id` = :id";
        
        $preparedQuery = $pdo->prepare($sql);
        
        $preparedQuery->execute([
            ':id' => $id,
        ]);
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