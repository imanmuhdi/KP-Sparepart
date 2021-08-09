<?php
class test{
	public static $Apple = "Apple";

	public static function getApple(){
		return self::$Apple; //self
	}

}
$t = new test();
echo $t->getApple();
?>