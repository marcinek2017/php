<?php
$plik=fopen("ddd.csv","r");
$wiersz=fgets($plik);
$owoce=explode(",",$wiersz);
foreach($owoce as $owoc){
    echo $owoce."<br>";
}
var_dump($owoce);
?> 