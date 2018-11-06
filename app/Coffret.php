<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffret extends Model
{
    private $prestations;
    private $validate;

    private $message;

    public function __construct($prestation){
        $this->prestations = [$prestation];
        $this->validate = false;
        $this->message = Null;
    }

    function validate(){
        if($prestations.count()>=2){
            for($i=1;$i<$prestations.count();$i++){
                if($prestations[$i-1].getCategorie() != $prestations[$i].getCategorie()){
                    $this->validate = true;
                    break;
                }
            }
        }
    }

    function setMessage($message){
        $this->message = $message;
    }


    /**
     * Get the value of validate
     */ 
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }
}
