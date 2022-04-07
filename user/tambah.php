<?php
// include header 
include_once('../_header.php');

$desa = mysqli_query($con, "SELECT * FROM tb_desa");


?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data User</h3>
        </div>
        <div class="card-body">
            
            <form action="proses.php" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama User" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Petugas">Petugas</option>
                        <option value="Kader">Kader</option>
                    </select>
                </div>
                
                <div class="card p-4">
                    <div class="card-header">
                        Silahkan isi sesuai dengan status
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <div class="card">
                                <div class="card-header">
                                    Petugas Puskesmas
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <select name="puskesmas" id="puskesmas" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="Puskesmas Tirto 1">Puskesmas Tirto 1</option>
                                            <option value="Puskesmas Tirto 2">Puskesmas Tirto 2</option>
                                        </select>
                                        <small>* jika statusnya petugas kolom di isi dengan nama puskesmas</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    Kader
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <select name="desa" id="desa" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <?php while($ds = mysqli_fetch_array($desa)) { ?>
                                                <option value="<?= $ds['id_desa'] ?>"><?= $ds['nama_desa'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <small>* jika statusnya Kader pilih desa asal</small> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="jabatan" required>
                </div>

                <div class="mb-3">
                    <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('user') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- load footer -->
<?php include_once('../_footer.php'); ?>