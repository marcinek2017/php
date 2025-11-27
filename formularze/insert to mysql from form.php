welcome <?php echo $_POST["name"]; ?> <br>
your email address is: <?php echo $_POST["email"]; ?>
<?php
//polaczenie z serwerem sql
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}
echo "connection successfully"


$name= $_POST["name"];
$email= $_POST["email"];


$sql = "INSERT INTO MyGuests (firstname, email) VALUES ('$name', '$email')";


echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
