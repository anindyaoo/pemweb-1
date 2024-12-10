<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
<style>
    /* Reset default margin dan padding */
body, h2, table {
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

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}
</style>
</head>
<body>
    <h2>SI Sekolah | Data Siswa</h2>
    <br/>
    <a href="tambah.php">+ Tambah Data</a>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $koneksi= mysqli_connect("localhost", "root","", "sekolah");
        $query = mysqli_query($koneksi,"select * from siswa");
        while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>