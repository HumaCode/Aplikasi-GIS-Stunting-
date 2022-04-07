<?php 

require_once "../_header.php";

// proses tambah
if (isset($_POST['tambah'])) {

    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $id_desa = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $tgl_lahir = trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
    $tg_badan = trim(mysqli_real_escape_string($con, $_POST['tg_badan']));
    $br_badan = trim(mysqli_real_escape_string($con, $_POST['br_badan']));

    // tb_balita
    mysqli_query($con, "INSERT INTO tb_balita (id_balita, nama, id_desa, tgl_lahir, tg_badan, br_badan) VALUES (null, '$nama', '$id_desa', '$tgl_lahir', '$tg_badan', '$br_badan')") or die(mysqli_error($con));


    echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Berhasil Ditambah',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location='" . base_url('data-balita') .  "';
                }
            })
        </script>
    ";
} else if (isset($_POST['edit'])) {

    $id = $_POST['id'];

    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $id_desa = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $tgl_lahir = trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
    $kat = trim(mysqli_real_escape_string($con, $_POST['stts']));
    $tg_badan = trim(mysqli_real_escape_string($con, $_POST['tg_badan']));
    $br_badan = trim(mysqli_real_escape_string($con, $_POST['br_badan']));


    mysqli_query($con, "UPDATE tb_balita SET 
        nama = '$nama', 
        id_desa = '$id_desa',
        tgl_lahir = '$tgl_lahir',
        id_kategori = '$kat',
        tg_badan = '$tg_badan',
        br_badan = '$br_badan'
        WHERE id_balita = '$id'
    ") or die(mysqli_error($con));


    mysqli_query($con, "UPDATE tb_kategori_balita SET 
            id_desa = '$id_desa',
            id_desa = '$id_desa',
            id_kategori = '$kat'
            WHERE id_balita = '$id'
        ") or die(mysqli_error($con));


    echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Berhasil Diedit',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location='" . base_url('data-balita') .  "';
                }
            })
        </script>
    ";
} else if(isset($_POST['cek'])) {
    $id = $_POST['id'];
    $idDesa = $_POST['id_desa'];
    $kat = trim(mysqli_real_escape_string($con, $_POST['kat']));

    // ubah kategori di tabel balita
    mysqli_query($con, "UPDATE tb_balita SET 
        id_kategori = '$kat'
        WHERE id_balita = '$id'
    ") or die(mysqli_error($con));

    // tambah data ke tabel kategori balita
    mysqli_query($con, "INSERT INTO tb_kategori_balita (id_kategori_balita, id_balita, id_desa, id_kategori) VALUES (null, '$id', '$idDesa', '$kat')") or die(mysqli_error($con));

    echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location='" . base_url('data-balita') .  "';
                }
            })
        </script>
    ";
}