<?php
// buat kelas dasar Person 
class Person {
    protected $nama;

    // Constructor buat inisialisasi nama orang pas objek Person dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode buat dapetin nama orang
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Student yang nurunin dari kelas Person
class Student extends Person {
    private $studentID;

    // Constructor buat inisialisasi nama dan ID mahasiswa pas objek dibuat
    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    // Metode buat dapetin ID mahasiswa
    public function getStudentID() {
        return $this->studentID;
    }
}

// Buat objek Student
$student1 = new Student("Nama : fany", "ID : 567");

// Nampilin nama mahasiswa dengan panggil metode getNama() dari kelas parent
echo $student1->getNama();
echo "<br>";
// Nampilin ID mahasiswa dengan panggil metode getStudentID()
echo $student1->getStudentID(); // Output: ID : 567
?>
