<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



<?php 

//$x = 100;


function NewCalc($x)  // Parameter is looking for that outside the function
{
    $newnr = $x * 0.75;
    echo "here is 75% of what you wrote: ".$newnr;
}

$x = 100;
newCalc($x); //Calling out the function

echo "<br>";

$a = 10;
newCalc($a); //If you want to change the number


?>

</body>

</html>