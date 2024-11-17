<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Hari dalam Seminggu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #343a40;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #007bff;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        input[type="number"]:focus {
            border-color: #0056b3;
            outline: none;
        }
        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }
        input[type="submit"]:hover {
            background: #0056b3;
            transform: scale(1.05);
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #d1ecf1;
            color: #0c5460;
            border: 1px solid #bee5eb;
            border-radius: 5px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Masukkan Angka Hari</h2>
    <form method="post">
        <input type="number" name="hari" min="1" max="7" placeholder="Masukkan angka (1-7)" required>
        <input type="submit" value="Tampilkan Hari">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hari = intval($_POST['hari']); // Mengambil input dari pengguna

        echo '<div class="result">';
        switch ($hari) {
            case 1:
                echo "Hari: Senin";
                break;
            case 2:
                echo "Hari: Selasa";
                break;
            case 3:
                echo "Hari: Rabu";
                break;
            case 4:
                echo "Hari: Kamis";
                break;
            case 5:
                echo "Hari: Jumat";
                break;
            case 6:
                echo "Hari: Sabtu";
                break;
            case 7:
                echo "Hari: Minggu";
                break;
            default:
                echo "Input tidak valid. Silakan masukkan angka antara 1 dan 7.";
                break;
        }
        echo '</div>';
    }
    ?>
</div>

</body>
</html>