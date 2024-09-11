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

    //membuat metode update untuk mengapdet jurusan
    public function updateJurusan($newJurusan) {
        $this->jurusan = $newJurusan;
    }
}

//perintah instansiasi objek atau pembuatan objek baru
$mahasiswa1 = new mahasiswa("Fany", "230102030","TI");

//perintah menampilkan hasil update nya
$mahasiswa1->updateJurusan("TM");

//perintah ini untuk menampilkan output dengan metode tampildata yang sudah dibuat sebelumnya
echo $mahasiswa1->tampilkanData();
?>