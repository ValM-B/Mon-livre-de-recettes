<?php
namespace App\Models;

class Ingredient extends CoreModel
{
    private $name;
    private $unit;
    

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
     * Get the value of unit
     */ 
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set the value of unit
     *
     * @return  self
     */ 
    public function setUnit($unit) : self
    {
        $this->unit = $unit;

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


}