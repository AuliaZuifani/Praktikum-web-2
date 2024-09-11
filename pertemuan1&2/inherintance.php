<?php
//class baru Produk
class Produk {
    protected $nama;

    //construtior
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Buku extends Produk {
    private $penulis;

    public function __construct($nama, $penulis) {
        parent:: __construct($nama);
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getNama();//Output pemrograman php