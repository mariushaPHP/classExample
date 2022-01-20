<?php

namespace Users;

class Motociklas extends TranspPriemone{
    protected $tipas;

    public function __construct($modelis, $marke, $ratuSk, $svoris, $maxGreitis, $tipas)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;
        $this->ratuSk = $ratuSk;
        $this->svoris = $svoris;
        $this->maxGreitis = $maxGreitis;
        $this->tipas = $tipas;
    }


    public function setTipas($tipas){
        $this->tipas = $tipas;
    }

    public function getTipas(){
        return $this->tipas;
    }
}