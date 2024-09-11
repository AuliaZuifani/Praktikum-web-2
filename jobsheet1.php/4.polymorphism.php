<?php
//membuat class pengguna
class pengguna {
    //atribut dan properti
    protected $nama;//atribut protected hanya bisa diakses oleh kelas ini dan kelas turunannya
    protected $nim;
    protected $nip;

    // membuat metode aksesFitur()
    // metode ini menampilkan pesan "Akses Fitur Pengguna"
    public function aksesFitur() {
        echo "Akses Fitur Pengguna <br>";
    }

    //membuat metode getNama() untuk mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;// mengembalikan nilai atribut $nama
    }
    
    //membuat metode setNama()untuk menetapkan nilai pada atribut nama
    public function setNama($nama) {
        $this->nama = $nama;//menetapkan nilai parameter $nama ke atribut nama
    }
}

//membuat class dosen yang mewarisi/menurunkan dari pengguna
class dosen extends pengguna {
    public function aksesFitur() {//metode untuk menampilkan pesan dari class induk(pengguna) untuk class dosen
        echo "Akses Fitur Dosen:".$this->getNama(). "<br>";// memanggil metode getNama() untuk mendapatkan nama dosen, dan menampilkan "Akses Fitur Dosen"
    }
}

//membuat class mahasiswa yang mewarisi dari class pengguna
class mahasiswa extends pengguna {
    public function aksesFitur() {//metode untuk menampilkan pesan dari class induk(pengguna) untuk class mahasiswa
        echo "Akses Fitur Mahasiswa:".$this->getNama(). "<br>"; // memanggil metode getNama() untuk mendapatkan nama mahasiswa, dan menampilkan "Akses Fitur Mahasiswa"
    }
}

// membuat objek baru dari class pengguna
$pengguna = new pengguna();
$pengguna->aksesFitur();// memanggil aksesfitur() class pengguna dan menampilkan

// Membuat objek baru dari class dosen
$dosen = new dosen();
$dosen->setNama("Prih Diantoro Abda'u");// mengatur atribut nama  dengan memanggil metode setNama() dan menampilkan nilai "Prih Diantoro Abda'u"
$dosen->aksesFitur();// Memanggil metode aksesFitur() dari class dosen & menampilkan pesan

// membuat objek baru dari class mahasiswa
$mahasiswa = new mahasiswa();
$mahasiswa->setNama("Aulia Zuifani");// mengatur nama mahasiswa dengan memanggil metode setNama() dan menetapkan nilai "Aulia Zuifani"
$mahasiswa->aksesFitur();// memanggil metode aksesFitur() dari class mahasiswa
?>