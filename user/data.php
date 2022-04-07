<?php 
    // load header
    include_once('../_header.php');

    // query user
    $sql_user = mysqli_query($con, "SELECT * FROM tb_user ORDER BY id_user DESC") or die(mysqli_error($con));
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data User</h3>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= base_url('user/tambah.php') ?>" class="btn btn-secondary btn-sm ">Tambah Data User</a>
            </div>
        </div>
        <div class="card-body">

            <table id="tabel-user" class="table table-bordered table-responsive table-striped" style="width:100%">
                <thead class="text-center table-dark">
                    <tr>
                        <th width="15">No</th>
                        <th>Nama</th>
                        <th>username</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (mysqli_num_rows($sql_user) > 0) { ?>
                    <?php $i = 1;
                            while ($data = mysqli_fetch_array($sql_user)) { ?>
                        <tr>
                            <td class="text-center"><?= $i ?></td>
                            <td><?= $data['nama_user'] ?></td>
                            <td class="text-center"><?= $data['username'] ?></td>
                            <td class="text-center">
                                <?php if($data['level'] == 'Petugas') { ?>
                                    <span class="badge bg-info text-dark">Petugas</span>
                                <?php }else{ ?>
                                    <span class="badge bg-dark text-white">Kader</span>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('user/detail.php?id=') . $data['id_user'] ?>" class="btn btn-sm btn-info mb-2">Detail</a>
                                <a href="<?= base_url('user/edit.php?id=') . $data['id_user'] ?>" class="btn btn-sm btn-success mb-2">Edit</a>
                                <a href="<?= base_url('user/hapus.php?id=') . $data['id_user'] ?>" class="btn btn-sm btn-danger mb-2 tombol-hapus">Hapus</a>
                            </td>
                        </tr>
                    <?php $i++; } ?>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        var table = $('#tabel-user').DataTable( {
            responsive: true
        } );

        new $.fn.dataTable.FixedHeader( table );
    } );


    // tombol hapus
    $('.tombol-hapus').on('click', function(e){
        e.preventDefault();

        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin.?',
            text: "Data ini akan dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    });
</script>

<?php 
    // load footer 
    include_once('../_footer.php');
?>