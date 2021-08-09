<?php
class Buah {
  public $nama;
  public $bentuk;

  function __construct($nama,$bentuk) {
    $this->nama = $nama;
    $this->bentuk = $bentuk;
  }
  function __destruct() {
    echo "$this->nama,$this->bentuk";
  }
}

$apel = new Buah("Apel","Bulat");
$semangka = new Buah("Semangka","Lonjong")

?>