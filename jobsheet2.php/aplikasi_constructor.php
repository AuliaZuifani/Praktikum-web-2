<?php
//perintah membuat class mahasiswa
class mahasiswa {
    //pengisian atribut untuk class mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //perintah pengaplikasian constructornya
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //membuat metode untuk menampilkan datanya
    public function tampilkanData() {
        return "mahasiswa: $this->nama, nim: $this->nim, jurusan: $this->jurusan";
    }
}

//perintah instansiasi objek atau pembuatan objek baru
$mahasiswa1 = new mahasiswa("Fany", "230102030","TI");
echo $mahasiswa1->tampilkanData();
?>