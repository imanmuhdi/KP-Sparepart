<?php
class Buah{
	public $nama;
	public $bentuk;
}

class Apel extends Buah{
	public $warna;

	function __construct($nama, $bentuk, $warna){
		$this->nama = $nama;
		$this->bentuk = $bentuk;
		$this->warna = $warna;
	}

	public function getApel(){
		return "$this->nama, $this->bentuk, $this->warna";
	}
}
$Apel1 = new Apel("Apel" ,"Bulat","Merah");
$Apel2 = new Apel("Jeruk" ," Bulat","Hijau");

echo $Apel1->getApel();
echo "<br>";
echo $Apel2->getApel();
?>