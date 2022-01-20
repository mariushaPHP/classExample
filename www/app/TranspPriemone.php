<?php

namespace Users;

class TranspPriemone{
    protected $modelis;
    protected $marke;
    protected $kaina;
    protected $svoris;
    protected $maxGreitis;
    protected $aprasymas;
    protected $ratuSk;

    public function __construct($modelis, $marke)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;
    }
    
    public function setModelis($modelis){
        $this->modelis = $modelis;
    }
    public function setMarke($marke){
        $this->marke = $marke;
    }
    public function setKaina($kaina){
        $this->kaina = $kaina;
    }
    public function setSvoris($svoris){
        $this->svoris = $svoris;
    }
    public function setAprasymas($aprasymas){
        $this->aprasymas = $aprasymas;
    }
    public function setRatuSk($sk){
        $this->ratuSk = $sk;
    }

    public function getModelis(){
        return $this->modelis;
    }
    public function getMarke(){
        return $this->marke;
    }
    public function getKaina(){
        return $this->kaina;
    }
    public function getSvoris(){
        return $this->svoris;
    }
    public function getAprasymas(){
        return $this->aprasymas;
    }
    public function __toString()
    {
        return $this->modelis . ' ' . $this->marke;
    }
    public function getRatuSk(){
        return $this->ratuSk;
    }

    
}