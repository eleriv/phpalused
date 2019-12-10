<?php
// loome ühendus
function connection($host, $user, $pass, $dbname)
{
    $link = mysqli_connect($host, $user, $pass, $dbname);
    // kui ühendust ei tekkinud
    if ($link === false) {
        // veateade probleemi korral
        echo 'Probleem andmebaasi ühendamisega!<br>';
        exit;
    }
    // tagastame edaspidiseks kasutamiseks
    return $link;
}


// suvalise päringu saatmine andmebaasi
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem päringuga <b>'.$sql.'</b><br>';
    }
    //kui $result on true
    return $result;
}
function getData($sql, $link){
    $result = query($sql, $link);
    $data = array();
    // while- loeb kõik andmed ükshaaval
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row;
    }
    if(count($data) == 0){
        return false;
    }
    return $data;
}

