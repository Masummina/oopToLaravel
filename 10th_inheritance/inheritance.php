<?php 

/**
 * main class
 */
class parentsj 
{
	public $var1 = 10;
	public $var2 = 20;
	
	function __construct()
	{
		$conResult = $this->var1 + $this->var2;
		echo $conResult;
	}
	public function parfun(){
		echo $funVar = $this->var2 - $this->var1;
	}
}


/**
 * second class
 */
class second extends parentsj
{
		
	function __construct()
	{
		parent::__construct();
	}
	public function parfun(){
		$var1 = $this->var1 = 200;
		echo $funVar = $this->var2 + $this->var1;
	}
}

$obj = new second();
$obj->var1 = 15;
echo "<br>";
$obj->parfun();

 ?>