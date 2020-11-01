<?php 
	/**
	 * Constants
	 * Calculate circle area;
	 */ 
	class constantsOOP
	{
		const PI = 3.1416;

		public function area($val){
			echo self::PI * $val * $val;
		}
	}
	echo constantsOOP::PI;
	echo "<br>";
	$obj = new constantsOOP();
	 $obj->area(2);

?>