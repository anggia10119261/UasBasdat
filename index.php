<?php 
    require_once('config.php');
    include_once('templates/header.php');
?>

    <div class="section">
        <div class="col-md">
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
                        <th scope="col">#</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">TELEPON</th>
                        <th scope="col">ID PENDIDIKAN</th>
                        <th scope="col">KODE GAJI</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <?php 
                        include 'config.php';
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT * FROM pegawai");
                        while ($d = mysqli_fetch_array($data)){
                    ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $d['nik_pegawai']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['tlp']; ?></td>
                        <td><?= $d['id_pendidikan']; ?></td>
                        <td><?= $d['gaji_kode']; ?></td>
                        <td>
                            <a href="delpegawai.php?id=<?= $d['nik_pegawai']?>" type="button" class="btn btn-danger" >Hapus</a>
                            <a href="formpegawai.php?id=<?= $d['nik_pegawai']?>" type="button" class="btn btn-light">Edit</a>
                        </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
                    <button type="button" class="btn btn-dark text-center tombolTambahData" data-toggle="modal" data-target="#formModal">
                            Tambah Data
                    </button>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Pegawai Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="inpegawai.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="nik_pegawai" name="nik_pegawai" placeholder="NIK">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="tlp" name="tlp" placeholder="No Telepon">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="id_pendidikan" name="id_pendidikan" placeholder="Id Pendidikan">
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="gaji_kode" id="gaji_kode" placeholder="Kode Gaji">
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
    include_once('templates/footer.php');
?>

