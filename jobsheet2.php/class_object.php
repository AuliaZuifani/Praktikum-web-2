<?php
//ini adalah perintah membuat class dgn nama mahasiswa
class mahasiswa {
    //membuat atribut
    public $nama;
    public $nim;
    public $jurusan;

    //membuat function dgn metode untuk menampilkan data
    public function tampilkanData() {
        return "mahasiswa: $this->nama, nim: $this->nim, jurusan: $this->jurusan";
    }
}

//proses instansiasi objek atau biasa kita sebut pembuatan objek baru
$mahasiswa1 = new mahasiswa("Fany", "230102030", "TI");
echo $mahasiswa1->tampilkanData();
?>