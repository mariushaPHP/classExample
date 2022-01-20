<?php

namespace Users;

class Automobilis extends TranspPriemone{
    protected $maxGreitis;
    protected $keleiviiuSk;
    protected $dureliuSk;

    public function __construct($modelis, $marke, $maxGreitis, $keleiviuSk, $dureliuSk, $ratuSk, $svoris)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;
        $this->maxGreitis = $maxGreitis;
        $this->keleiviiuSk = $keleiviuSk;
        $this->dureliuSk = $dureliuSk;
        $this->ratuSk = $ratuSk;
        $this->svoris = $svoris;
    }

    public function setKaina($kaina)
    {
        $this->kaina = $kaina;
    }

    public function setMaxGreitis($greitis){
        $this->maxGreitis = $greitis;
    }
    public function setMaxZmones($keleiviuSk){
        $this->keleiviiuSk = $keleiviuSk;
    }
    public function setDureliuSk($sk){
        $this->dureliuSk = $sk;
    }
//----------------------------------------
    public function getMaxGreitis(){
        return $this->maxGreitis;
    }
    public function getMaxZmones(){
        return $this->keleiviiuSk;
    }
    public function getDureliuSk(){
        return $this->dureliuSk;
    }

}