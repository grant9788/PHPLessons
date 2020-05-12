<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		
		// Hashing 
		echo "test123";    // This is to test the password
        echo "<br>";
        echo password_hash("test123", PASSWORD_DEFAULT); // b CRIP
        
        //de hashing password
        $input = "test123";
        $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);
        
        echo password_verify($input, $hashedPwdInDb);
        // This will return a 1 saying its the correct user 
        
		?>
	</body>
</html>
