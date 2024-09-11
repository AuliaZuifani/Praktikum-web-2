<?php
//menambah atribut dan metode
class buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
        $this-> judul = $judul;
        $this-> penulis = $penulis;
    }

    public function tampilkanInfo() {
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}
$buku1 = new buku("Pemrograman PHP", "John Doe");
echo $buku1->tampilkanInfo();
?>
