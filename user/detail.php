<?php
// include header 
include_once('../_header.php'); 

    $id = @$_GET['id'];
    $sql_user = mysqli_query($con, "SELECT tb_user.*,tb_desa.nama_desa 
                                    FROM tb_user,tb_desa
                                    WHERE tb_user.id_user = tb_desa.id_desa
                                    AND id_user = '$id'") or die(mysqli_error($con));
    $dataUser = mysqli_fetch_array($sql_user);

    

    

?>



    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Detail User</h3>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">Nama <strong class="float-end"><?= $dataUser['nama_user'] ?></strong></li>
                    <li class="list-group-item">Username <strong class="float-end"><?= $dataUser['username'] ?></strong></li>
                    <li class="list-group-item">Role <strong class="float-end"><?= $dataUser['level'] ?></strong></li>
                    <?php if($dataUser['level'] == 'Petugas') { ?>
                        <li class="list-group-item">Puskesmas <strong class="float-end"><?= $dataUser['tmp_kerja'] ?></strong></li>
                    <?php }else if($dataUser['level'] == 'Kader') { ?>
                        <li class="list-group-item">Desa <strong class="float-end"><?= $dataUser['nama_desa'] ?></strong></li>
                    <?php } ?>
                    <li class="list-group-item">Jabatan <strong class="float-end"><?= $dataUser['jabatan'] ?></strong></li>
                </ul>
            </div>
            <div class="card-footer">
            

                <div class="d-grid gap-2">
                    <a href="<?= base_url('user/data.php') ?>" class="btn btn-danger btn">Kembali</a>
                </div>
            </div>
        </div>
    </div>



<!-- load footer -->
<?php include_once('../_footer.php'); ?>