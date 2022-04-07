<?php 
    // load header
    include_once('../_header.php'); 

    $id_desa = @$_GET['id'];

    $data_desa = mysqli_query($con, "SELECT nama_desa 
                                    FROM tb_desa 
                                    WHERE id_desa = '$id_desa'") or die(mysqli_error($con));
    $dataDesa = mysqli_fetch_array($data_desa);

    $sql = mysqli_query($con, "SELECT *
FROM tb_kategori") or die(mysqli_error($con));

    // jmlh balita stunting / desa berdasarkan kategori sangat pendek ataupun pendek
    $stunting = mysqli_query($con, "SELECT COUNT(id_desa) AS total
                                FROM tb_balita 
                                WHERE id_desa = '$id_desa'
                                AND (id_kategori = 2
                                OR id_kategori = 1)
                                GROUP BY id_desa") or die(mysqli_error($con));
    $dstunting = mysqli_fetch_array($stunting);


    $balitaStunting = mysqli_query($con, "SELECT id_balita,nama,id_kategori
                                FROM tb_balita
                                WHERE id_desa = '$id_desa'
                                AND (id_kategori = 2
                                OR id_kategori = 1)") or die(mysqli_error($con));

?>



<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Stunting Desa <?= $dataDesa['nama_desa'] ?></h3>
        </div>

        <div class="p-3">
            <?php if(empty($dstunting)) { ?>
                <span class="text-success"><strong>Tidak Ada Kasus Stunting</strong></span>
            <?php } else { ?>
                <span class="text-danger"><strong><?= $dstunting['total'] ?> Balita Mengalami Stunting</strong></span>
            <?php } ?>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark text-center">
                    <tr>
                        <td width="20">No</td>
                        <td>Nama</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>

                    <?php if (mysqli_num_rows($balitaStunting) > 0) { ?>
                        <?php $i = 1;
                                while ($dst = mysqli_fetch_array($balitaStunting)) { ?>
                                <tr class="text-center">
                                    <td><?= $i ?></td>
                                    <td><?= $dst['nama'] ?></td>
                                    <td>
                                        <?php if($dst['id_kategori'] == 1) { ?>
                                            <span class="badge bg-danger">Sangat Pendek</span>
                                        <?php }else if($dst['id_kategori'] == 2) { ?>
                                            <span class="badge bg-danger">Pendek</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubah<?= $dst['id_balita'] ?>">Ubah Status</button>
                                    </td>
                                </tr>


                                <!-- Modal -->
                                <div class="modal fade" id="ubah<?= $dst['id_balita'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ubahLabel">Ubah Status</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                    
                                            <?php
                                                // query kategori
                                                $sql_kat = mysqli_query($con, "SELECT * FROM tb_kategori") or die(mysqli_error($con));


                                                

                                                $id_balita = $dst['id_balita'];

                                                $sql_blt = mysqli_query($con, "SELECT tb_balita.* ,tb_desa.nama_desa
                                                                                FROM tb_balita,tb_desa
                                                                                WHERE tb_balita.id_desa = tb_desa.id_desa
                                                                                AND id_balita = '$id_balita'") or die(mysqli_error($con));
                                                $stts = mysqli_fetch_array($sql_blt);
                                            ?>

                                            <ul>
                                                <li>Nama Balita : <strong class="float-end"><?= $stts['nama'] ?></strong></li>
                                                <li>Alamat : <strong class="float-end ">Desa <?= $stts['nama_desa'] ?> </strong></li>
                                                <li>tgl Lahir : <strong class="float-end "><?= tgl_indo($stts['tgl_lahir']) ?></strong></li>
                                                <li>Tinggi Badan : <strong class="float-end "><?= $stts['tg_badan'] ?> Cm</strong></li>
                                                <li>Berat Badan : <strong class="float-end "><?= $stts['br_badan'] ?> Kg</strong></li>
                                            </ul>
                                            
                                            
                                            <input type="hidden" name="id" value="<?= $stts['id_balita']; ?>">
                                                <div class="mb-3 mt-4">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select class="form-control" name="status" id="status">
                                                        <?php while ($kat = mysqli_fetch_array($sql_kat)) { ?>
                                                            <?php if($kat['id_kategori'] == $stts['id_kategori']) { ?>
                                                                <option value="<?= $kat['id_kategori'] ?>" selected><?= $kat['status_gizi'] ?></option>
                                                            <?php } else { ?>
                                                                <option value="<?= $kat['id_kategori'] ?>"><?= $kat['status_gizi'] ?></option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                        

                                    </div>
                                    <div class="modal-footer">
                                    

                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                                </div>

                        <?php $i++; } ?>
                    <?php }else{ ?>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-danger text-center" role="alert">
                                    <strong>Data tidak ditemukan</strong>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        
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
                                    
            <div class="d-grid gap-2">
                <a href="<?= base_url('pemetaan') ?>" class="btn btn-danger btn-block">Kembali</a>
            </div>
        </div>
    </div>
</div>


<?php 

if (isset($_POST['edit'])) {

    $id = $_POST['id'];
    $status = trim(mysqli_real_escape_string($con, $_POST['status']));

    mysqli_query($con, "UPDATE tb_balita SET 
        id_kategori = '$status'
        WHERE id_balita = '$id'
    ") or die(mysqli_error($con));

    mysqli_query($con, "UPDATE tb_kategori_balita SET 
        id_kategori = '$status'
        WHERE id_balita = '$id'
    ") or die(mysqli_error($con));

    echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Status Berhasil Diubah',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location='" . base_url() .  "';
                }
            })
        </script>
    ";
}


?>


<?php 
    // load footer 
    include_once('../_footer.php');
?>