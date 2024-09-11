# About Me!✨
[![](https://img.shields.io/badge/Nama-Aulia_Zuifani-purple)](https://travis-ci.org/joemccann/dillinger)

[![](https://img.shields.io/badge/NIM-230202048-pink)](https://travis-ci.org/joemccann/dillinger)

[![](https://img.shields.io/badge/Kelas-TI_2B-pink)](https://travis-ci.org/joemccann/dillinger)

## List of Contens
  - [Materi OOP](https://github.com/AuliaZuifani/Praktikum-web-2/blob/main/Modul/README.md)
  - [Jobsheet 1](https://github.com/AuliaZuifani/Praktikum-web-2/tree/main/Jobsheet/jobsheet1.php)
  - [Jobsheet 2](https://github.com/AuliaZuifani/Praktikum-web-2/tree/main/Jobsheet/jobsheet2.php)
  - [Jobsheet 3](https://github.com/AuliaZuifani/Praktikum-web-2/tree/main/Jobsheet/jobsheet3.php)

## Introduce 
Repositori Ini saya buat untuk memenuhi tugas mata kuliah Pemrograman Web-2 yang diampu oleh bapak Prih Diantoro Abda'u S.Kom.,M.Kom. 
Repositori ini berisi Materi, Modul dan Jobsheet Object Oriented Programming OOP. Dengan dibuat nya repositori ini, saya berharap dapat menunjang nilai saya pada matakuliah Pemrograman Web-2.

 
 ## Author 
[@Aulia Zuifani](https://auliazuifani.github.io/auliazuifani/)


# Apa itu OOP ?
![image](https://github.com/user-attachments/assets/54c22846-1715-428e-bf0e-c0f8b698868a)

### OOP (Object-Oriented Programming) adalah suatu paradigma pemrograman yang menggunakan konsep "objek" dan "kelas" untuk merancang dan mengembangkan perangkat lunak. OOP adalah salah satu pendekatan yang populer dalam pemrograman karena memberikan cara yang terstruktur untuk mengatur kode, membuatnya lebih mudah dipahami, dikelola, dan diperluas.
### Sejarah OOP
Pendiri pertama konsep pemrograman berorientasi objek (OOP) adalah Johan Dahl dan Kristen Nygaard, dua ilmuwan komputer dari Norwegia. Mereka mengembangkan bahasa pemrograman Simula di Pusat Komputasi Norwegia pada tahun 1960-an, yang dikenal sebagai bahasa pemrograman pertama yang mengimplementasikan konsep dasar OOP seperti kelas(class) dan objek(object). OOP telah berkembang dari konsep dasar menjadi paradigma utama dalam pengembangan perangkat lunak modern, tetap relevan dengan berbagai bahasa dan framework.
Berikut ini adalah perkembangan OOP secara singkat :
- 1960-an - Simula (class dan object)
- 1970-an - Smalltalk
- 1980-an - C++ dan Object-Oriented Extensions: C++
- 1990-an - Java dan Popularitas OOP: Java
- 2000-an - Modernisasi dan Hybrid Approaches
- Sekarang - OOP dan Paradigma Lain

### Tujuan OOP
OOP ini diciptakan bukan tanpa adanya tujuan dari penggunaan nya, tujuan dari Object-Oriented Programming (OOP) adalah untuk meningkatkan cara pengembangan perangkat lunak agar lebih terstruktur, mudah dikelola, dan scalable. Adapula beberapa tujuan lain dalam penggunaan OOP :
- Modularitas-> Membuat kode lebih terorganisir dan mudah dikelola dengan membaginya ke dalam kelas dan objek.
- Reusabilitas-> Memungkinkan penggunaan kembali kode melalui pewarisan untuk mengurangi duplikasi dan mempercepat pengembangan.
- Pemeliharaan yang Mudah-> Memudahkan perawatan dan pembaruan kode karena struktur yang jelas dan enkapsulasi.
- Fleksibilitas dan Skalabilitas-> Memungkinkan sistem yang mudah diperluas dan disesuaikan melalui polimorfisme.
- Mengurangi Kompleksitas-> Menggunakan abstraksi untuk fokus pada fitur penting, mengabaikan detail yang rumit.
- Keamanan Data-> Melindungi data dari akses tidak sah melalui enkapsulasi.
- Desain Berbasis Komponen-> Mendukung pembuatan komponen yang dapat digunakan kembali dalam aplikasi yang lebih besar.

### Konsep dasar OOP
Konsep dasar pemrograman berorientasi objek (OOP) adalah prinsip yang digunakan untuk merancang dan mengembangkan perangkat lunak menggunakan objek dan kelas. Di bawah ini adalah penjelasan singkat tentang konsep dasar OOP:
- Kelas(class)-> adalah cetak biru atau template untuk membuat objek. Kelas mendefinisikan struktur dan perilaku yang dimiliki oleh objek. Di dalam kelas, terdapat atribut (data/properti) dan metode (fungsi/perilaku) yang menentukan karakteristik dan kemampuan objek.
- Objek(object)->adalah instance(perwujudan dari sebuah kelas. Objek mewakili entitas nyata yang memiliki data (atribut) dan perilaku (metode). Setiap objek memiliki status yang ditentukan oleh atributnya dan dapat berinteraksi dengan objek lain melalui metode.
- Enkapsulasi(encapsulation)-> adalah prinsip OOP yang menyembunyikan data dalam suatu objek dan hanya membiarkan akses melalui metode atau fungsi yang telah ditentukan. Ini membantu menjaga data tetap aman dan terstruktur, serta mencegah akses atau manipulasi yang tidak diinginkan.
- Pewarisan(Inheritance)-> adalah prinsip yang memungkinkan sebuah kelas (kelas turunan) untuk mewarisi atribut dan metode dari kelas lain (kelas induk). Ini memungkinkan penggunaan kembali kode, mengurangi redundansi, dan menciptakan hierarki kelas yang lebih baik.
- Polimorfisme(polymorphism)-> adalah prinsip OOP yang memungkinkan metode yang sama untuk berperilaku berbeda tergantung pada objek yang memanggilnya. Ini memberikan fleksibilitas dalam penggunaan dan penerapan metode, memungkinkan penggunaan antarmuka yang sama untuk objek yang berbeda.
- Abstraksi(abstraction)-> adalah proses menyederhanakan kompleksitas dengan hanya menampilkan fitur penting dari suatu objek, sementara detail yang tidak perlu disembunyikan. Abstraksi membantu pengembang fokus pada aspek-aspek penting dari sistem yang sedang dibangun.

### Kode OOP

### Class (kelas)
~~~ php
class mahasiswa {
~~~
Class dalam pemrograman berorientasi object OOP digunakan untuk mendefinisikan objek. Class ini juga digunakan untuk mendefinisikan karakteristik atribut(variabel) dan metode(fungsi) yang akan dimiliki oleh objek tersebut.
### Object (objek)
~~~ php
$mahasiswa1 = new mahasiswa;
~~~
Object dalam pemrograman berorientasi objek OOP adalah sebuah variable yang merupakan instansiasi atau perwujudan dari sebuah class.
### Atribute (variabel)
~~~ php
$nama;
$nim;
$jurusan;
~~~
Atribute adalah variabel yang di definisikan dalam sebuah class dan digunakan untuk menyimpan data atau properti dari objek. Atribut mewakili karakteristik atau situasi dari class tersebut. 
### Metode akses (acces modifier)
~~~ php
public $nama;
private $nim;
protected $jurusan;
~~~
-	public : atribut yang ditandai dengan public dapat diakses dari mana saja, baik dari dalam class itu sendiri, dari class turunan, maupun dari luar class.
-	private : atribut yang ditandai dengan private hanya bisa diakses dari dalam class itu sendiri dan tidak dapat diakses dari luar class atau oleh class turunan. 
-	protected: atribut yang ditandai dengan protected dapat diakses dari dalam class itu sendiri dan oleh class turunannya, tetapi tidak bisa diakses dari luar class.
### Metode Construct
~~~ php
Public function __construct(): //konstrutor dengan akses modifier public, dan dipanggil jika objek diinstansi.
Public function tampilkanData(): //konstruktor dengan akses modifier public dapat di panggil dari luar class.
~~~
Metode dalam OOP digunakan untuk menentukan perilaku atau aksi yang dapat dilakukan oleh object dan bisa memanipulasi atau mengakses data pada objek tersebut.
### Metode Getter dan Setter
~~~ php
public function getName() {
	return $this->name;
}
~~~
Get adalah accessor metode yang digunakan untuk mengambil atau mengakses suatu nilai dari sebuah atribute private/protected.
~~~ php
Public function setName($name) {
	$this->name = $name;
}
~~~
Set adalah muttor metode yang digunakan untuk mengontrol, menetapkan atau mengubah nilai atribut private/protected.
### Metode aksesFitur() dan tampilkanData()
contoh aksesfitur() :
~~~ php
class dosen extends pengguna {
    public function aksesFitur() {// Membuat metode aksesFitur() untuk menampilkan fitur yang diakses oleh dosen
        echo "Akses Fitur Dosen:".$this->getNama()."<br>";// Menampilkan "Akses Fitur Dosen" dengan nama dosen yang diambil dari metode getNama()
    }
}

~~~
contoh tampilkanData()
~~~ php
//membuat metode tampilkanData() untuk menyimpan isi atribut
    public function tampilkanData() {
        return "Nama : $this->nama". "<br>". "Nim : $this->nim". "<br>". "Jurusan : $this->jurusan". "<hr>";
    }
~~~
Metode aksesFitur() dan tampilkanData adalah 2 metode yang memiliki fungsi sama. metode ini merupakan metode yang bertanggungjawab untuk menyimpan isi atribut yang akan diinputkan sehingga dalam proses menampilkan output nantinya akan jauh lebih mudah dengan hanya memanggil metode tersebut.
### Referensi ke Objek
~~~  php
$this->nama = $nama;
~~~
$this diatas digunakan untuk mereferensikan penetapan nilai atribut nama.
### Extends (mewarisi)
~~~ php
 class dosen extends pengguna {
	 private $mataKuliah; //atribut matakuliah hanya bisa diakses di class turunanya
~~~
Extends dalam OOP merupakan kata kunci yang digunakan untuk mewarisi fitur dari class lain(induk). Hasil dari extends ini yang biasanya disebut (class turunan).
### Parent ::
~~~ php 
parent:: __construct($nama);
~~~
Parent dalam OOP adalah keyword yang digunakan untuk merujuk pada class induk dari dalam sebuah class turunan. Parent ini terletak di dalam class turunan. 

### Return
~~~ php
return $nama;
~~~
Return adalah sebuah perintah yang digunakan  dalam fungsi atau metode untuk mengembalikan hasil dari fungsi atau metode tersebut.
### Metode update
~~~ php
//metode untuk mengupdate nilai jurusan yang sudah ada sebelumnya
    public function updateJurusan($new_jurusan) {
        return $this->jurusan = $new_jurusan;
    }
~~~
Metode update jurusan dalam contoh digunakan untuk menginputkan nilai baru ke dalam atribut jurusan sehingga nilai sebelumnya tergantikan oleh nilai baru tersebut.
### Instansiasi object
~~~ php
//instansiasi objek
$mahasiswa1 = new mahasiswa("Aulia Zuifani","230102030", "Komputer dan Bisnis");
~~~
Proses instansiasi objek adalah proses pembuatan objek baru yang mendapatkan struktur dan perilaku yang sama dengan kelas referensinya. Proses inisialiasi ini biasanya di tandai dengan (new) sebagai kode referensi terhadap sebuah kelas.
### Metode deskripsi()
~~~ php
//Metode atau function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwana $this->warna.";
    }
~~~
Metode ini sama dengan metode aksesfitur dan tampilkan dataa yang berfungsi menyimpan isi atribut yang akan diinputkan sehingga dalam proses menampilkan output nantinya akan jauh lebih mudah dengan hanya memanggil metode tersebut.
### Echo (Tampil)
~~~ php
Echo $mahasiswa->getNama(); 
~~~
Echo adalah sebuah perintah dalam php yang digunakan untuk menampilkan output ke layar.
### Override
Override adalah konsep dalam Object-Oriented Programming (OOP) yang memungkinkan sebuah kelas turunan (subclass) untuk menyediakan implementasi spesifik dari sebuah metode yang sudah didefinisikan di kelas induk (superclass). Override digunakan untuk memodifikasi atau mengganti perilaku metode yang diwarisi dari kelas induk sesuai dengan kebutuhan kelas turunan. dengan tujuan mengubah atau Memperluas Fungsionalitas















  





