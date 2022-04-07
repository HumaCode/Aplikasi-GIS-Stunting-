<?php
// include header 
include_once('../_header.php');


// query desa
    $sql_desa = mysqli_query($con, "SELECT * FROM tb_desa") or die(mysqli_error($con));


?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Balita</h3>
        </div>
        <div class="card-body">
            
            <form action="proses.php" method="post">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Balita</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Balita" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <select name="alamat" id="alamat" class="form-control" required>
                        <option value="">-- Piih --</option>
                        <?php if (mysqli_num_rows($sql_desa) > 0) { ?>
                            <?php $i = 1;
                                    while ($data = mysqli_fetch_array($sql_desa)) { ?>
                                    <option value="<?= $data['id_desa'] ?>"><?= $data['nama_desa'] ?></option>
                            <?php $i++; } ?>
                        <?php } ?>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" required>
                </div>
                <div class="mb-3">
                    <label for="tg_badan" class="form-label">Tinggi Badan</label>
                    <input type="number" class="form-control" name="tg_badan" id="tg_badan" min="0" placeholder="Tinggi Badan" required>
                </div>
                <div class="mb-3">
                    <label for="br_badan" class="form-label">Berat Badan</label>
                    <input type="number" class="form-control" name="br_badan" id="br_badan" min="0" placeholder="Berat Badan" required>
                </div>
                <div class="mb-3">
                    <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('data-balita') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- load footer -->
<?php include_once('../_footer.php'); ?>