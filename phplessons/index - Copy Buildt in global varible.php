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
 $_Cookie = save the user informationon the user browers
 $_Session = save the user information on the server side - and when you close browser it closes
 
*/

echo $_POST['name'];

setcookie("Name", "Dainel", time() - 86400); // so this cookie will automatic exper after 

$_SESSION['name'] = "12";

?>

<form method="GET"> <!-- Get will send data to the Url and you can get it POST will send data but cant see it -->
<input type="hidden" name="name" value="Mr.Bojangles">
<button type="submit">Press Me!</button>
</form>

<form method="POST"> <!-- Get will send data to the Url and you can get it POST will send data but cant see it -->
<input type="hidden" name="name" value="Mr.Bojangles">
<button type="submit">Press Me!</button>
</form>

</header>
</body>
</html>