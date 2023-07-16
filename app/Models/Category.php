<?php
namespace App\Models;

class Category extends CoreModel
{
    private $name;
    

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

    public function findAll()
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