<?php 
    include '../config.php';

    $gaji_pokok = $_POST['gaji_pokok'];
    $tunjangan = $_POST['tunjangan'];
    $total_gaji = $_POST['total_gaji'];

    mysqli_query($conn, "INSERT INTO gaji VALUES('','$gaji_pokok','$tunjangan','$total_gaji')");

    header("location:gaji.php");
?>