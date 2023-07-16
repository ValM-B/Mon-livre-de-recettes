<?php
namespace App\Models;

use App\Utils\Database;
use PDO;

class Category extends CoreModel
{
    private $name;
    private $family;
    

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
    public function setName($name)  : self
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * Get the value of family
     */ 
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set the value of family
     *
     * @return  self
     */ 
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * retourne la liste des catégories de la DB
     * 
     * @param string $sort contient le nom du champs sur lequel doit etre trié la liste
     * @return Category[]
     */
    public static function findAll($sort ="")
    {
        $pdo = Database::getPDO();

        $sql = "SELECT `id`, `name`, `family`, `created_at`, `updated_at` FROM category";

        if($sort !== "") {
            $sql .= " ORDER BY $sort";
        }

        $pdoStatement = $pdo->query($sql);
        if ($pdoStatement === false) {
            exit("Problème lors de la récupération de la liste des catégories");
        }

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Category');
    }

    public function find($id)
    {

    }

    public function insert()
    {

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }



}