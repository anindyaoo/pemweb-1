<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        /* Reset default margin dan padding */
body, h2, h3, table {
    margin: 0;
    padding: 0;
}

/* Gaya untuk body */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    padding: 20px;
}

/* Gaya untuk judul */
h2 {
    text-align: center;
    color: #4CAF50;
}

h3 {
    color: #333;
}

/* Gaya untuk tautan */
a {
    text-decoration: none;
    color: #fff;
    background-color: #4CAF50;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

a:hover {
    background-color: #45a049;
}

/* Gaya untuk tabel */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

td {
    padding: 10px;
    text-align: left;
}

td input[type="text"],
td input[type="number"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

td input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

td input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    
    <h2>SI Sekolah | Tambah Data Siswa</h2>
    <br/>
    <a href="index.php">Halaman Utama</a>
    <br/>
    <br/>
    <h3>Tambah Data Siswa</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>