<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<header>

<?php 

/*
 Super Global - is built varible built in by PHP
 
 $Global
 $_Post
 $_GET
 $_Cookie 
 $_Session 
  
*/

$x = 5; // Global Varible

function Hello() {
    $y = 10; // Local Varible 
}

echo $x; //this will work because the varible is Global
//echo $y;       // this will not work becuase of the varible is local



//SUPER Global Varible

$Bojangles = 17;

function World() {  
    
    $Tyson = 16;
    echo $GLOBALS['Bojangles'];  // Global varible is just a different way instead of pass in the paramters
    
}

/*$Bojangles = 17; 

function World($Bojangles) {
    
    $Tyson = 16;
    echo $Bojangles;    // This is the other way to do without $Global
}*/

World();




?>

</header>
</body>
</html>