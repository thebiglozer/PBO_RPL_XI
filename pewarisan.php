<?php 


  class Kendaraan{
    public $merek,
            $harga,
            $kecepatanMax,
            $bahanBakar;

    public function __construct($merek = "merek", $harga = 0, $kecepatanMax = 0, $bahanBakar = "bensin"){
      $this->merek = $merek;
      $this->harga = $harga;
      $this->bahanBakar = $bahanBakar;
    }

    public function cetakDetail(){
      echo $this->merek . "<br>";
      echo "Harga : " . $this->harga . "<br>";
      echo "Bahan Bakar : " . $this->bahanBakar . "<br>";
    }
  }


  $mobil = new Kendaraan("Avanza", "100 juta", "Bensin");
  $mobil->cetakDetail();
  echo "<hr>";

  $motor = new Kendaraan("Motor", "20 juta", "Bensin");  
  $motor->cetakDetail();
  
  















?>