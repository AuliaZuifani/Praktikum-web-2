<?php
//definisi kelas
class mobil {
    //atribut atau properties
    public $merk;
    public $warna;

    //constructor
    public function __construct($merk, $warna) {
        $this-> merk = $merk;
        $this-> warna = $warna;
    }

    //Metode atau function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwana $this->warna.";
    }
}
//instansiasi objek 
$mobil1 = new mobil("Toyota","Hitam ");
echo $mobil1->deskripsi();
?>