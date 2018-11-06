<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    private $categorie;
    private $name;
    private $image;
    private $description;
    private $price;

    public function __construct($name,$categorie,$desc,$image,$price){
        $this->name = $name;
        $this->categorie = $categorie;
        $this->description = $desc;
        $this->image = $image;
        $this->price = $price;
    }

    public function comparePresta($presta2){
        if((strcmp($this->name, $presta2->name) == 0) && (strcmp($this->categorie, $presta2->categorie) == 0)){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

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
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
