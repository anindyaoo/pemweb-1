<?php
    $konek = mysqli_connect("localhost","root", "", "sekolahan");
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <nav>
        <a href="tambah_siswa.php">[+] Tambah Baru</a>
    </nav>
    <br>

    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Siswa</td>
            <td>Alamat</td>
            <td>Agama</td>
            <td>Asal Sekolah</td>
            <td>Aksi</td>
        </tr>

    
        <?php
          $no = 1;
          $query = mysqli_query($konek,"SELECT * FROM data_siswa");
          while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data ['nama_siswa'];?></td>
            <td><?php echo $data ['alamat_siswa'];?></td>
            <td><?php echo $data ['agama_siswa'];?></td>
            <td><?php echo $data ['asal_sekolah'];?></td>
            <td>
                <a href="edit_siswa.php?id_siswa=<?php echo $data['id_siswa']; ?>">Edit</a>
                <a href="hapus_siswa.php?id_siswa=<?php echo $data['id_siswa']; ?>" 
                    onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus
                </a>
            </td>
        </tr>

        <?php
          }
        ?>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <button><a href="index.php">Kembali</a></button>
</body>
</html>