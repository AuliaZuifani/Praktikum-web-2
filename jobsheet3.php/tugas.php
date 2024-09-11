<?php
// Kelas induk buat representasi orang
class Person {
    protected $nama;
    protected $role;

    // Constructor buat inisialisasi nama dan peran
    public function __construct($nama, $role) {
        $this->nama = $nama;
        $this->role = $role;
    }

    // Getter buat dapetin nama
    public function getNama() {
        return $this->nama;
    }

    // Metode ini bakal di-override di kelas anak
    public function getRole() {
        return $this->role;
    }
}

// Kelas Dosen yang nurunin dari Person
class Dosen extends Person {
    private $nidn; 

    // Constructor buat inisialisasi nama, nidn, dan peran
    public function __construct($nama, $nidn) {
        parent::__construct($nama, "Dosen"); 
        $this->nidn = $nidn; 
    }

    // Getter buat dapetin NIDN
    public function getNIDN() {
        return $this->nidn;
    }
}

// Kelas Mahasiswa yang nurunin dari Person
class Mahasiswa extends Person {
    private $nim; // Pake encapsulation dengan atribut private

    // Constructor buat inisialisasi nama, nim, dan peran
    public function __construct($nama, $nim) {
        parent::__construct($nama, "Mahasiswa"); 
        $this->nim = $nim; 
    }

    // Getter buat dapetin NIM
    public function getNIM() {
        return $this->nim;
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    // Constructor buat inisialisasi judul jurnal
    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak buat ajukan jurnal
    abstract public function ajukanJurnal();
}

// Kelas JurnalDosen yang nurunin dari Jurnal
class JurnalDosen extends Jurnal {
    private $nidn;

    // Constructor buat inisialisasi judul dan nidn
    public function __construct($judul, $nidn) {
        parent::__construct($judul); // Manggil constructor dari kelas abstrak
        $this->nidn = $nidn;
    }

    // Implementasi metode ajukanJurnal
    public function ajukanJurnal() {
        return "Jurnal Dosen berjudul '$this->judul' dengan NIDN $this->nidn diajukan.";
    }
}

// Kelas JurnalMahasiswa yang nurunin dari Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    // Constructor buat inisialisasi judul dan nim
    public function __construct($judul, $nim) {
        parent::__construct($judul); // Manggil constructor dari kelas abstrak
        $this->nim = $nim;
    }

    // Implementasi metode ajukanJurnal
    public function ajukanJurnal() {
        return "Jurnal Mahasiswa berjudul '$this->judul' dengan NIM $this->nim diajukan.";
    }
}

// Bikin objek Dosen
$dosen = new Dosen("Annas Setiawan", "224354");
// Bikin objek Mahasiswa
$mahasiswa = new Mahasiswa("Kairi rayos", "987654");

// Nampilin role dan data dosen
echo $dosen->getNama() . " - " . $dosen->getRole() . ", NIDN: " . $dosen->getNIDN() . "<br>";

// Nampilin role dan data mahasiswa
echo $mahasiswa->getNama() . " - " . $mahasiswa->getRole() . ", NIM: " . $mahasiswa->getNIM() . "<hr>";

// Bikin objek JurnalDosen dan JurnalMahasiswa
$jurnalDosen = new JurnalDosen("Filsafat Logika", "765543");
$jurnalMahasiswa = new JurnalMahasiswa("Astronomi", "12345");

// Nampilin pengajuan jurnal
echo $jurnalDosen->ajukanJurnal() . "<br>";
echo $jurnalMahasiswa->ajukanJurnal() . "<br>";
?>
