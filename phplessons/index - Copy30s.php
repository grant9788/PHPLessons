<?php 
    session_start();
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
	<li a href="">Home.php</a></li>
	<li a href="">Contact2.php</a></li>
</ul>

<header>

<?php 

$_SESSION['username'] = "bxgrant4562";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
   echo "You are not Log In" ;
}
else{
    echo "You are lOG iN";
}

?>


</header>
</body>
</html>