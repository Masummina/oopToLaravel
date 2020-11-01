<?php 
/**
 * protected
 */
class protectedCls
{
	public $val =30;
	function __construct()
	{
		echo "I am constant";
	}
	protected function myfunction(){
		return $this->val=50;
	}
}

/**
 * newClass
 */
class childCls extends protectedCls
{
	public function student(){
		return parent::myfunction();
	}
	public function updateval(){
		return $this->val = 800;
	}	

}
$obj = new childCls();
echo $obj->student();
echo $obj->updateval();


?>