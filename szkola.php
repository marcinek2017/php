<?php
class Osoba {
    public $imie;
    public $wzrost;
}

class Uczen extends Osoba {
    public $szkola;
}

$uczen1 = new Uczen();
$uczen1->imie = "Marcin";
$uczen1->wzrost = 172;
$uczen1->szkola = "Zs Goetel";

echo  $uczen1->imie  +"<br>";
echo $uczen1->wzrost +"<br>";
echo  $uczen1->szkola +"<br>";
?>
