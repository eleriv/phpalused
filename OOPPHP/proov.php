<?php

class Burger {
    public $nimi;
    public $sai;
    public $liha;
    public $hind;
    public $lisa1 = '';
    public $lisa1Hind = 0;
    public $lisa2 = '';
    public $lisa2Hind = 0;
    public $lisa3 = '';
    public $lisa3Hind = 0;
    public $lisa4 = '';
    public $lisa4Hind = 0;

    function __construct($nimi, $sai, $liha, $hind){
        $this->nimi = $nimi;
        $this->sai = $sai;
        $this->liha = $liha;
        $this->hind = $hind;
    }
    public function lisaLisa1($lisa, $hind){
        $this->lisa1 = $lisa;
        $this->lisa1Hind = $hind;
        return $this;
    }
    public function lisaLisa2($lisa, $hind){
        $this->lisa2 = $lisa;
        $this->lisa2Hind = $hind;
        return $this;
    }
    public function lisaLisa3($lisa, $hind){
        $this->lisa3 = $lisa;
        $this->lisa3Hind = $hind;
        return $this;
    }
    public function lisaLisa4($lisa, $hind){
        $this->lisa4 = $lisa;
        $this->lisa4Hind = $hind;
        return $this;
    }

    function naitaBurger() {
        echo "<h4> $this->nimi </h4>Hind: $this->hind <br>Sai: $this->sai <br>Liha: $this->liha";
        echo "Nimi: " . $this->nimi . "<br>";
        echo "Sai: " . $this->sai . "<br>";
        echo "Liha: " . $this->liha . "<br>";
        echo "Hind: " . $this->hind . "<br>";
        // tsükkel mis näitab kõiki lisandeid ja arvutab koguhinna
    }
}


$burger = new Burger('Tavaburks', 'saiii', 'liha', 5);
$burger->lisalisa1('tomat', 2);
$burger->naitaBurger();
