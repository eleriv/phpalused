<?php
class Burger {
    public $nimi;
    public $sai;
    public $liha;
    public $hind;
    public $lisandid = array();

    function __construct($nimi, $sai, $liha, $hind) {
        $this->nimi = $nimi;
        $this->sai = $sai;
        $this->liha = $liha;
        $this->hind = $hind;
    }

    function lisalisand($nimi, $hind) {
        $lisand = new Lisand($nimi, $hind);
        array_push($this->lisandid, $lisand);
    }

    function naitaburger() {
        $koguhind = $this->hind;


        echo "<h3> $this->nimi </h3> ";
        echo "Burgeri hind:". $this->hind . "<br>";
        echo "Sai: " . $this->sai . "<br>";
        echo "Liha: " . $this->liha . "<br>";


        foreach ($this->lisandid as $lisand) {
            echo $lisand->nimi . ": " . $lisand->hind . "<br>";
            $koguhind += $lisand->hind;
        }

        echo "Hind: " . $koguhind . "<br>";
        echo "---------------<br>";
    }
}


class Lisand {
    public $nimi;
    public $hind;

    function __construct($nimi, $hind) {
        $this->nimi = $nimi;
        $this->hind = $hind;
    }
}


$burger1 = new Burger('Suur burger', 'Topelt', 'Lammas', 5);
$burger1->lisalisand('tomat', 2);
$burger1->lisalisand('kurk', 1.5);
$burger1->lisalisand('vorst', 1.5);
$burger1->lisalisand('kapsas', 1.5);
$burger1->naitaburger();

$burger1 = new Burger('Tervislik', 'Must teraleib', 'Orgaaniline', 8);
$burger1->lisalisand('Tomat', 2);
$burger1->lisalisand('Kurk', 1.5);
$burger1->lisalisand('Vorst', 1.5);
$burger1->lisalisand('Kapsas', 1.5);
$burger1->lisalisand('Sibul', 1.5);
$burger1->lisalisand('Sinep', 1.5);
$burger1->naitaburger();

$burger1 = new Burger('Lux', 'Lux sai', 'Lux liha', 12);
$burger1->lisalisand('Frii-kartul Hind', 2);
$burger1->lisalisand('Jook Hind', 1.5);
$burger1->naitaburger();

