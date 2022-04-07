<?php
// include header 
include_once('../_header.php');

$sql_kat = mysqli_query($con, "SELECT *
                        FROM tb_kategori") or die(mysqli_error($con));

$sql = mysqli_query($con, "SELECT *
FROM tb_kategori") or die(mysqli_error($con));


    $id = @$_GET['id'];
    $sbb = mysqli_query($con, "SELECT tb_balita.*, tb_desa.nama_desa
                        FROM tb_balita,tb_desa
                        WHERE tb_balita.id_desa=tb_desa.id_desa
                        AND tb_balita.id_balita='$id'") or die(mysqli_error($con));
    $dataBalita = mysqli_fetch_array($sbb);



?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Cek Status Gizi</h3>
        </div>
        <div class="card-body">
            <table class="mb-3">
                <tr>
                    <td width="100">Nama</td>
                    <td>:</td>
                    <td><strong><?= $dataBalita['nama']  ?></strong></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><strong><?= $dataBalita['nama_desa']  ?></strong></td>
                </tr>
                <tr>
                    <td>Tgl Lahir</td>
                    <td>:</td>
                    <td><strong><?= tgl_indo($dataBalita['tgl_lahir'])  ?></strong></td>
                </tr>
                <tr>
                    <td>Tinggi Badan</td>
                    <td>:</td>
                    <td><strong><?= $dataBalita['tg_badan']  ?> Cm</strong></td>
                </tr>
                <tr>
                    <td>Berat BAdan</td>
                    <td>:</td>
                    <td><strong><?= $dataBalita['br_badan']  ?> Kg</strong></td>
                </tr>
            </table>
            <form action="proses.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $dataBalita['id_balita'] ?>">
                    <input type="hidden" name="id_desa" id="id_desa" value="<?= $dataBalita['id_desa'] ?>">
                    <div class="mb-3">
                        
                        <label for="kat" class="form-label">Kategori</label>
                        <select name="kat" id="kat" class="form-control" required>
                            <option value="">-- Piih --</option>
                            <?php while($data = mysqli_fetch_array($sql_kat)) { ?>
                                <option value="<?= $data['id_kategori'] ?>"><?= $data['status_gizi'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="cek" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('data-balita') ?>" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
            </form>
                
        </div>
        <div class="card-footer">
            <h3>Kategori Gizi</h3>

            <table class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>Ket</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while($dk = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $dk['status_gizi']; ?></td>
                            <td><?= $dk['ket']; ?></td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- load footer -->
<?php include_once('../_footer.php'); ?>