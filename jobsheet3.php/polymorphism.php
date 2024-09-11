<?php
//perintah buat kelas dasar Person
class Person {
    protected $nama;

    // Constructor buat inisialisasi nama orang waktu objek dibuat
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

    // Constructor buat inisialisasi nama dan ID mahasiswa waktu objek dibuat
    public function __construct($nama, $studentID) {
        parent::__construct($nama); 
        $this->studentID = $studentID;
    }

    // Override metode getNama buat tampilin format beda
    public function getNama() {
        return "Student Name: " . $this->nama; 
    }

    // Metode buat dapetin ID mahasiswa
    public function getStudentID() {
        return $this->studentID; 
    }
}

// Kelas Teacher yang nurunin dari kelas Person
class Teacher extends Person {
    private $teacherID;

    // Constructor buat inisialisasi nama dan ID guru waktu objek dibuat
    public function __construct($nama, $teacherID) {
        parent::__construct($nama); 
        $this->teacherID = $teacherID; 
    }

    // Override metode getNama buat tampilin format beda
    public function getNama() {
        return "Teacher Name: " . $this->nama; // Tampilin nama dengan format khusus buat Teacher
    }

    // Metode buat dapetin ID guru
    public function getTeacherID() {
        return $this->teacherID; 
    }
}

// Bikin objek Student
$student1 = new Student("Fany", "234");
// Bikin objek Teacher
$teacher = new Teacher("Pak Andhesita", "S981");

// Nampilin nama dan ID Student
echo $student1->getNama(); 
echo "<br>";
echo "Student ID: " . $student1->getStudentID(); 
echo "<hr>";

// Nampilin nama dan ID Teacher
echo $teacher->getNama(); 
echo "<br>";
echo "Teacher ID: " . $teacher->getTeacherID(); 
?>
