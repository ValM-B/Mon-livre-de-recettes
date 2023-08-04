<?php
namespace App\Models;

abstract class CoreModel
{
    protected $id;
    protected $created_at;
    protected $updated_at;

    

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at) : self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at) : self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id) : self
    {
        $this->id = $id;

        return $this;
    }

    abstract public static function findAll($sort ="");
    abstract static public function find($id);
    abstract public function insert();
    abstract public function update($id);
    abstract public function delete($id);

    public function save()
    {
        
        if (is_null($this->id))
        {
            return $this->insert();
        }
        else
        {
            return $this->update($this->getId());
        }
    }
}