<?php 
/**
 * construct
 */
class student
{
	public $a;
	public $b;

	function __construct($agr, $agr2)
	{
		$this->a = $agr;
		$this->b = $agr2;
		echo "Hello PHP";
	}
	public function sum(){
		$result = $this->a + $this->b;
		echo "<br>";
		echo "The summation is: " . $result;
	}
	public function mul($ad, $ad2=20){
		echo "<br>";
		$mulfun = "My name is: $ad and my age is: $ad2";
		return $mulfun;
	}
}

$obj = new student(12, 40);
$obj->sum();
echo $obj->mul('Masum');
 ?>