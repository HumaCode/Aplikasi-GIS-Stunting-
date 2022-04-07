<?php 
    // load header
    include_once('../_header.php');

    

    $sql_balita = mysqli_query($con, "SELECT tb_balita.*, tb_desa.nama_desa
                        FROM tb_balita,tb_desa
                        WHERE tb_balita.id_desa=tb_desa.id_desa
                        ORDER BY tb_balita.id_balita DESC") or die(mysqli_error($con));


?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Balita</h3>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= base_url('data-balita/tambah.php') ?>" class="btn btn-secondary btn-sm ">Tambah Data Balita</a>
            </div>
        </div>
        <div class="card-body">

            <table id="tabel-balita" class="table table-bordered table-responsive table-striped" style="width:100%">
                <thead class="text-center table-dark">
                    <tr>
                        <th width="15">No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                            while ($data = mysqli_fetch_array($sql_balita)) { ?>
                        <tr>
                            <td class="text-center"><?= $i ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td class="text-center"><?= $data['nama_desa'] ?></td>
                            <td class="text-center"><?= tgl_indo($data['tgl_lahir']) ?></td>
                            <td class="text-center">
                                <?php if($data['tg_badan'] == null)  { ?>
                                    Belum di ukur
                                <?php }else{  ?>
                                    <?= $data['tg_badan'] ?> Cm
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <?php if($data['br_badan'] == null)  { ?>
                                    Belum di ukur
                                <?php }else{  ?>
                                    <?= $data['br_badan'] ?> Kg
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <?php if($data['id_kategori'] == null) { ?>
                                    <span class="text-dark"><strong>Belum diperiksa</strong></span>
                                    <?php }else{ ?>
                                    
                                    <?php if($data['id_kategori'] == 1) { ?>
                                        <span class="badge bg-danger">Sangat Pendek</span>
                                    <?php }else if($data['id_kategori'] == 2) {  ?>
                                        <span class="badge bg-danger">Pendek</span>
                                    <?php }else if($data['id_kategori'] == 3) { ?>
                                        <span class="badge bg-success">Normal</span>
                                    <?php }else if($data['id_kategori'] == 4) { ?>
                                        <span class="badge bg-success">Tinggi</span>
                                    <?php } ?>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <?php if($data['id_kategori'] == null ) { ?>
                                    <a href="<?= base_url('data-balita/cek.php?id=' . $data['id_balita'] )  ?>" class="btn btn-sm btn-info mb-2">Periksa</a>
                                <?php }else{ ?>
                                <?php  }?>
                                <a href="<?= base_url('data-balita/edit.php?id=' . $data['id_balita'] )  ?>" class="btn btn-sm btn-success mb-2">Edit</a>
                                <a href="<?= base_url('data-balita/hapus.php?id=' . $data['id_balita'] ) ?>" class="btn btn-sm btn-danger mb-2 tombol-hapus">Hapus</a>
                            </td>
                        </tr>
                    <?php $i++; } ?>
                
                </tbody>
            </table>

        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        var table = $('#tabel-balita').DataTable( {
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