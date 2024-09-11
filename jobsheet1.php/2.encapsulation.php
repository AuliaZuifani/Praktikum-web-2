<?php
//membuat class Mahasiswa
class mahasiswa {
    //menambahkan atribut nama, nim, jurusan
    //atribut dengan pengubah akses privat hanya dapat diakses dengan metode getter dan setter
    private $nama;
    private $nim;
    private $jurusan;

    //constructor :metode yang akan dipanggil secara otomatis kalo objek dibuat
    public function __construct($nama, $nim, $jurusan) {
       //menetapkan nilai parameter ke masing-masing atribut
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //metode getter untuk mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;//mengembalikan nilai atribut nama
    }
    //metode setter untuk mengubah nilai atribut nama
    public function setNama($nama) {
        $this->nama = $nama;//menetapkan nilai parameter nama kedalam atribut nama
    }
    //metode getter untuk mengambil nilai atribut $nim
    public function getNim() {
        return $this->nim;//mengembalikan nilai atribut nim
    }
     //metode setter untuk mengubah nilai atribut nim
    public function setNim($nim) {
        $this->nim = $nim;//menetapkan nilai parameter nim kedalam atribut nim
    }
    //metode getter untuk mengambil nilai atribut $jurusan
    public function getJurusan() {
        return $this->jurusan;//mengembalikan nilai atribut 
    }
    //metode setter untuk mengubah nilai atribut nim
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

//membuat instansisasi objek dari class mahasiswa
$mahasiswa = new mahasiswa("NAMA: Aulia Zuifani", "NIM :230102030", "JURUSAN :JKB");//mennginputkan nilai parameter setiap atribut
echo $mahasiswa->getNama();// Memanggil metode getNama() untuk mendapatkan dan menampilkan nilai nama dari objek $mahasiswa
echo "<br>";
echo $mahasiswa->getNim();// Memanggil metode getNim() untuk mendapatkan dan menampilkan nilai nim dari objek $mahasiswa
echo "<br>";
echo $mahasiswa->getJurusan();// Memanggil metode getJurusan() untuk mendapatkan dan menampilkan nilai jurusan dari objek $mahasiswa
?>