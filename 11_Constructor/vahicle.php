<?php 
/**
 * parents class
 */
class vahicle
{
	
	public $capacity;
	public $fuleAmount;

	public function __construct($capacity, $fuleAmount){
		$this->capacity = $capacity; $this->fuleAmount = $fuleAmount;
	}

	public function myfunction(){
		$total = $this->capacity + $this->fuleAmount;
		return $total;
	}
}

 ?>




 