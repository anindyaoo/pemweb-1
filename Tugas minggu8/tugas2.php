<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Memastikan body memenuhi tinggi viewport */
        }

        .container {
            max-width: 400px;
            width: 100%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="number"]:focus {
            border-color: #2196F3;
            outline: none;
        }

        input[type="submit"] {
            background-color: #2196F3;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #1976D2;
            transform: scale(1.05);
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
            border-radius: 5px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Masukkan Nilai Anda</h2>
    <form method="POST" action="">
        <label for="nilai">Nilai:</label>
        <input type="number" name="nilai" id="nilai" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    function getGrade($nilai) {
        return $nilai >= 85 ? "A" :
               ($nilai >= 70 ? "B" :
               ($nilai >= 60 ? "C" :
               ($nilai >= 50 ? "D" : "E")));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = filter_input(INPUT_POST, 'nilai', FILTER_VALIDATE_INT);
        if ($nilai === false || $nilai < 0 || $nilai > 100) {
            echo "<div class='result'>Nilai tidak valid. Silakan masukkan nilai antara 0 dan 100.</div>";
        } else {
            $grade = getGrade($nilai);
            echo "<div class='result'>Anda mendapatkan nilai $grade.</div>";
        }
    }
    ?>
</div>

</body>
</html>