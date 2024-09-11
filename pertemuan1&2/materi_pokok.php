<?php
//definisi class
class buku{
    //atribut atau properties
    public $judul;
    public $penulis;

    //constructor
    public function __construct($judul,$penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    //metode atau function
    public function tampilkaninfo() {
        return "judul: $this->judul, penulis: $this->penulis";
    }
}

//instansiasi objek
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkaninfo();