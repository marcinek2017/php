<?php
$login = $_POST['login'];
$haslo = sha1($_POST['haslo']);

$servername = "localhost";
$username =
"root";
$password =
"";
$database =
"goetel1";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
$sql = "INSERT INTO MyGuests (name, haslo)
VALUES ('$login', '$haslo')";
echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>