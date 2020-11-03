<?php

include 'interfaceMethod.php';

/**
 * implement interfaceMethod
 */
class CarNew implements allinterface
{
	public function display(){
		return "Welcome MY Bus page";
	}
	public function car(){
		return 700;
	}
	public function Bus(){
		return 900;
	}
}

$carnew = new carnew();
echo $carnew->display();
echo "<br>";
echo $carnew->Bus();
	
?>