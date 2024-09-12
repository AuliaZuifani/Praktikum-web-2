# Jobsheet 3: Penggunaan Class dan Objek OOP
Jobsheet 2 ini dibuat untuk menerapkan konsep dari class dan oop itu sendiri
## Instruksi Kerja
### 1. Pembuatan Class dan Object
#### Class dalam OOP digunakan untuk mendefinisikan objek, karakteristik atribut(variabel) dan metode(fungsi) yang akan dimiliki oleh objek tersebut.
#### Object dalam pemrograman berorientasi objek OOP adalah sebuah variable yang merupakan instansiasi atau perwujudan dari sebuah class.
A. Membuat class mahasiswa beserta atribut dan metodenya
~~~ php
/membuat class Mahasiswa
class mahasiswa {
    //menambahkan atribut nama, nim, jurusan
    //atribut ini digunakan untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
~~~
pada perintah tersebut, kita membuat class yang isinya terdapat atribut dengan simbol ($), dan metode nya adalah public.
B. pembuatan metode tampilData() di dalam class mahasiswa, untuk mendeklarasikan nilai yang akan diinputkan
~~~ php
 //membuat metode tampilkanData() untuk menampilkan data dalam class mahasiswa
    public function tampilkanData() {
        return "nama: $this->nama, nim: $this->nim, jurusan: $this->jurusan";
    }
~~~
C. Proses Instansiasi atau pembuatan objek baru
~~~ php
//proses instansiasi objek atau biasa kita sebut pembuatan objek baru
$mahasiswa1 = new mahasiswa("Fany", "230102030", "TI");
echo $mahasiswa1->tampilkanData();
~~~
Proses instansiasi ini membuat objek baru dengan nama $mahasiswa, dimana objek ini merupakan variabel untuk menampung data dari class mahasiswa yang disimbolkan dengan (new).
DOKUMENTASI PROGRAM:
  ![class_object](https://github.com/user-attachments/assets/b29d115c-3a95-4bbe-992a-19bf7df19270)
OUTPUT :
![Cuplikan layar 2024-09-12 080315](https://github.com/user-attachments/assets/2390ef84-cf86-4e6c-9721-41fd9829592f)


## Pengaplikasian Constructor
Metode Constructor ini adalah metode yang di gunakan untuk menganaliasi atribut.
~~~ php
 //perintah pengaplikasian constructornya
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
~~~
Proses pengaplikasian constructor ini ditandai dengan adanya penambahan metode construct pada class mahasiswa yang berfungsi untuk menganalisasi atau pemberian nilai awa pada masing-masing atributnya.
DOKUMENTASI PROGRAM:
![apk_construc](https://github.com/user-attachments/assets/f7a30b21-1964-42a5-b4f2-2b115ab39e54)

OUTPUT PROGRAM :
![Cuplikan layar 2024-09-12 080146](https://github.com/user-attachments/assets/bd8cf909-6327-4115-aebb-03ef49a072ac)


## Pembuatan Metode Tambahan
Langkah 1: 
~~~ php
//membuat metode update untuk mengapdet jurusan
    public function updateJurusan($newJurusan) {
        $this->jurusan = $newJurusan;
    }
~~~
Metode tambahan kali ini adalah update, dimana update disini berfungsi untuk mengupdate nilai yang ada pada atribut jurusan.
Langkah 2:
~~~ php
//perintah menampilkan hasil update nya
$mahasiswa1->updateJurusan("TM");
~~~
Perintah diatas merupakan perintah untuk menampilkan hasil update.
DOKUMENTASI PROGRAM:
![metode_tambahan](https://github.com/user-attachments/assets/fc7c54da-99a3-4eeb-956c-bba9f87ad3e4)

OUTPUT :
![Cuplikan layar 2024-09-12 080544](https://github.com/user-attachments/assets/e6beebc8-8dbf-4e8e-88f7-d0bc8e7302f7)


## Penggunaan Atribut dan Metode OOP
A. Pembuatan metode getter setter
Proses ini ditandai dengan adanya metode Getter (mengambil/mengakses atribut) dan setter (menetapkan atribut).
~~~ php
//membuat metode getter untuk mengambil nilai atributnya
    public function getNim() {
        return $this->nim;
    }

    //membuat metode setter untuk menetapkan nilai atributnya
    public function setNim($nim) {
        $this->nim = $nim;
    }
~~~
B. Proses Intansiasi Objek
proses instansiasi objek ini adlah proses pembuatan objek baru dengan nama $mahasiswa1. dan dilanjutkan dengan pemanggilan metode setnama() dan penginputan perubahan nilai.
~~~ php
//perintah instansiasi objek atau pembuatan objek baru
$mahasiswa1 = new mahasiswa("Fany", "230102030","TI");
//perintah menampilkan hasil perubahan nim
$mahasiswa1->setNim("11223344");
~~~
C. Proses tampil
proses tampil ini disimbolkan dengan keyword echo, 
~~~ php
//perintah ini untuk menampilkan output dengan metode tampildata yang sudah dibuat sebelumnya
echo $mahasiswa1->tampilkanData();
~~~
DOKUMENTASI PROGRAM:
![atribut_metode](https://github.com/user-attachments/assets/bc82ec6e-0f30-4d26-8f56-c002d6d63473)

OUTPUT:
![Cuplikan layar 2024-09-12 080405](https://github.com/user-attachments/assets/89d440b3-4d25-40e7-b839-985d01525f36)

## Tugas Jobsheet 2
Berikut saya cantumkan instruksi dan juga potongan kode program nya.
1. Impelementasikan class dosen dengan atribut nama,nip,dan matakuliah.
Dalam Proses ini, yang pertama dilakukan adalah pembuatan class dosen dengan atribut yang sudah tertera pada instruksii. jika sudah lengkapi atribut menggunakan metode public agar atribut tersebut dapat diakses dimana saja. kemudian buat metode construct untuk menginisialisasi nilai awal dari masing-masing atributnya.
~~~ php
//membuat class dosen
class dosen {
    //atribut dan properti
    public $nama;
    public $nip;
    public $mataKuliah;

    //metode construct untuk menganalisasi atribut
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;//menempatkan parameter di setiap atribut
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
~~~
2. Pembuatan metode untuk menampilkan data yang ada pada class dosen
~~~ php
//membuat metode tampilkanDosen() untuk menampilkan data
    public function tampilkanDosen() {
        return "Nama : $this->nama" . "<br>". "Nip : $this->nip" . "<br>". "Mata Kuliah : $this->mataKuliah". "<hr>";
    }
~~~
3. Instansiasi object, pengaplikasian metode tampilkanDosen(), dan menampilkan outputnya.
~~~ php
//proses instansiasi obejek
$dosen1 = new dosen("Lutfi Syafirullah S.T., M.Kom", "3020104050", "DIP");//menginputkan data 
//proses menampilkan data dengan memanggil function tampilDosen()
echo $dosen1->tampilkanDosen();
~~~
pembuatan objek baru dengan nama $dosen1 sudah dilakukan, kemudian dilanjutkan dengan metode dan cara menampilkan outputnya.
DOKUMENTASI PROGRAM:
![tugas](https://github.com/user-attachments/assets/962ea42a-9e36-42e0-b17f-585738cf4378)

OUTPUT:
![Cuplikan layar 2024-09-12 080642](https://github.com/user-attachments/assets/81ebe917-75b3-40a1-b9a4-29e8db50d86c)

















