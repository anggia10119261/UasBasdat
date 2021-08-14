<?php 
    include '../config.php';

    $nik = $_POST['nik_pegawai'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];
    $id_pendidikan = $_POST['id_pendidikan'];
    $gaji_kode = $_POST['gaji_kode'];

    mysqli_query($conn, "INSERT INTO pegawai VALUES (' ','$nik','$nama','$alamat','$tlp','$id_pendidikan','$gaji_kode')");

    header("location:pegawai.php");
?>