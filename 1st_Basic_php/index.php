<?php 

// we learn string
// string is a sequence of characters like hello word;
// now start

	echo "Hello word!";// this is a string
	echo $br = "<br>";
	echo strlen("Hello Word");
	echo $br;
	echo str_word_count("Hello Word!, I love Bangladesh ");
	echo $br;
	echo strrev("Hello word");
	echo $br;
	echo str_replace("Hello", "My", "Hello Word");
	echo $br;
	echo str_repeat("hello", "3");


	// Array:

	echo "<br>";
	$cars = array("Volvo", "BMW", "Toyota");
	echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
	$arrlength = count($cars);

	for($x = 0; $x < $arrlength; $x++) {
	  echo $cars[$x];
	  echo "<br>";
	}

echo "<br>";

	$a = [1, 2, 5, 3, 9];

	$b = [
		'b' 	=> 78,
		'g' 	=> 21,
		'k' => 57
	];



	$c = [
		[1, 2, 3],
		[4, 5, 6]
	];
	asort($b);
	print_r($b);

	$a = 12;

	echo "<br>";

// PHP Associative Arrays
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	echo "Peter is " . $age['Peter'] . " years old.";
	
	// PHP Associative Arrays
	echo "<br>";
	$cars = array (
	  array("Volvo",22,18),
	  array("BMW",15,13),
	  array("Saab",5,2),
	  array("Land Rover",17,15)
	);
	  
	echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
	echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
	echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
	echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

	
	echo "<br>";
	// Conditional Statement IF:

	if ($a == 6) {
		echo "Welcome";
	} else if ($a == 5) {
		echo "Welcome to dhaka";
	} else {
		echo 'Go home';
	}

 ?>