<?php 
	/**
	 * public access modifier
	 */
	class privateclass
	{
		private $val = 20;
		
		function __construct()
		{
			echo "This is private access Modifier";
		}
		private function privmethod(){
			 $this->val;
		}
		public function newPublic(){
			$this->privmethod();
		}
	}
	$obj = new privateclass();
	echo $obj->newPublic();
?>