<?php 

	/**
	 * parents classs
	 */
	class myparents
	{
		public $varOne = 20;
		
		function __construct()
		{
			echo "Hello parents";
		}

		public function message(){
			echo "Welcome to my parents class " . $this->varOne;
		}


	}

 ?>