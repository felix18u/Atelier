<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Prestation;

class Coffret extends Model
{
    private $prestations;
    private $validate;

    private $message;

    public function __construct($presta){
        $this->prestations = [$prest];
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

    function addPrestation($presta){
        if($presta instanceof Prestation){
            $this->prestations[] = $presta;
        }
    }

    function removePrestation($presta){
        if($presta instanceof Prestation){
            for($i=0;$i<$prestations.count();$i++){
                if($prestations[$i].comparePresta($presta)){
                    array_splice($prestations,$i,1);
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
