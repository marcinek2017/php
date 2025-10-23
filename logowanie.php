<?php
$login = $_GET['login'];
$haslo = sha1($_GET['haslo']);
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel1";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM MyGuests WHERE name='$login' AND haslo='$haslo'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Zalogowano pomyślnie";
} else {
    echo "Błędny login lub hasło";
}
?>