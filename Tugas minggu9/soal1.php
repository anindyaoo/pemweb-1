<?php
// Fungsi untuk memeriksa apakah sebuah angka adalah bilangan prima
function isPrime($number) {
    if ($number <= 1) {
        return false; // Angka 1 dan yang lebih kecil bukan bilangan prima
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Jika ada pembagi, bukan bilangan prima
        }
    }
    
    return true; // Jika tidak ada pembagi, adalah bilangan prima
}

// Mencetak semua bilangan prima antara 1 hingga 50
echo "Bilangan prima antara 1 hingga 50 adalah:\n";
for ($num = 1; $num <= 50; $num++) {
    if (isPrime($num)) {
        echo $num . " ";
    }
}
?>