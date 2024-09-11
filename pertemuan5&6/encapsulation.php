<?php
// Membuat kelas BankAccount untuk mengelola rekening bank
class BankAccount {
    // Menyimpan saldo sebagai properti private agar tidak bisa diakses langsung dari luar
    private $balance;

    // Konstruktor untuk menginisialisasi saldo saat objek dibuat
    public function __construct($balance) { 
    $this->balance = $balance;// Mengatur nilai saldo awal sesuai parameter yang diberikan
    }

    // Fungsi untuk menambahkan uang ke saldo (deposit)
    public function deposit($amount) {
        if ($amount > 0) { // Mengecek apakah jumlah yang akan disetor lebih dari 0
            $this->balance += $amount;// Menambahkan jumlah yang disetor ke saldo yang ada
        }
    }

    // Fungsi untuk menarik uang dari saldo (withdraw)
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) { // Mengecek apakah jumlah yang ingin ditarik lebih dari 0 dan tidak melebihi saldo saat ini
            $this->balance -= $amount; // Mengurangi saldo dengan jumlah yang ditarik
        }
    }

    // Fungsi untuk mendapatkan nilai saldo saat ini
    public function getBalance() {
        return $this->balance;  // Mengembalikan saldo saat ini
    }
}

// Membuat objek baru dari kelas BankAccount dengan saldo awal 1000
$account = new BankAccount(1000);

$account->deposit(500); // Menyetor uang sebesar 500 ke rekening
$account->withdraw(200); // Menarik uang sebesar 200 dari rekening

// Menampilkan saldo saat ini
echo "Current Balance: " . $account->getBalance(); // Output: Current <Balance:1300
?>
       