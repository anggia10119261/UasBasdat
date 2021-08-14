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
                $data = mysqli_query($conn, "select * from gaji where id_gaji='$id'");
                while($d = mysqli_fetch_array($data)){
            ?>
            <form action="aksigaji.php" method="POST">
            <div class="card-body">
                <div class="form-floating mb-3">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id_gaji']?>">
                <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" value="<?= $d['gaji_pokok']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="tunjangan" name="tunjangan" value="<?= $d['tunjangan']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="total_gaji" name="total_gaji" value="<?= $d['total_gaji']?>">
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