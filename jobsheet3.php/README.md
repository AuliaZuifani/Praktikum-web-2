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
DOKUMENTASI PROGRAM :
![inher](https://github.com/user-attachments/assets/bb46e0e8-1f31-4935-9365-862aeac6718d)
OUTPUT :
![Cuplikan layar 2024-09-12 080806](https://github.com/user-attachments/assets/7bcb82f4-cf75-4bdd-ae8f-7827bc36cb65)




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
DOKUMENTASI PROGRAM:
![polymor](https://github.com/user-attachments/assets/9a62d57c-48d2-45b3-bafd-14c042c59e53)
OUTPUT :
![image](https://github.com/user-attachments/assets/e60fd0c6-cfa9-41c0-a525-9578fe07da24)


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
DOKUMENTASI PROGRAM :
![encapsulasi](https://github.com/user-attachments/assets/e71be6dc-bbcc-4b91-ad35-a781c9324c7e)
OUTPUT :
![Cuplikan layar 2024-09-12 080904](https://github.com/user-attachments/assets/e7c7fea8-4257-48e6-877c-3253d7168d46)

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
![abstraction](https://github.com/user-attachments/assets/4b4cbc3e-8be8-4df4-96bf-05b355ff211f)
OUTPUT :
![Cuplikan layar 2024-09-12 081002](https://github.com/user-attachments/assets/c5eb21e9-c84e-4549-9cba-e8ad7687f1fd)


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
 ~~~ php
//buat metoed getRole() {
   public function getRole() {
    return $this->role;
}
~~~
dilanjutkan dengan proses override nya metode getrole
~~~ php
// melakukan proses override untuk metode getRole()
    public function getRole() {
        return "ROLE: $this->role";
    }
~~~
### 4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas mahasiswa.
proses ini memprivat atribut nidn dan nim
~~~ php
/ Kelas Dosen yang nurunin dari Person
class Dosen extends Person {
    private $nidn;
~~~
~~~ php
/ Kelas Mahasiswa yang nurunin dari Person
class Mahasiswa extends Person {
    private $nim; // Pake encapsulation dengan atribut private
~~~
### 5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
proses ini membuat class jurnal dengan abstrak
~~~ php
// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;
    protected $penulis;
    protected $status;


    // Constructor buat inisialisasi judul jurnal
    public function __construct($judul, $penulis, $status) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->status = $status;
    }

    // Metode abstrak buat ajukan jurnal
    abstract public function ajukanJurnal();

    //kita buat metode getjudu()
    public function getJudul() {
        return $this->judul;
    }

    //buat metode getpenulis() 
    public function getPenulis() {
        return $this->penulis;
    }

    //buat metode getstatus()
    public function getStatus() {
        return $this->status;
    }
}

// Kelas JurnalDosen yang nurunin dari Jurnal
class JurnalDosen extends Jurnal {
   //buat metode satatusPengajuannya
   public function statusPengajuan() {
    return "judul: {$this->getJudul()} <br> nama dosen: {$this->getPenulis()} <br> status pngajuan: {$this->getStatus()}";
   }

   public function ajukanJurnal(){
    return "";
   }
}


// Kelas JurnalMahasiswa yang nurunin dari Jurnal
class JurnalMahasiswa extends Jurnal {
    //buat metode satatusPengajuannya
   public function statusPengajuan() {
    return "judul: {$this->getJudul()} <br> nama mhs: {$this->getPenulis()} <br> status pngajuan: {$this->getStatus()}";
   }

   public function ajukanJurnal(){
    return "";
   }
}
~~~
DOKUMENTASI PROGRAM:
![tugas](https://github.com/user-attachments/assets/4d0f00f7-4d5e-4865-a1ec-c8901749e425)

OUTPUT:
![Cuplikan layar 2024-09-12 081126](https://github.com/user-attachments/assets/aec10d50-abef-4d74-a73e-b9d433475ab9)















