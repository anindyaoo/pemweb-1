<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #0F4D49;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Masukkan Skor Anda</h1>
        <form method="post" action="">
            <label for="skor">Skor: </label>
            <input type="number" id="skor" name="skor" required>
            <input type="submit" value="Kirim">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mendapatkan nilai dari input pengguna
            $skor = $_POST['skor'];

            // Memeriksa kategori nilai
            echo '<div class="result">';
            if ($skor >= 85) {
                echo "<p>Kategori: <strong>Sangat Baik</strong></p>";
            } elseif ($skor >= 70) {
                echo "<p>Kategori: <strong>Baik</strong></p>";
            } elseif ($skor >= 55) {
                echo "<p>Kategori: <strong>Cukup</strong></p>";
            } else {
                echo "<p>Kategori: <strong>Kurang</strong></p>";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
