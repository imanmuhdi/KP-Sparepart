<?php
class Buah{
	public $nama;
	public $bentuk;

	function __construct($nama, $bentuk){ //construct
		$this->nama = $nama;
		$this->bentuk = $bentuk;
	}

	public function getBuah(){
		return "$this->nama, $this->bentuk";
	}
}
$Buah1 = new Buah("Apel" ,"Bulat");
$Buah2 = new Buah("Jeruk" ," Bulat");

echo $Buah1->getBuah();
echo "<br>";
echo $Buah2->getBuah();
?>