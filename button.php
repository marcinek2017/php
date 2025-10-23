<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel1";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $fav_language = $_POST['fav_language'];
    $sql = "INSERT INTO myguests (first_name, last_name, fav_language)
    VALUES ('$first_name', '$last_name', '$fav_language')";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>