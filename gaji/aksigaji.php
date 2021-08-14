<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_gaji'];
$gaji_pokok = $_POST['gaji_pokok'];
$tunjangan= $_POST['tunjangan'];
$total_gaji= $_POST['total_gaji'];
 
 
// update data ke database
mysqli_query($conn,"update gaji set gaji_pokok='$gaji_pokok', tunjangan='$tunjangan', total_gaji='$total_gaji' where id_gaji='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:gaji.php");
 
?>