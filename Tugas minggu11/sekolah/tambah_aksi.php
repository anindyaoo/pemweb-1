<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
$koneksi= mysqli_connect("localhost", "root","", "sekolah");

// menginput data ke database
mysqli_query($koneksi, "insert into siswa values('','$nama','$nis','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>