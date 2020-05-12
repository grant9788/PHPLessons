<?php
  include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		//assocaite data
		/*
		$data ["first"] = "Daniel";
		$data ["last"] = "John";
		$data ["age"] = 25;
		print_r($data);
		echo $data[0]; //key is what we want in 
		*/
		
		//multidimsiona array
		$data = array(array(1, 2, 3), "Hhdhd", "ddb");
		print_r($data);
		echo $data[0][1];
		
		?>
	</body>
</html>
