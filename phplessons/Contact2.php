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

echo $_SESSION['username'];

?>


</header>
</body>
</html>