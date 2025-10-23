<?php
$servername = "localhost";
$username = "root"; //root
$password = ""; // ""
$database="5tia";
//Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$database="5tia";
//Create database
/*$sql = "CREATE DATABASE $database";
if( mysqli_query($conn,$sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}*/
if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected";
} else {
    echo "Error select database: " .
    mysqli_error($conn);
}
$sql = "CREATE TABLE uczniowie (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        imie VARCHAR(30) NOT NULL,
        nazwisko VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
if (mysqli_query($conn, $sql)) {
    echo "Table uczniowie created succesfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
    ?>