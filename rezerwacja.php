<?php
$servername="localhost";
$username="root";
$password="";
$database="baza22"
$polaczenie = mysqli_connect($servername,$username,$password,$database);

if (!$polaczenie) {
    die("Błąd połączenia z bazą: " . mysqli_connect_error());
}

$nrstolika= $_POST['stolik'];
$datarezerwacji = $_POST['data'];
$liczba_osob = $_POST['liczba_osob'];
$telefon=$_POST['telefon'];
$zapytanie = "INSERT INTO rezerwacje (nr_stolika, data_rez,liczba_osob,telefon) 
              VALUES ('$stolik', '$datarezerwacji','$liczba_osob','$telefon')";

if (mysqli_query($polaczenie, $zapytanie)) {
    echo "Dodano rezerwację do bazy";
} else {
    echo "Błąd przy dodawaniu rezerwacji: " . mysqli_error($polaczenie);
}

mysqli_close($polaczenie);
?>
