<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$jabatan = $_POST['jenis_jabatan'];
$nik = $_POST['NIK'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];
 
 
// update data ke database
mysqli_query($conn,"update jabatan set jenis_jabatan='$jabatan', nik='$nik', tgl_masuk='$tgl_masuk', tgl_keluar='$tgl_keluar' where id_jabatan='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:jabatan.php");
 
?>