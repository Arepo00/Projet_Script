<?php

    //include the connection file

include ('cnx.php');

    //create an instance of Connection class


$connection = new connection();



    //call the createDatabase methods to create database


/*$connection->createDatabase('mydata2');*/





   

/*$query1 = "
CREATE TABLE client (
 id_cl INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50) UNIQUE,
 password VARCHAR(80),
 date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 

 )
";


$query2 = "
CREATE TABLE plat (
 id_pl INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nompl VARCHAR(30) NOT NULL,
 prixpl VARCHAR(30) NOT NULL,
descr VARCHAR(200) NOT NULL
 )
";

$query3 = "
CREATE TABLE commande (
    id_com INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_cli INT(6) NOT NULL UNSIGNED,
    id_pla INT(6) NOT NULL UNSIGNED,
    FOREIGN KEY (id_cli) REFERENCES client(id_cl),
    FOREIGN KEY (id_pla) REFERENCES plat(id_pl)
    
)
";*/



    //call the selectDatabase method to select the chap4Db

$connection->selectDatabase('mydata2');

    //call the createTable method to create table with the $query


//$connection->createTable($query1);
//$connection->createTable($query2);
//$connection->createTable($query3);


?>












































<!--

$servername = "localhost";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password);

// Check connection

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}else{

    echo "Connected successfully";

}

// Create database

/*$sql = "CREATE DATABASE mydata";
if (mysqli_query($conn, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($conn);
}*/


$query1 = "
CREATE TABLE clients (
 id_cl INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50) UNIQUE,
 password VARCHAR(80),
 reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 )
"; 
if (mysqli_query($conn, $query1)) {
 echo "Table Clients created successfully";
} else {
 echo "Error creating table: " . mysqli_error($conn);
}


$query2 = "
CREATE TABLE plats (
 id_pl INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nompl VARCHAR(30) NOT NULL,
 prixpl VARCHAR(30) NOT NULL
 )
"; 

if (mysqli_query($conn, $query2)) {
    echo "Table Clients created successfully";
   } else {
    echo "Error creating table: " . mysqli_error($conn);
   }

-->



