<?php 
/**
 * NewCar Class
 */
include 'vahicle.php';
class newCar extends vahicle
{
	public $color;
	
	public function __construct($capacity, $fuleAmount, $color){
		parent::__construct($capacity, $fuleAmount);
		$this->color = $color;
	}
	public function myfunction(){
		//parent::myfunction();
		$total = $this->capacity - $this->fuleAmount . "And color is" . $this->color;
		return $total;
	}
}


$obj = new newCar(60, 30, 'Red');
echo $obj->myfunction();

 ?>