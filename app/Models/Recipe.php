<?php
namespace App\Models;

use App\Utils\Database;
use PDO;

class Recipe extends CoreModel
{
    private $title;
    private $portions;
    private $rate;
    private $ingredients;
    private $instructions;
    private $category_id;
    private $picture;
    

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)  : self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture) : self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id($category_id) : self
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Get the value of instructions
     */ 
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set the value of instructions
     *
     * @return  self
     */ 
    public function setInstructions($instructions) : self
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate) : self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of portions
     */ 
    public function getPortions()
    {
        return $this->portions;
    }

    /**
     * Set the value of portions
     *
     * @return  self
     */ 
    public function setPortions($portions) : self
    {
        $this->portions = $portions;

        return $this;
    }

    
    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Permet la récupération de toutes les recettes en db
     * 
     * @param string $sort nom du champ sur lequel la liste doit etre triée
     * @return Recipe[]
     */
    public static function findAll($sort ="")
    {
        $pdo = Database::getPDO();
        $sql = "SELECT `id`, `title`, `portions`, `ingredients`, `rate`, `instructions`, `category_id`, `picture`, `created_at`, `updated_at` 
        FROM `recipe`
        ORDER BY $sort";
        $pdoStatement = $pdo->query($sql);
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Recipe');
    }

        /**
     * Permet la récupération les 5 dernière recettes crées en DB
     * 
     * 
     * @return Recipe[]
     */
    public static function findLast5()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT `id`, `title`, `portions`, `ingredients`, `rate`, `instructions`, `category_id`, `picture`, `created_at`, `updated_at` 
        FROM `recipe`
        ORDER BY `created_at` DESC
        LIMIT 5";
        $pdoStatement = $pdo->query($sql);
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Recipe');
    }

    /**
     * Permet de récupérer une recette en fonction de son id en DB
     * 
     * @param int $id identifiant de la recette
     * @return Recipe
     */
    public static function find($id)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT `id`, `title`, `portions`, `ingredients`, `rate`, `instructions`, `category_id`, `picture`, `created_at`, `updated_at` 
        FROM `recipe`
        WHERE `id` = $id";
        $pdoStatement = $pdo->query($sql);
        $result = $pdoStatement->fetchObject('App\Models\Recipe');

        return $result;
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
    /**
    * Retourne la liste des recettes d'une catégorie de la DB
    *
    *@param int $categoryId id de la catégorie
    *@return Recipe[]
    */
    public static function findByCategory($categoryId)
    {
        $pdo = Database::getPDO();

        $sql = "SELECT `id`, `title`, `portions`, `rate`, `instructions`, `category_id`, `picture`, `created_at`, `updated_at` 
            FROM `recipe`
            WHERE `category_id` = $categoryId";

        $pdoStatement = $pdo->query($sql);
        if ($pdoStatement === false) {
            exit("Problème lors de la récupération de la liste des catégories");
        }

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Recipe');
    }

}