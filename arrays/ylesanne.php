<?php
$ained = array(
    'aine1',
    'aine2',
    'aine3',
    'aine4',
    'aine5'

);
foreach ($ained as $aine) {
    echo $aine . '<br>';
}
echo '<hr>';
//Pallivise – sul on üks massiiv nimedega ja teine palliviske tulemustega.
$nimed = array('Martin', 'Hardi', 'Juhan', 'Tiina', 'Sirje', 'Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);

echo '<h4>pallivise </h4>';
echo 'Osalejate arv: ' . count($nimed) . '<br>';
echo 'Kesk tulemus: ' . array_sum($pallivisked) / count($pallivisked) . '<br>';
echo 'Parim tulemus: ' . max($pallivisked) . '<br>';
echo 'Parima tulemusega õpilane: ' . $nimed[array_keys($pallivisked, max($pallivisked))[0]];
echo '<hr>';
$raamatud = array(
    array(
        'pealkiri' => 'Helmelõimed elulõngal',
        'autor' => 'Karl Puhvel',
        'žanr' => 'biograafia',
        'aasta' => 2013
    ),
    array(
        'pealkiri' => 'Helmelõimed elulõngal',
        'autor' => 'Karl Puhvel',
        'žanr' => 'biograafia',
        'aasta' => 2013
    ),
    array(
        'pealkiri' => 'Algne pealkiri',
        'autor' => 'Autor1',
        'žanr' => 'ulme',
        'aasta' => 2019
    )
);

sort($raamatud);
foreach ($raamatud as $raamat) {
    echo 'Pealkiri: ' . $raamat['pealkiri'] . '<br>';
    echo 'Autor: ' . $raamat['autor'] . '<br>';
    echo 'Žanr: ' . $raamat['žanr'] . '<br>';
    echo 'Aasta: ' . $raamat['aasta'] . '<br>';
    echo '<br>';
}
echo 'Raamatuid kokku: ' . count($raamatud) . ' tk';
