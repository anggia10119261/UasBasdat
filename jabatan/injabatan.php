<?php 
    include '../config.php';

    $jenis_jabatan = $_POST['jenis_jabatan'];
    $NIK = $_POST['NIK'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $tgl_keluar = $_POST['tgl_keluar'];


    mysqli_query($conn, "INSERT INTO jabatan VALUES('','$jenis_jabatan','$NIK','$tgl_masuk','$tgl_keluar')");

    header("location:jabatan.php");
?>