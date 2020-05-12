<?php 

// Varibles to connect to the database - For online put in online information
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";

//Connection to database - Important 
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
    // database connection probelm
}

?>