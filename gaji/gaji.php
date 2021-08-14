<?php 
    require_once('../config.php');
    include_once('../templates/header.php');
?>

    <div class="section">
        <div class="fx-auto col-md">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $config['baseurl'];?>/pegawai/pegawai.php">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $config['baseurl'];?>/jabatan/jabatan.php">Jabatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $config['baseurl'];?>/gaji/gaji.php">Gaji</a>
                    </li>
                    </ul>
                </div>
                <div class="card-body">
                <table class="table table-dark">
                    <thead>
                        <tr>
                        <th scope="col">GAJI POKOK</th>
                        <th scope="col">TUNJANGAN</th>
                        <th scope="col">TOTAL GAJI</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <?php 
                        include '../config.php';
                        $data = mysqli_query($conn, "SELECT * FROM gaji");
                        while($d=mysqli_fetch_array($data)){
                    ?>
                    <tbody>
                        <tr>
                        <td><?= $d['gaji_pokok']; ?></td>
                        <td><?= $d['tunjangan']; ?></td>
                        <td><?= $d['total_gaji'] ?></td>
                        <td>
                            <a type="button" class="btn btn-light" href="formgaji.php?id=<?= $d['id_gaji'];?>">Edit</a>
                            <a type="button" class="btn btn-danger" href="delgaji.php?id=<?= $d['id_gaji']; ?>">Hapus</a>
                        </td>
                        </tr>
                    </tbody>
                        <?php } ?>
                </table>
                <div class="col-md mb-4">
                  <button type="button" class="btn btn-dark text-center tombolTambahData" data-toggle="modal" data-target="#formModal">
                        Tambah Data 
                  </button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Gaji Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="ingaji.php" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="Gaji Pokok">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="tunjangan" name="tunjangan" placeholder="Tunjangan">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="total_gaji" name="total_gaji" value="<?= $total_gaji['tunjangan'  +  'gaji_pokok'];?>">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-dark">Tambah Data</button>
        </form>

      </div>
    </div>
  </div>
</div>

<?php 
    include_once('../templates/footer.php');
?>

