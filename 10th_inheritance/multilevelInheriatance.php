<?php 
/**
 * classONe
 */
class classONe
{
	
	function __construct()
	{
		echo "This is class One<br>";
	}
	public function onefunction(){
		return "Hello class One";
	}
}



/**
 * ClassTwo
 */
class ClassTwo extends classONe
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function twofunction(){
		return "Thisis two function";
	}
}

/**
 * Class Three
 */
class Classthree extends ClassTwo
{
	
	function __construct()
	{
		parent::__construct();
	}
}

$obj = new Classthree();
echo $obj->onefunction();
?>