<?php
class Guerrier {
    private $endurance;
    private $resistance;
    private $intelligence;
    private $force;
    private $adresse;
    private $pv;

    function __construct($endurance, $resistance, $intelligence, $force, $adresse, $pv){
        $this->endurance = $endurance;
        $this->resistance = $resistance;
        $this->intelligence = $intelligence;
        $this->force = $force;
        $this->adresse = $adresse;
        $this->pv = $pv;
    }

    function getEndurance(){
        return $this->endurance;
    }

    function getResistance(){
        return $this->resistance;
    }
    function getIntelligence(){
        return $this->intelligence;
    }
    function getForce(){
        return $this->force;
    }
    function getAdresse(){
        return $this->adresse;
    }
    function getPv(){
        return $this->pv;
    }


}



