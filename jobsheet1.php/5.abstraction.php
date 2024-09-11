<?php
//membuat class abstrak pengguna
// class abstrak tidak bisa diinstansiasi secara langsung, hanya digunakan sebagai class dasar untuk class turunan
abstract class pengguna {
    //membuat atribut nama, nim, nip
     //atribut protected diakses oleh class ini dan class turunannya
    protected $nama;
    protected $nim;
    protected $nip;

    //membuat metode getter nama mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;// mengembalikan nilai atribut $nama
    }

    //membuat metode setter nama untuk menetapkan nilai pada atribut $nama
    public function setNama($nama) {
        $this->nama = $nama;//meetapkan nilai parameter $nama ke atribut $nama
    }
}

//membuat class dosen yang mewarisi/diturunkan dari class pengguna
// class dosen mendapatkan semua properti dan metode dari class pengguna
class dosen extends pengguna {
    public function aksesFitur() {// Membuat metode aksesFitur() untuk menampilkan fitur yang diakses oleh dosen
        echo "Akses Fitur Dosen:".$this->getNama()."<br>";// Menampilkan "Akses Fitur Dosen" dengan nama dosen yang diambil dari metode getNama()
    }
}

//membuat class mahasiswa yang mewarisi/diturunkan dari pengguna 
// class mahasiswa juga mendapatkan semua properti dan metode dari class pengguna
class mahasiswa extends pengguna {
    public function aksesFitur() {// membuat metode aksesFitur() untuk menampilkan fitur yang diakses oleh mahasiswa
        echo "Akses Fitur Mahasiswa:".$this->getNama()."<br>"; // menampilkan "Akses Fitur Mahasiswa" dengan nama mahasiswa yang diambil dari metode getNama()
    }
}

// membuat objek baru dari class dosen
$dosen = new dosen();
$dosen->setNama("Prih diantoro Abda'u");// mengatur nama dan menginputkan dengan menggunakan metode setNama()
$dosen->aksesFitur();// memanggil metode aksesFitur() untuk menampilkan nama dosen dan fitur yang diakses

// membuat objek baru dari class mahasiswa
$mahasiswa = new mahasiswa();
$mahasiswa->setNama("Aulia Zuifani");// mengatur nama mahasiswa dan menginputkan dengan menggunakan metode setNama()
$mahasiswa->aksesFitur();// memanggil metode aksesFitur() untuk menampilkan nama mahasiswa dan fitur yang diakses
?>