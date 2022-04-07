<?php
// include header 
include_once('../_header.php');


    // query desa
    $sql_desa = mysqli_query($con, "SELECT * FROM tb_desa") or die(mysqli_error($con));
    
    // query kategori
    $sql_kat = mysqli_query($con, "SELECT * FROM tb_kategori") or die(mysqli_error($con));

    $id = @$_GET['id'];
    $sql_balita = mysqli_query($con, "SELECT * FROM tb_balita WHERE id_balita = '$id'") or die(mysqli_error($con));
    $dataBalita = mysqli_fetch_array($sql_balita);
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Edit Data Balita</h3>
        </div>
        <div class="card-body">
            
            <form action="proses.php" method="post">
            <input type="hidden" name="id" id="id" value="<?= $dataBalita['id_balita'] ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Balita</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $dataBalita['nama'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <select name="alamat" id="alamat" class="form-control" required>
                        <?php if (mysqli_num_rows($sql_desa) > 0) { ?>
                            <?php while ($data = mysqli_fetch_array($sql_desa)) { ?>
                                <?php if($data['id_desa'] == $dataBalita['id_desa']) { ?>
                                    <option value="<?= $data['id_desa'] ?>" selected><?= $data['nama_desa'] ?></option>
                                <?php }else{ ?>
                                    <option value="<?= $data['id_desa'] ?>"><?= $data['nama_desa'] ?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $dataBalita['tgl_lahir'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="stts" class="form-label">Status</label>
                    <select name="stts" id="stts" class="form-control" required>
                        <?php if (mysqli_num_rows($sql_kat) > 0) { ?>
                            <?php while ($data = mysqli_fetch_array($sql_kat)) { ?>
                                <?php if($data['id_kategori'] == $dataBalita['id_kategori']) { ?>
                                    <option value="<?= $data['id_kategori'] ?>" selected><?= $data['status_gizi'] ?></option>
                                <?php }else{ ?>
                                    <option value="<?= $data['id_kategori'] ?>"><?= $data['status_gizi'] ?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tg_badan" class="form-label">Tinggi Badan</label>
                    <input type="number" class="form-control" name="tg_badan" id="tg_badan" min="0" value="<?= $dataBalita['tg_badan'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="br_badan" class="form-label">Berat Badan</label>
                    <input type="number" class="form-control" name="br_badan" id="br_badan" min="0" value="<?= $dataBalita['br_badan'] ?>" required>
                </div>
                <div class="mb-3">
                    <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('data-balita') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- load footer -->
<?php include_once('../_footer.php'); ?>