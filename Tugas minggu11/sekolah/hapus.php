<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari url
$id = $_GET['id'];
$koneksi= mysqli_connect("localhost", "root","", "sekolah");

// menghapus data dari database
mysqli_query($koneksi,"delete from siswa where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>