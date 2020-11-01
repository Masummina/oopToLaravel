<?php 
	/**
	 * class and object
	 */
	class student
	{
		public $name = "Masum";
		public $id = 12;
		public $a = 20;
		public $b = 43;
		public function myname($num){
			echo "My name is : $num";
		}

		public function mysum(){
			$c = $this->a + $this->b;
			return $c;
		}

		public function myfunction(){
			$result = $this->mysum();
			 $gg = $this->b = 100;
			 $res = $result + $gg;
			 return $res;

		}
	}
	$object = new student();
	echo $object->name = "Sayam";
	$object->myname(34);
	echo "<br>";
	echo $fff = $object->mysum();
	echo "<br>";
	echo $fff = $object->myfunction();
	// echo $fff->c;





 ?>