<?php
//membuat class buku
class buku {
    //atribut dan properties
    private $judul;
    private $penulis;

    //constructior
    public function __construct($judul,$penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    //metode atau function
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul(); //output pemrograman php