<?php
class Magicien {
    private $magie;
    private $soin;
    private $sagesse;
    private $intelligence;
    private $force;
    private $adresse;
    private $pv;

    function __construct($magie, $soin, $intelligence, $sagesse, $force, $adresse, $pv){
        $this->magie = $magie;
        $this->soin = $soin;
        $this->sagesse = $sagesse;
        $this->intelligence = $intelligence;
        $this->force = $force;
        $this->adresse = $adresse;
        $this->pv = $pv;
    }

    function getMagie(){
        return $this->magie;
    }

    function getSoin(){
        return $this->soin;
    }

    function getSagesse(){
        return $this->sagesse;
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
