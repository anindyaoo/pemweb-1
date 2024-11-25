<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF dalam PHP</title>
</head>
<body>
    <h1>Pengecek Nilai</h1>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai Anda:</label>
        <input type="number" name="nilai" id="nilai" required>
        <button type="submit">Cek Nilai</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];

        if ($nilai >= 75 && $nilai <= 100) {
            echo "<p>Selamat! Nilai Anda baik.</p>";
        }
    }
    ?>
</body>