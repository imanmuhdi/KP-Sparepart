<?php
class Thistest{
	public $Apple = "Apple";

	public function getapple(){
	return "$this->Apple";
	}

	
}
$test1 = new Thistest();
echo $test1->getapple();

?>