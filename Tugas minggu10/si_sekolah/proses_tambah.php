<?php

$konek = mysqli_connect("localhost", "root", "", "sekolahan");

if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    $sql = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, jenis_kelamin, agama_siswa, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);
    

    if ($query) {
        header('Location: index.php?status=sukses');
        exit();
    } else {
        header('Location: index.php?status=gagal');
        exit();
    }
} else {
    die("Akses dilarang...");
}

?>