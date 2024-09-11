<?php
// Kelas dasar Person buat representasi orang
class Person {
    protected $nama;

    // Constructor buat inisialisasi nama orang pas objeknya dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode buat ngambil nama
    public function getNama() {
        return $this->nama;
    }

    // Metode buat ubah nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

// Kelas Student yang nurunin dari kelas Person
class Student extends Person {
    private $studentID;

    // Constructor buat inisialisasi nama dan ID mahasiswa
    public function __construct($nama, $studentID) {
        parent::__construct($nama); 
        $this->studentID = $studentID; 
    }

    // Override metode getNama buat tampilin format khusus buat Student
    public function getNama() {
        return "Student Name: " . $this->nama;
    }

    // Metode buat ngambil studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Metode buat ubah studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Bikin objek Student
$student1 = new Student("Fany", "550");

// Nampilin nama dan ID Student sebelum diubah
echo $student1->getNama(); 
echo "<br>";
echo "Student ID: " . $student1->getStudentID(); 
echo "<br>";

// Ubah nama dan studentID pake setter
$student1->setNama("kairi");
$student1->setStudentID("677");

// Nampilin nama dan ID Student setelah diubah
echo $student1->getNama(); 
echo "<br>";
echo "Student ID: " . $student1->getStudentID(); 
?>

