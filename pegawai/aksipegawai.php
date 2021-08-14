<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$id_pendidikan = $_POST['id_pendidikan'];
$gaji_kode = $_POST['gaji_kode'];
 
 
// update data ke database
mysqli_query($conn,"update pegawai set nik_pegawai='$nik', nama='$nama', alamat='$alamat', tlp='$tlp', id_pendidikan='$id_pendidikan', gaji_kode='$gaji_kode' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:pegawai.php");
 
?>