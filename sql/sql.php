<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //create connection
    $conn = mysqli_connect($servername, $username, $password);
    //check connection
    if (!$conn){
        die("connection failed: "- mysqli_connect_error());

    }
    echo "connected sucessfully";




    $database ="goetel1";
    //create database
  /*  $sql="CREATE DATABASE $database";
    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";
    }else{
        echo "Error creating database".mysqli_error($conn);
    }
   */ 



    if(mysqli_select_db($conn,$database)){
        echo "Database $database selected";

    }else{
        echo "Error selected database: ". mysqli_error($conn);
    }




   /* $sql = "CREATE TABLE MyGuests(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP DEFAULT
                    CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                    )";

    if(mysqli_query($conn,$sql)){
        echo "Table MyGuests created successfully";
    }else{
        echo "Error creating table :". mysqli_error($conn);
        }
    */



 /*   $sql ="INSERT INTO MyGuests (firstname, lastname, email)
                                VALUES('JOHN','Doe','john@gnauk.com')";
    if(mysqli_query($conn,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error: ". "<br>". mysqli_error($conn);
    }
*/
   /*  $sql ="INSERT INTO MyGuests (firstname, lastname, email)
                                VALUES('Maru','Doe','mary@gnauk.com')";
     $sql ="INSERT INTO MyGuests (firstname, lastname, email)
                                VALUES('Julie','Doley','julie@gnauk.com')";
        if(mysqli_query($conn,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error: ". "<br>". mysqli_error($conn);
    }
*/


    
?>