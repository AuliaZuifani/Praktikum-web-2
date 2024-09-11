<?php
//membuat class baru pengguna
class pengguna {
    //membuat atribut nama
    protected $nama;//atribut protected dapat diakses oleh kelas ini dan kelas turunannya

     //construtor : metode yg akan dipanggil kalo objek dari class dibuat
     public function __construct($nama) {//parameter nama yg diterima dan ditetapkan di atribut nama
        $this->nama = $nama;//menetapkan nilai parameter $nama ke dalam atribut nama
    }

    //// Membuat metode getNama() untuk mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;// Mengembalikan nilai atribut $nama
    }
}

//membuat class dosen yang diturunkan dari class pengguna
//semua atribut di class pengguna ada di class dosen
class dosen extends pengguna {
    private $mataKuliah;//atribut matakuliah hanya bisa diakses di class turunanya

    //metode yang akan dipanggil saat objek dari class dosen dibuat
    public function __construct($nama, $mataKuliah) {
        parent:: __construct($nama);//memanggil parameter dari class induk(pengguna)
        $this->mataKuliah = $mataKuliah;//menetapkan nilai matakuliah
    }

    //metode getter untuk mengambil nilai dari atribut matakuliah
    public function getmataKuliah() {
        return $this->mataKuliah;//mengembalikan nilai matakuliah
    }
}
//membuat variabel(objek baru) dari class dosen dengan parameter nama dan matakuliah
$dosen = new dosen("NAMA :Prih Diantoro Abda'u", "MATA KULIAH :Pemrograman Web 2");//menginputkan nilai parameter
echo $dosen->getNama();//Output Prih Diantoro Abda'u
echo "<br>";
echo $dosen->getmataKuliah();//Output pemrograman web 2
echo "<br>";
?>
