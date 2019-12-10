<?php
//lisame andmebaasitöötlus funktsioonid
require_once 'config.php';
//lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'db_fnc.php';
// ühendus andmebaasiga
$ikt = connection(HOST, USER, USERPASS, DBNAME);
// katsetame sql

echo '<pre>';
print_r($ikt);

//$slq = 'RENAME TABLE `vikseler_anna.php`.`TABLE 1` TO `vikseler_anna.php`.`koolid2015`';
$sql = `SELECT Kool, Kokku FROM koolid2015`;
$result = query($sql, $ikt);
echo '<pre>';
print_r($result);