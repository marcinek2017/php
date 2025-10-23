<?php
    $firstname =$_POST["firstname"];
    $lastname =$_POST["lastname"];
    $fav_language=$_POST["fav_language"];


    $servername = "localhost";
$username = "root"; // root
$password = ""; // ""
$database = "goetel1";


//CREATE CONNECTION


$conn = mysqli_connect($servername,$username,$password,$database);


//Check connection


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$sql = "INSERT INTO MyGuests (firstname,lastname,fav_language)
                            VALUES('$firstname','$lastname','$fav_language')";

if (mysqli_query($conn, $sql)){
    echo "New record created successfully";

} else {
    echo "Error". $sql. "<br>". mysqli_error($conn);
}