<?php 
    require_once '../config.php';
    include_once '../templates/header.php';
?>

<div class="section">
    <div class="col-md-6">
        <div class="card mt-5">
            <div class="card-header">
                Form Edit
            </div>
            <?php 
                include '../config.php';

                $id = $_GET['id'];
                $data = mysqli_query($conn, "select * from pegawai where id='$id'");
                while($d = mysqli_fetch_array($data)){
            ?>
            <form action="aksipegawai.php" method="POST">
            <div class="card-body">
                <div class="form-floating mb-3">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']?>">
                <input type="text" class="form-control" id="nik" name="nik" value="<?= $d['nik_pegawai']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $d['alamat']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $d['tlp']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="id_pendidikan" name="id_pendidikan" value="<?= $d['id_pendidikan']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="gaji_kode" name="gaji_kode" value="<?= $d['gaji_kode']?>">
                </div>

                <input type="submit" class="btn btn-primary" name="" id="" value="Edit">
            </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
<?php
    include_once '../templates/footer.php';
?>