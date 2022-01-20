<?php

namespace Users;

class Dviratis extends TranspPriemone{
    protected $tipas;

    public function __construct($modelis, $marke, $ratuSk, $svoris, $tipas)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;
        $this->ratuSk = $ratuSk;
        $this->svoris = $svoris;
        $this->tipas = $tipas;
    }

    public function setKaina($kaina)
    {
        $this->kaina = $kaina;
    }

    public function setTipas($tipas){
        $this->tipas = $tipas;
    }

    public function getTipas(){
        return $this->tipas;
    }
}