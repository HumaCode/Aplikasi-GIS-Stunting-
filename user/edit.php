<?php
// include header 
include_once('../_header.php');


    $id = @$_GET['id'];
    $sql_user = mysqli_query($con, "SELECT * FROM tb_user WHERE id_user = '$id'") or die(mysqli_error($con));
    $dataUser = mysqli_fetch_array($sql_user);

    $stts = ['Petugas', 'Kader'];
    $puskesmas = ['Puskemas Tirto 1', 'Puskesmas Tirto 2'];

    $desa = mysqli_query($con, "SELECT * FROM tb_desa") or die(mysqli_error($con));
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Edit Data User</h3>
        </div>
        <div class="card-body">
            
            <form action="proses.php" method="post">
                <input type="hidden" name="id" value="<?= $dataUser['id_user'] ?>">
                <input type="hidden" name="passLama" value="<?= $dataUser['password'] ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $dataUser['nama_user'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?= $dataUser['username'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <small>* Jika password tidak diubah boleh di kosongi</small>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <?php foreach($stts as $s) { ?>
                            <?php if($s == $dataUser['level']) { ?>
                                <option value="<?= $s ?>" selected><?= $s ?></option>
                            <?php }else{ ?>
                                <option value="<?= $s ?>"><?= $s ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="card p-4">
                    <div class="row">
                        <?php if($dataUser['level'] == 'Petugas') { ?>
                            <div class="col-lg mb-2">
                                <div class="card">
                                    <div class="card-header">
                                        Petugas Puskesmas
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <select name="puskesmas" id="puskesmas" class="form-control">
                                                <option value="">-- Pilih --</option>
                                                    <?php foreach($puskesmas as $pus) { ?>
                                                        <?php if($pus == $dataUser['tmp_kerja']) { ?>
                                                            <option value="<?= $pus ?>"selected><?= $pus ?></option>
                                                        <?php }else{ ?>
                                                            <option value="<?= $pus ?>"><?= $pus ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                            </select>
                                            <?php if($dataUser['tmp_kerja'] == null) { ?>
                                                <small class="text-danger">* pilih puskesmas</small>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }else if($dataUser['level'] == 'Kader'){ ?>
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-header">
                                        Kader
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <select name="desa" id="desa" class="form-control">
                                                <option value="">-- Pilih --</option>
                                                    <?php foreach($desa as $des) { ?>
                                                        <?php if($des['id_desa'] == $dataUser['id_desa']) { ?>
                                                            <option value="<?= $des['id_desa'] ?>"selected><?= $des['nama_desa'] ?></option>
                                                        <?php }else{ ?>
                                                            <option value="<?= $des['id_desa'] ?>"><?= $des['nama_desa'] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                            </select>
                                            <?php if($dataUser['id_desa'] == null) { ?>
                                                <small class="text-danger">* pilih desa</small>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $dataUser['jabatan'] ?>" required>
                    <?php if($_SESSION['level'] == 'Petugas') { ?>
                        <?php if($dataUser['tmp_kerja'] == null) { ?>
                            <small class="text-danger">* isikan jabatan anda</small>
                        <?php } ?>
                    <?php }else if($_SESSION['level'] == 'Kader'){ ?>
                        <?php if($dataUser['tmp_kerja'] == null) { ?>
                            <small class="text-danger">* isikan jabatan anda, misal Kader</small>
                        <?php } ?>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('user') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- load footer -->
<?php include_once('../_footer.php'); ?>