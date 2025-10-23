<?php
$servername = "localhost";
$username = "root"; //root
$password = ""; // ""
$database="5tia";
//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

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
/*$sql = "CREATE TABLE uczniowie (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        imie VARCHAR(30) NOT NULL,
        nazwisko VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date Timestamp Default
        CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
if (mysqli_query($conn, $sql)) {
    echo "Table uczniowie created succesfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
VALUES ('Maciej','Kowalski','MKowal1337@gmail.com')";
if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
} else {
   }
$sql = "INSERT INTO uczniowie (imie, nazwisko, email)
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    //output data of each row
    while($row = mysqli_fetch_row($resoult)) {
        echo "id:" . $row[0]. " - Name: " .
        $row[1]. " " . $row[2]. "<br>";
    }
} else {
    echo "0 results";
}*/
$sql = "SELECT id, imie, nazwisko FROM uczniowie";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    while($row = mysqli_fetch_row($result)) {
        echo "<tr><td>" . $row[0]. "</td><td>" .
        $row[1]. "</td><td>" . $row[2]. "</td></td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
    ?>


