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