<?php

include 'interfaceMethod.php';

/**
 * implement interfaceMethod
 */
class CarNew implements allinterface
{
	public function display(){
		return "Welcome MY Car page";
	}
	public function car(){
		return 50;
	}
	public function Bus(){
		return 100;
	}
}

$carnew = new carnew();
echo $carnew->Bus();
	
?>