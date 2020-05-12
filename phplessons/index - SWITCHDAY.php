<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



<?php 

$dayOfWeek = date("w");
echo $dayOfWeek;

switch($dayOfWeek)
{
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wenseday";
        break;
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "<p>Today is Saturday</p>";    // Way to right html code in PHP must be in quotes""
        break;
    case 0:
        echo "Today is Sunday";
        break;
}

?>

</body>

</html>