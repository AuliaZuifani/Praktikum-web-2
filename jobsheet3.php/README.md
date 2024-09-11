# Penerapan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction OOP
Pada konsep penerapan kali ini, akan di jabarkan proses pengaplikasian masing-masing prinsip dasar pada OOP tersebut.
## Instruksi Kerja
### Inheritance
#### Pewarisan(Inheritance)-> adalah prinsip yang memungkinkan sebuah kelas (kelas turunan) untuk mewarisi atribut dan metode dari kelas lain (kelas induk). Ini memungkinkan penggunaan kembali kode, mengurangi redundansi, dan menciptakan hierarki kelas yang lebih baik.
A. Pembuatan Class Person
Proses Inheritance sesuai yang diperintahkan dimulai dari pembuatan class induk dengan nama person, beserta atribut dan juga metode yang telah di tentukan didalamnya.
~~~ php
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
~~~
B. Pembuatan Class Student.
Pembuatan class student ini ditandai dengan (extends) yang berarti class ini mewarisi segala informassi yang terdapat pada class person yang merupakan class induknya. jika sudah buat metode baru di dalamnya dengan metode $studentID.
~~~ php
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
~~~
Diatas adalah implementasi inheritance, dibawah akan dilanjutkan proses polymorphism

## Polymorphism
#### Polimorfisme(polymorphism)-> adalah prinsip OOP yang memungkinkan metode yang sama untuk berperilaku berbeda tergantung pada objek yang memanggilnya. Ini memberikan fleksibilitas dalam penggunaan dan penerapan metode, memungkinkan penggunaan antarmuka yang sama untuk objek yang berbeda.
A. Pembuatan class pewaris.
Proses ini ditandai dengan pembuatan class Teacher, dimana class ini mewarisi semua informasi dari class Person.
~~~ php
// Kelas Teacher yang nurunin dari kelas Person
class Teacher extends Person {
    private $teacherID;
~~~
B. Pembuatan Metode di dalam class pewaris.
Proses ini digunakan untuk menginisialisasi (construct), getName untuk menampilkan format yang berbeda dengan fungsi di class induk.
~~~ php
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
~~~
## Encapsulation
#### Enkapsulasi(encapsulation)-> adalah prinsip OOP yang menyembunyikan data dalam suatu objek dan hanya membiarkan akses melalui metode atau fungsi yang telah ditentukan. Ini membantu menjaga data tetap aman dan terstruktur, serta mencegah akses atau manipulasi yang tidak diinginkan.
A. Proses mengubah atribut.
pada proses ini dilakukan perubahan di atribut dalam class pewarisan yg mengubah atribut dari class induk.
~~~ php
// Kelas Student yang nurunin dari kelas Person
class Student extends Person {
    private $studentID;
~~~
B. Pembuatan Metode Getter dan setter
proses ini digunakan untuk mengubah nilai nama dan juga id
~~~ php
// Override metode getNama buat tampilin format khusus buat Student
    public function getNama() {
        return "Student Name: " . $this->nama;
    }

    //metode mengubah nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
    // Metode buat ngambil studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Metode buat ubah studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
~~~
## Abstraction
#### Abstraksi(abstraction)-> adalah proses menyederhanakan kompleksitas dengan hanya menampilkan fitur penting dari suatu objek, sementara detail yang tidak perlu disembunyikan. Abstraksi membantu pengembang fokus pada aspek-aspek penting dari sistem yang sedang dibangun.
A. pembuatan class abstrak
pada proses ini kita membuat class dengan metode abstrak
~~~ php
// Kelas abstrak Course buat representasi kursus
abstract class Course {
    protected $courseName;
// Metode abstrak buat dapetin detail kursus
    abstract public function getCourseDetails();
}
~~~
B. Pembuatan 2 kelas pewarisan.
nah, dalam proses kali inilah yang disebut abstrak karna penambahan 2 kelas pewarisan dengan detail yang berbeda dan penyembunyian proses yang panjang.
~~~ php
// Kelas OnlineCourse yang nurunin dari Course
class OnlineCourse extends Course {
    private $duration;
    private $platform;

    // Constructor buat inisialisasi nama kursus, durasi, dan platform
    public function __construct($courseName, $duration, $platform) {
        parent::__construct($courseName); // Panggil constructor dari parent
        $this->duration = $duration;
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails buat kursus online
    public function getCourseDetails() {
        return "Online Course: $this->courseName, Duration: $this->duration, Platform: $this->platform";
    }
}

// Kelas OfflineCourse yang nurunin dari Course
class OfflineCourse extends Course {
    // Atribut tambahan buat lokasi dan jadwal
    private $location;
    private $schedule;

    // Constructor buat inisialisasi nama kursus, lokasi, dan jadwal
    public function __construct($courseName, $location, $schedule) {
        parent::__construct($courseName); // Panggil constructor dari parent
        $this->location = $location;
        $this->schedule = $schedule;
    }

    // Implementasi metode getCourseDetails buat kursus offline
    public function getCourseDetails() {
        return "Offline Course: $this->courseName, Location: $this->location, Schedule: $this->schedule";
    }
}
~~~
DOKUMENTASI PROGRAM:
OUTPUT :

# Tugas
Dalam jobsheet tugas kali ini, saya cantumkan instruksi setiap langkah dan kode programnya.
### 1. Implentasikan kelas person,sebagai class induk dari dosen dan mahasiswa.
~~~ php
// Kelas induk buat representasi orang
class Person {
    protected $nama;
    protected $role;

    // Constructor buat inisialisasi nama dan peran
    public function __construct($nama, $role) {
        $this->nama = $nama;
        $this->role = $role;
    }
    //buat metode tampilkanData()
    public function tampilData() {
        return $this->nama;

    }
}
~~~
### 2. Gunakan Konsep Inherintance untuk membuat hierarki class yang memungkinkan dosen dan mahassiswa memiliki atribut sama dengan pranya.
dalam proses ini kita membuat 2 class pewaris yaitu dosen dan mahasiswa yang diwarisi oleh class induk yaitu class person.
~~~ php
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
~~~
### 3. Terapkan Polymorphism dengan membuat metode getRole() di kelas person dan override metoed ini di class dosen dan mahasiswa untuk menampilkan peran berbeda.
proses ini menambahkan getRole(), dan melakukan override untuk perubahan format.










