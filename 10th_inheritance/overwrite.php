<?php 
include 'parents.php';
/**
 * overwrite class
 */
class overwrite extends myparents
{
	
	function __construct()
	{
		echo "Child class";
	}
	public function message(){
		
		parent::message();
		$varOne = $this->varOne = 43;
		echo "<br>This is child method " . $varOne;
	}
}
$ovr = new overwrite();
$ovr->message();
 ?>