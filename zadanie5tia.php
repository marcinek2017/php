<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
 
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn){
        die("connection failed: "- mysqli_connect_error());

    }
    echo "connected sucessfully";

    $database ="goetel_makow";

   $sql="CREATE DATABASE $database";
    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";
    }else{
        echo "Error creating database".mysqli_error($conn);
    }
   
    if(mysqli_select_db($conn,$database)){
        echo "Database $database selected";

    }else{
        echo "Error selected database: ". mysqli_error($conn);
    }



    $sql = "CREATE TABLE 5TIA(imie varchar(20), numer_dziennik int)";

    if(mysqli_query($conn,$sql)){
        echo "Table created successfully";
    }else{
        echo "Error creating table :". mysqli_error($conn);
        }
    $sql ="INSERT INTO 5TIA (imie,numer_dziennik)
                                VALUES('Marcin',2)";
    if(mysqli_query($conn,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error: ". "<br>". mysqli_error($conn);
    }

?>