<?php
// Membuat kelas abstrak Shape yang menjadi dasar untuk bentuk-bentuk lain
// Kelas ini hanya menentukan bahwa semua kelas turunannya harus memiliki fungsi area()
abstract class Shape {
    abstract public function area(); // Fungsi area bersifat abstrak, harus diimplementasikan oleh kelas turunannya
}

// Membuat kelas Rectangle (persegi panjang) yang mewarisi dari Shape
class Rectangle extends Shape {
    private $width;  // Deklarasi variabel private untuk menyimpan nilai lebar dan tinggi
    private $height;  

    // Konstruktor untuk menginisialisasi lebar dan tinggi persegi panjang saat objek dibuat
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Mengimplementasikan fungsi area() untuk menghitung luas persegi panjang
    // Luas dihitung dengan mengalikan lebar dan tinggi
    public function area() {
        return $this->width * $this->height;
    }
}

// Membuat kelas Circle (lingkaran) yang mewarisi dari Shape
class Circle extends Shape {
    private $radius;  // Deklarasi variabel private untuk menyimpan nilai jari-jari lingkaran

    // Konstruktor untuk menginisialisasi jari-jari lingkaran saat objek dibuat
    public function __construct($radius) {
        $this->radius = $radius;
    }

     // Mengimplementasikan fungsi area() untuk menghitung luas lingkaran
    // Luas lingkaran dihitung dengan rumus pi * r^2
    public function area() {
return pi() * pow($this->radius, 2); // Menggunakan fungsi pow() untuk menghitung kuadrat jari-jari
    }
}

$rectangle = new Rectangle(5, 10); // Membuat objek Rectangle dengan lebar 5 dan tinggi 10
echo "Area of Rectangle: " . $rectangle->area(); // Output: Area of Rectangle:50 

$circle = new Circle(7);
echo "Area of Circle: " . $circle->area(); // Output: Area of Circle:153.93880400259 
?>