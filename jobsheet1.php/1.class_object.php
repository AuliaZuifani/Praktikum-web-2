<?php
//membuat class Mahasiswa
class mahasiswa {
    //menambahkan atribut nama, nim, jurusan
    //atribut ini digunakan untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //constructor adalah metode untuk memanggil otomatis
    public function __construct($nama, $nim, $jurusan) {
        //menetapkan nilai parameter ke masing-masing atribut
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //membuat metode tampilkanData() untuk menampilkan data dalam class mahasiswa
    public function tampilkanData() {
        return "nama: $this->nama, nim: $this->nim, jurusan: $this->jurusan";
    }
}
//proses instansiasi objek dari class mahasiswa
$mahasiswa = new mahasiswa("Aulia Zuifani", "230102030", "JKB");//menginputkan nilai masing-masing parameter
//proses mencetak data mahasiswa yg sudah diinputkan dengan memanggil function tampilkanData()
echo $mahasiswa->tampilkanData(); 
?>