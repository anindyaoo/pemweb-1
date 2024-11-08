<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penulisan Kode PHP</h2>
    <?php 
        echo "Hello, world";
    ?>
     
    <h2>Contoh list dg PHP</h2>
    <?php
        for ($i = 1; $i <= 20; $i++)
        {
            echo"<li>Nama mahasiswa ke-$i</i>";
        }
    ?>

    <h2>Variabel Integer</h2>
    <?php
        $a = 14;
        $b = 16;
        $c = $a + $b;
        echo $c; // 30

        $d=$a * $b;
        echo $d; // 224
    ?>

    <h2>Variabel Float</h2>
    <?php
        $i = 10.66;
        $j = 12.4;
        $k = $i + $j;
        echo $k; // 23.06

        $l=$i / $j;
        echo $l; // 0.85967741935474
    ?>

    <h2>Variabel String</h2>
    <?php
        $string1 = "Ini adalah string sederhana";
        $string2 = "Ini adalah string yang bisa memiliki beberapa baris";
        $string3 = 'Dia berkata : " I\'ll be back"';

        echo $string1; echo"<br>";
        echo $string2; echo"<br>";
        echo $string3; echo"<br>";
    ?>

    <h2>Boolean</h2>
    <?php
        $benar = true;
        $salah = false;

        echo "benar = $benar, salah = $salah";
    ?>

    <h3>Operator Matematika</h3>
    <?php
        $hasil1= -3;
        $hasil2= 3+5;
        $hasil3= 8-4.5;
        $hasil4= 2.5;
        $hasil5= 3+8/5-3;
        $hasil6= 10%4;

        echo $hasil1;var_dump($hasil1);
        echo "<br \>";
        echo $hasil2;var_dump($hasil2);
        echo "<br \>";
        echo $hasil3;var_dump($hasil3);
        echo "<br \>";
        echo $hasil4;var_dump($hasil4);
        echo "<br \>";
        echo $hasil5;var_dump($hasil5);
        echo "<br \>";
        echo $hasil6;var_dump($hasil6);
        echo "<br \>";
    ?>


    <hr>
    <h1>Tugas Operasi Aritmatika</h1>
    <?php
        $pemasukan = 50000000;
        $hutang_a = 16500000;
        $bunga_hutang_a = 5 / 100;
        $hutang_b = 9500000;
        $bunga_hutang_b = 4.5 / 100;
        
        $total_bunga_hutang_a = $hutang_a * $bunga_hutang_a;
        $total_bunga_hutang_b = $hutang_b * $bunga_hutang_b;
        $total_bunga_hutang = $total_bunga_hutang_a + $total_bunga_hutang_b;
        
        $total_hutang = $hutang_a + $hutang_b + $total_bunga_hutang;
        
        $sisa_uang = $pemasukan - $total_hutang;
        
        echo "Sisa uang: Rp " . number_format($sisa_uang, 0, ',', '.') . "<br>";
        echo "Jumlah total bunga hutang: Rp " . number_format($total_bunga_hutang, 0, ',', '.') . "<br>";
        echo "Jumlah total hutang: Rp " . number_format($total_hutang, 0, ',', '.') . "<br>";
        
    ?>
</body>
</html>