<?php
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
    }

    //membuat metode tampilkanDosen() untuk menampilkan data
    public function tampilkanDosen() {
        return "Nama : $this->nama" . "<br>". "Nip : $this->nip" . "<br>". "Mata Kuliah : $this->mataKuliah". "<hr>";
    }
}
//proses instansiasi obejek
$dosen1 = new dosen("Lutfi Syafirullah S.T., M.Kom", "3020104050", "DIP");//menginputkan data 
//proses menampilkan data dengan memanggil function tampilDosen()
echo $dosen1->tampilkanDosen();
?>