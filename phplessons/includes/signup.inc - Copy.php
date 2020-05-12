<?php 

include_once 'dbh.inc.php';

/*
// To bring back all data in the datebase with my query
$sql = "SELECT * FROM USERS;";
$result = mysqli_query($conn, $sql); // To connect and grab data
$resultCheck = mysqli_num_rows($result); //To check connection

if ($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)) // without loop the query will only show one line
    {                                           // This is a built in php function to look at out result and $row becomes an array
        echo $row['user_uid'] . "<br>";
    }

}*/

$first = $_POST['first']; // This will grab the data from the Form and pass it in url to the database so make sure names are correct
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd) 
VALUES('$first', '$last', '$email', '$uid', '$pwd');";
$result = mysqli_query($conn, $sql); // To connect and grab data

header("Location: ../index.php?signup=success");

?>