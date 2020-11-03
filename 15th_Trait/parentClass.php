<?php 

include 'Car.php';
include 'Bus.php';
include 'AnotherClass.php';
/**
 * Trait parents class 
 */
class parentClass extends AnotherClass
{
	use Bus, Car;
}

$obj = new parentClass();
// this method form Bus Trait method Trait Class One
$obj->busMet();
// this method form Extends Class
echo "<br>";
$obj->extendClass();
echo "<br>";
// this method form Car trait Class
$obj->carMet();

 ?>