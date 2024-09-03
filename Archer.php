<?php
class Archer {
    private $reflexe;
    private $vision;
    private $intelligence;
    private $force;
    private $adresse;
    private $pv;

    function __construct($reflexe, $vision, $intelligence, $force, $adresse, $pv){
        $this->reflexe = $reflexe;
        $this->vision = $vision;
        $this->intelligence = $intelligence;
        $this->force = $force;
        $this->adresse = $adresse;
        $this->pv = $pv;
    }

    function getReflexe(){
        return $this->reflexe;
    }

    function getVision(){
        return $this->vision;
    }

    function getIntelligence()
    {
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

