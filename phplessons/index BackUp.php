<?php

echo strlen("Hi There");	// function strlen that counts the letters

echo str_word_count("Hello there Mr.Bojangles");	// function that counts the words

echo strrev("Hello World");

echo strpos("Hi Dan", "Hi"); // counts the the starting position

echo str_replace("Daniel", "Jason", "Hi Daniel"); // replcae the string

$names = array("Brent","M","Grant");
echo $names['1'];

$x = 100;
$x += 20;	// short way of $x = $x + 20
echo $x;


$High = 10;
$Low = 5;

if($High > $Low)
{
	echo = "True";
}
else
{
	echo = "False";
}

//Increment and Decrement

$x = 10;
echo = ++$x; // ++ add plu one 11  and a -- will subtract
echo = $x++;
echo = $x;	// 10 ^ then will add 11 



// SWITCH

$switch = 1;

switch($switch)
{
	case 1:
	echo = "Is my switch working";
	break;
	
	case 2:
	echo = "Is my switch working NO";
	break;
	
	default:
	echo = "there is no answer";
}




?>