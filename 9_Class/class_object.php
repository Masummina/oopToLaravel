<?php
	/**
	 * class_object
	 */
	class students
	{
		public $id = 10;
		public $roll = 20;
	}
	$sakib = new students();
	$rakib = new students();
	$sakib->id = 15;
	echo "Sakib id is: ".$sakib->id;
	echo "<br>";
	echo "Rakib id is: ".$rakib->id;


?>