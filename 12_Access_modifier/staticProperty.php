<?php
	/**
	 * static property
	 */
	class staticPro
	{
		
		public static $name = "Masum";
		public static $age = 99;
		public static function masfun(){
			return self::$name;
		}
		public function getName(){
			return self::$name;
		}
	}

	echo staticPro::$name;
	echo "<br>";
	echo "Static function is: " . staticPro::masfun();
	echo "<br>";
	echo staticPro::$age = "Nayeem";
	echo "<br>" . 'Second Section is';

	echo staticPro::masfun();

	$obj = new staticPro();
	echo "<br>";
	echo staticPro::$name = "Kabir Sing";
	echo staticPro::$name;
	echo "<br>";
	echo $obj->getName();



?>