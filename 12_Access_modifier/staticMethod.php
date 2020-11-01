<?php 
	/**
	 * static Method
	 */
	class staticMethod
	{
		public static function display(){
			echo "Hello my Static Method";
		}
		public static function newOne(){
			echo "This is Another Static function";
		}
	}
	echo staticMethod::display();

	$obj = new staticMethod();
	echo "<br>";
	$obj->newOne();

?>