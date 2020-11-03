<?php 

include 'main.php';

/**
 * Abstruct
 */
class Car extends main
{
	public function carMet(){
		return 'My carMet is check';
	}
	public function BusMet(){
		return 670;
	}
	public function NewClass(){
		echo "This is another method";
	}
}

$carObj = new car();
echo $carObj->BusMet();
echo "<br>";

?>