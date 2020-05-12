<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>

<form>
	<input type="input" name="num1" placeholder="Number 1">
	<input type="input" name="num2" placeholder="Number 2">
	<select name="operater">
	<option>None</option>
	<option>Add</option>
	<option>Subtract</option>
	<option>Multiply</option>
	<option>Divide</option>
	</select>
	<br>
	<button type="Submit" name="Submit" value="Submit">Calculator</button>
</form>
<p>The answer is: <p>

<?php 

if(isset($_GET['Submit'])) // IS goes up in to the URL to see if the value is equal to sumbit then goes into the code
{							
	$result = $_GET['num1'];	// So we are going up to the URL and grabbing the information and then my varible result
	$result2 = $_GET['num2'];
	$operater = $_GET['operater'];
	
	switch($operater){		// We need to check the operater to see what we have to do
		
		case "None":
			echo "ERROR You need to select a operation";
			break;
			
		case "Add":
			echo $result + $result2;
			break;
			
		case "Subtract":
			echo $result - $result2;
			break;
			
		case "Divide":
			echo $result / $result2;
			break;
			
		case "Multiply":
			echo $result * $result2;
			break;
		
	}  
}

?>

</body>

</html>