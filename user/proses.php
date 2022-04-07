<?php 

require_once "../_header.php";

// proses tambah
if (isset($_POST['tambah'])) {

    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $username = trim(mysqli_real_escape_string($con, $_POST['username']));
    $password = sha1(mysqli_real_escape_string($con, $_POST['password']));
    $level = trim(mysqli_real_escape_string($con, $_POST['status']));
    
    $jabatan = trim(mysqli_real_escape_string($con, $_POST['jabatan']));

    if($level == 'Petugas') {
        $tempat = '';
        $kerja = trim(mysqli_real_escape_string($con, $_POST['puskesmas']));
    }else if($level == 'Kader') {
        $tempat = trim(mysqli_real_escape_string($con, $_POST['desa']));
        $kerja = '';
    }

    mysqli_query($con, "INSERT INTO tb_user (id_user, nama_user, username, password, level, id_desa, tmp_kerja, jabatan ) VALUES (null, '$nama', '$username', '$password', '$level', '$tempat', '$kerja', '$jabatan')") or die(mysqli_error($con));

    echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Berhasil Ditambah',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location='" . base_url('user') .  "';
                }
            })
        </script>
    ";
} else if (isset($_POST['edit'])) {

    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $username = trim(mysqli_real_escape_string($con, $_POST['username']));
    $level = trim(mysqli_real_escape_string($con, $_POST['status']));
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $_POST['password'];

    $jabatan = trim(mysqli_real_escape_string($con, $_POST['jabatan']));

    if($level == 'Petugas') {
        $tempat = '';
        $kerja = trim(mysqli_real_escape_string($con, $_POST['puskesmas']));
    }else if($level == 'Kader') {
        $tempat = trim(mysqli_real_escape_string($con, $_POST['desa']));
        $kerja = '';
    }

    if(empty($password)) {
        $pass =  $_POST['passLama'];
    }else{
        $pass = sha1(mysqli_real_escape_string($con, $_POST['password']));
    }

    mysqli_query($con, "UPDATE tb_user SET 
        nama_user = '$nama', 
        username = '$username',
        password = '$pass',
        level = '$level',
        id_desa = '$tempat',
        tmp_kerja = '$kerja',
        jabatan = '$jabatan'
        WHERE id_user = '$id'
    ") or die(mysqli_error($con));

    echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Berhasil Diedit',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location='" . base_url('user') .  "';
                }
            })
        </script>
    ";
}