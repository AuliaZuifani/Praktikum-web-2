# JOB SHEET 1 
### Pada jobsheet 1 ini kita belajar mengenai prinsip dari OOP yaitu Class & Object, encapsulasi, inherintance, polymorphism, dan abstraction.

# 1. Class & Object
Pada jobshet 1 ini yang pertama kita perlu mengetahui bagaimana hubungan antara class dan objek. Pada setiap potongan kode program dibawah ini terdapat komentar yang ditandai dengan simbol double slice(//). komentar ini digunakan untuk menjelaskan perintah dari code yang sedang dijalankan.

### Langkah 1: Pembuatan Class (kelas)
Class dalam OOP digunakan untuk mendefinisikan objek, karakteristik atribut(variabel) dan metode(fungsi) yang akan dimiliki oleh objek tersebut.
#### Kode Program :
~~~ php
<?php 
class mahasiswa { //membuat class Mahasiswa untuk menampung atribut dan metode dilangkah selanjutnya
~~~

### Langkah 2: Pembuatan Atribut dan Acces Modifier
Atribut dalam pemrograman disimbolkan dengan $, atribut ini digunakan untuk menampung nilai. atribut dalam potongan kode program ini berupa ($nama, $nim, $jurusan).
#### Kode Program:
~~~php
//menambahkan atribut nama, nim, jurusan
//atribut ini digunakan untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
~~~
Sedangkan Acces Modifier (metode akses) berfungsi untuk menentukan perilaku dari atribut tersebut. Akses Modifikasi ini terdiri dari 3 jenis yaitu :
- public : atribut yang ditandai dengan public dapat diakses dari mana saja, baik dari dalam class itu sendiri, dari class turunan, maupun dari luar class.
- private : atribut yang ditandai dengan private hanya bisa diakses dari dalam class itu sendiri dan tidak dapat diakses dari luar class atau oleh class turunan.
- protected : atribut yang ditandai dengan protected dapat diakses dari dalam class itu sendiri dan oleh class turunannya, tetapi tidak bisa diakses dari luar class.

### Langkah 3: pemebuatan Metode Constructor
constructor yang ada di bawah merupakan metode khusus dalam sebuah kelas yang secara otomatis dipanggil saat sebuah objek dari kelas tersebut dibuat. Fungsinya adalah untuk menginisialisasi nilai awal atribut-atribut dalam objek tersebut. dengan adanya constructor ini tentu sangat memudahkan kita pada langkah selanjutnya.
#### Kode Program :
~~~ php
//constructor adalah metode untuk memanggil otomatis
    public function __construct($nama, $nim, $jurusan) {
        //menetapkan nilai parameter ke masing-masing atribut
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
~~~

### Langkah 4: Pembuatan Metode tampilkanData()
Metode tampilkanData ini digunakan untuk menampilkan nilai dalam satu fungsi yaitu tampilkanData. Dengan adanya metode ini kita tidak perlu mendefinisikan satu persatu nilai atribut yang akan ditampilkan.
#### Kode Program
~~~ php
//membuat metode tampilkanData() untuk menampilkan data dalam class mahasiswa
    public function tampilkanData() {
        return "nama: $this->nama, nim: $this->nim, jurusan: $this->jurusan"; // Mengembalikan string yang berisi informasi nama, NIM, dan jurusan mahasiswa
    }
~~~

### Langkah 5: Pembuatan Instansiasi Objek
Proses Instansiasi objek ini adalah proses pembuatan objek dari kelas mahasiswa. Dalam konteks PHP, instansiasi dilakukan dengan menggunakan kata kunci (new) diikuti dengan nama kelas.
#### Kode Program
~~~ php
/proses instansiasi objek dari class mahasiswa
$mahasiswa = new mahasiswa("Aulia Zuifani", "230102030", "JKB");//menginputkan nilai masing-masing parameter
~~~

### Langkah 6: Echo (menampilkan)
echo adalah perintah dalam PHP yang digunakan untuk menampilkan output ke layar. Output disini mencetak fungsi tampilkanData() yang berada di dalam objek mahasiswa dengan nilai yang sudah diinputkan di langkah sebelumnya.
#### Kode Program
~~~ php
//proses mencetak data mahasiswa yg sudah diinputkan dengan memanggil function tampilkanData()
echo $mahasiswa->tampilkanData();
~~~
DOKUMENTASI PROGRAM:
![class_object](https://github.com/user-attachments/assets/dd0a31de-ad36-4a7b-94a8-1c98c41237d9)

OUTPUT :
![class objek](https://github.com/user-attachments/assets/a397bf28-3f0f-436f-b52f-2c6f4cecb0f9)

 

## 2. Encapsulasi
Intruksi kedua terkait encapsulasi, encapsulasi sendiri merupakan metode untuk menyembunyikan proses implementasi dan encapsulasi ini hanya dapat di akses menggunakan metode tertentu seperti encapsulasi adalah untuk melindungi data dari akses langsung yang tidak diinginkan dan untuk memastikan bahwa data hanya dapat diubah melalui metode yang telah ditentukan.

### Langkah 1: Pembuatan Class, Atribut, dan Metode Akses
Pada langkah ini dimulai dengan mendefinisikan class dengan nama mahasiswa dengan atribut ($nama, $nim, $jurusan) yang ketiganya memiliki akses pengubah Private yang berarti, hanya dapat diakses dalam class mahasiswa saja.
#### Kode Program
~~~ php
//membuat class Mahasiswa
class mahasiswa {
    //menambahkan atribut nama, nim, jurusan
    //atribut dengan pengubah akses privat hanya dapat diakses dengan metode getter dan setter
    private $nama;
    private $nim;
    private $jurusan;
~~~
### Langkah 3: Pembuatan metode Constructor
pada langkah ini, constructor dalam sebuah kelas akan secara otomatis dipanggil saat sebuah objek dari kelas tersebut dibuat. Fungsinya adalah untuk menginisialisasi atribut ($nama, $nim, $jurusan)
#### Kode Program
~~~ php
//constructor :metode yang akan dipanggil secara otomatis kalo objek dibuat
    public function __construct($nama, $nim, $jurusan) {
       //menetapkan nilai parameter ke masing-masing atribut
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
~~~
### Langkah 3: Pembuatan Getter dan Setter
Pada langkah ini berisi pembuatan metode getter dan setter untuk masing masing atributnya. langkah getter setter ini dilakukan karena akses dari atribut bersifat private yang hanya bisa diakses oleh metode tertentu.
#### Kode Program
~~~ php
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
~~~
### Langkah 4: Proses Intansiasi Objek
Proses instansiasi objek ini merupakan proses pembuatan objek baru dari kelas mahasiswa. Dalam konteks PHP, instansiasi dilakukan dengan menggunakan kata kunci (new) diikuti dengan nama kelas. Proses ini dilanjutkan dengan penginputan nilai atribut.
#### Kode Program
~~~ php
//membuat instansisasi objek dari class mahasiswa
$mahasiswa = new mahasiswa("NAMA: Aulia Zuifani", "NIM :230102030", "JURUSAN :JKB");//mennginputkan nilai parameter setiap atribut
~~~
### Langkah 5: Proses Menampilkan menggunakan Getter&Setter
Proses menampilkan ini berbeda dengan sebselumnya yang hanya memanggil fungsi dari metode nya. Kali ini di tampilkan dengan mengambil nilai masing-masing atributnya menggunakan perintah getNama().
#### Kode Program
~~~ php
echo $mahasiswa->getNama();// Memanggil metode getNama() untuk mendapatkan dan menampilkan nilai nama dari objek $mahasiswa
echo "<br>";
echo $mahasiswa->getNim();// Memanggil metode getNim() untuk mendapatkan dan menampilkan nilai nim dari objek $mahasiswa
echo "<br>";
echo $mahasiswa->getJurusan();// Memanggil metode getJurusan() untuk mendapatkan dan menampilkan nilai jurusan dari objek $mahasiswa
~~~
DOKUMENTASI PROGRAM:
![encapsulasi](https://github.com/user-attachments/assets/25b15ce4-a62b-4c3b-aeb7-f93eaebd0659)
OUTPUT :
![encapsulasi](https://github.com/user-attachments/assets/6fa5e3d0-f91b-482f-b07d-f1c52728aeb6)



## 3. Inheritance
Inheritance atau pewarisan dalam OOP adalah metode di mana sebuah kelas dapat mewarisi atribut dan metode dari kelas lain. Dengan kata lain, kelas yang disebut kelas turunan yang menggunakan semua fitur yang ada di kelas induk tanpa perlu menuliskannya ulang. 

### Langkah 1: Pembuatan Class,Atribut, dan Metode Akses
Pada langkah ini sama dengan langkah yang ada pada metode encapsulasi yaang dimulai dari pembuatan Class, Atribut, dan metode. Hanya saja kali ini atribut $nama memiliki akses protected yang berarti atribut tersebut hanya dapat di akses dalam kelas tersebut dan kelas turunan nya saja.
#### Kode Program
~~~ php
//membuat class baru pengguna
class pengguna {
    //membuat atribut nama
    protected $nama;//atribut protected dapat diakses oleh kelas ini dan kelas turunannya
~~~
### Langkah 2: Pembuatan Metode Construct dan Getter
Langkah ini terdapat metode constructor dan getter. Metode constructor  Fungsinya adalah untuk menginisialisasi atribut ($nama). sedangkan metode getter disini untuk mengambil nilai atribut nama.
#### Kode Program
~~~ php
//construtor : metode yg akan dipanggil kalo objek dari class dibuat
     public function __construct($nama) {//parameter nama yg diterima dan ditetapkan di atribut nama
        $this->nama = $nama;//menetapkan nilai parameter $nama ke dalam atribut nama
    }

    //// Membuat metode getNama() untuk mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;// Mengembalikan nilai atribut $nama
    }
~~~

### Langkah 3: Pembuatan Class Pewarisan(turunan)
Class turunan yang akan dibuat pada proses ini adalah class dosen yang merupakan pewarisan dari class induk yaitu class pengguna. Pembuatan class ini di simbolkan dengan keyword (extends). sedikit tambahan, terdapat keyword (parent) yang berarti keyword ini memanggil parameter dari class induk(pengguna).
#### Kode Program
~~~ php
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
~~~
### Langkah 4: Proses Intansiasi
Proses instansiasi objek ini merupakan proses pembuatan objek dosen dari kelas pengguna. Dalam konteks PHP, instansiasi dilakukan dengan menggunakan kata kunci (new) diikuti dengan nama kelas. Proses ini dilanjutkan dengan penginputan nilai atribut.
#### Kode Program
~~~ php
//membuat variabel(objek baru) dari class dosen dengan parameter nama dan matakuliah
$dosen = new dosen("NAMA :Prih Diantoro Abda'u", "MATA KULIAH :Pemrograman Web 2");//menginputkan nilai parameter
~~~
### Langkah 5: Echo (menampilkan)
Proses menampilkan output ke layar ini menggunakan metode getter dengan mengambil nama dan matakuliah dari objek dosen.
#### Kode Program
~~~ php
echo $dosen->getNama();//Output Prih Diantoro Abda'u
echo "<br>";
echo $dosen->getmataKuliah();//Output pemrograman web 2
echo "<br>";
~~~
DOKUMENTASI PROGRAM :
![inheritance](https://github.com/user-attachments/assets/c1aa4720-4dd0-4374-82aa-e132ba510a37)

OUTPUT:
![inherentace](https://github.com/user-attachments/assets/e9a340fb-e606-4220-bba0-18c63fa6e3d5)



## 4. Polymorphism
Polymorphism adalah metode dalam OOP dapat digunakan oleh objek dari kelas yang berbeda, tetapi memberikan hasil atau perilaku yang berbeda sesuai dengan kelas tempat metode tersebut diimplementasikan. 

### Langkah 1: Pembuatan Class, Atribut, Metode Akses
seperti langkah pada umumnya, dalam metode ini yang pertama dilakukan adalah pembuatan class, atribut dan metode protected yang berarti hanya dapat diakses di dalam kelas nya sendiri dan class turunanya.
#### Kode Program
~~~ php
//membuat class pengguna
class pengguna {
    //atribut dan properti
    protected $nama;//atribut protected hanya bisa diakses oleh kelas ini dan kelas turunannya
    protected $nim;
    protected $nip;
~~~
### Langkah 2: Pembuatan Metode Aksesfitur, Getter, dan Setter
Metode aksesFitur(), getNama(), dan setNama() digunakan untuk mengelola dan mengontrol data dalam kelas dengan cara yang aman dan terstruktur.
- Metode aksesFitur(): Metode ini tidak menerima parameter dan menampilkan pesan "Akses Fitur Pengguna <br>" menggunakan echo dan metode ini dapat dipanggil dari objek untuk menampilkan pesan akses fitur.
- Metode getNama(): Metode ini digunakan untuk mengambil nilai dari atribut $nama milik objek, menggunakan return $this->nama; untuk mengembalikan nilai atribut $nama.
this adalah referensi ke objek saat ini dan $this->nama mengacu pada atribut nama dari objek tersebut.
- Metode setNama($nama): Metode ini digunakan untuk menetapkan nilai pada atribut $nama objek, menerima parameter $nama dan menetapkan nilainya ke atribut objek $this->nama, digunakan untuk mengubah atau mengatur nilai nama dari luar kelas.
#### Kode Program
~~~ php
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
~~~
### Langkah 3: Pembuatan 2 class pewarisan
Pada langkah ini, terdapat dua kelas yang menggunakan konsep pewarisan (inheritance) dari kelas induk pengguna, yaitu kelas dosen dan mahasiswa.
yang keduanya mewarisi semua perilaku dan atribut dari class pengguna. Kemudian, metode aksesFitur() di-override dalam kelas dosen dan mahasiswa, sehingga menampilkan pesan khusus untuk dosen dan mahasiswa.
#### Kode Program
~~~ php
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
~~~
### Langkah 4: Proses Instansiasi dan Pemanggilan metode
Proses Instansiasi membuat objek baru dari class pengguna,dosen,dan mahasiswa. kemudian, memanggil metode aksesFitur() untuk menampilkan pesan yang sudah didefinisikan di dalam class pengguna,dosen dan mahasiswa.
#### Kode Program
~~~ php
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
~~~
DOKUMENTASI PROGRAM :
![polymor](https://github.com/user-attachments/assets/76b80321-c23b-4d6e-98ae-c6148d12c092)
OUTPUT :
![poly](https://github.com/user-attachments/assets/40e1bbdf-d1cc-4528-9e3f-7319c6cf2633)

## 5. Abstraction
Abstraction adalah konsep OOP yang menyembunyikan detail implementasi dan hanya menampilkan fitur penting. Tujuannya adalah menyederhanakan penggunaan objek dan memastikan fokus pada fungsi utama tanpa perlu mengetahui cara kerjanya.
### Langkah 1: Pembuatan Class Abstract, Atribut, dan Metode akses
Class pengguna adalah class abstrak yang tidak dapat dibuat objeknya secara langsung.selain itu, Class ini berfungsi sebagai dasar untuk class lainnya dan memiliki atribut nama, nim, dan nip dengan akses protected, artinya hanya bisa diakses oleh class ini dan class turunannya.
#### Kode Program
~~~ php
//membuat class abstrak pengguna
// class abstrak tidak bisa diinstansiasi secara langsung, hanya digunakan sebagai class dasar untuk class turunan
abstract class pengguna {
    //membuat atribut nama, nim, nip
     //atribut protected diakses oleh class ini dan class turunannya
    protected $nama;
    protected $nim;
    protected $nip;
~~~
### Langkah 2: Pembuatan Metode Getter dan setter
Metode getNama() dan setNama() digunakan untuk mengakses dan mengubah nilai atribut protected $nama dalam sebuah class pengguna.
#### Kode Program
~~~ php
//membuat metode getter nama mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;// mengembalikan nilai atribut $nama
    }

    //membuat metode setter nama untuk menetapkan nilai pada atribut $nama
    public function setNama($nama) {
        $this->nama = $nama;//meetapkan nilai parameter $nama ke atribut $nama
    }
~~~
### Langkah 3:Pembuatan 2 class turunan
Pada langkah ini, terdapat dua kelas turunan dari kelas induk pengguna, yaitu kelas dosen dan mahasiswa. yang keduanya mewarisi semua perilaku dan atribut dari class pengguna. Kemudian, metode aksesFitur() di-override dalam kelas dosen dan mahasiswa, sehingga menampilkan pesan khusus untuk dosen dan mahasiswa.
#### Kode Program
~~~ php
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
~~~
### Langkah 4: Proses Intansiasi objek
Proses Instansiasi  adalah proses membuat objek baru dari class turunan dosendan mahasiswa. kemudian, memanggil metode aksesFitur() untuk menampilkan pesan yang sudah didefinisikan di dalam class pengguna,dosen dan mahasiswa.
#### Kode Program
~~~ php
// membuat objek baru dari class dosen
$dosen = new dosen();
$dosen->setNama("Prih diantoro Abda'u");// mengatur nama dan menginputkan dengan menggunakan metode setNama()
$dosen->aksesFitur();// memanggil metode aksesFitur() untuk menampilkan nama dosen dan fitur yang diakses

// membuat objek baru dari class mahasiswa
$mahasiswa = new mahasiswa();
$mahasiswa->setNama("Aulia Zuifani");// mengatur nama mahasiswa dan menginputkan dengan menggunakan metode setNama()
$mahasiswa->aksesFitur();// memanggil metode aksesFitur() untuk menampilkan nama mahasiswa dan fitur yang diakses
~~~
DOKUMENTASI PROGRAM :
![abstrac](https://github.com/user-attachments/assets/aa34e3b7-fd76-4b8d-b908-b2f1e9a0c176)

OUTPUT :
![abstrak](https://github.com/user-attachments/assets/5b0e9856-7015-45b8-9702-9a170fb8c5b3)


