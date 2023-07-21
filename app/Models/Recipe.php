<?php
namespace App\Models;

use App\Utils\Database;
use PDO;

class Recipe extends CoreModel
{
    private $title;
    private $portions;
    private $rate;
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
    public function setPortons($portions) : self
    {
        $this->portions = $portions;

        return $this;
    }

    public static function findAll($sort ="")
    {
        
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