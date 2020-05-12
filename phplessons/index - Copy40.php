<?php 
include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<ul>
</ul>

<header>

</header>

<?php 

//Prepared Statement

$data = "Admin";

 // To bring back all data in the datebase with my query
 // Create a template 
 $sql = "SELECT * FROM USERS WHERE user_uid = ?;";
 //Create prepared statment
 $stmt = mysqli_stmt_init($conn); // built in php
 //Prepared the prepared statment
 if (!mysqli_stmt_prepare($stmt, $sql)) {
     echo "sql staement failed";
 }else {
     //Bind parameters to the placeholder
     mysqli_stmt_bind_param($stmt,"s", $data);// s means string and if you add more to where you would need a second s and second parameter
     // run parameter inside database
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     while($row = mysqli_fetch_assoc($result)) // without loop the query will only show one line
     {                                           // This is a built in php function to look at out result and $row becomes an array
         echo $row['user_uid'] . "<br>";
     }
     
 }

 
 

?>


</body>
</html>