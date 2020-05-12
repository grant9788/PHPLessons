<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



<?php 



$X = 1;

while($X <= 5)  //wHILE ARE GOOD FOR DATABASE
{
    echo "Hi there<br>";
    $X++; // ADD ONE TO X TILL IT HITS 5 AND STOP 
    
}

echo "<br>";

// DO LOOP

$Y = 1;
// DO loop write once then it will go into a loop 
do{
    echo "Hi there<br>";
    $Y++; // ADD ONE TO X TILL IT HITS 5 AND STOP
    
}
while($Y <= 5);  //wHILE ARE GOOD FOR DATABASE


// FOR Loop
// know how many times too loop
echo"<br>";
for($Z = 0; $Z <= 10; $Z++)
{
    echo "hi <br>";
}

//ForEach Loop 
echo"<br>";

$array = array("Daniel","Jane","Jacob");

foreach ($array as $loopdata) //loopdata is a varible created in theforeach to go and find the data
{
    if($array = "Tom") // I created a way to look for the data and if not there then print what is there
    {
        
    echo "my name is ".$loopdata."<br>";
    
    }
    
    else 
        echo "my name is ".$loopdata."<br>";
}


?>

</body>

</html>