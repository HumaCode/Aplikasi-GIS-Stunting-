<?php 

    // koneksi
    require_once "../_koneksi/koneksi.php";





if (isset($_SESSION['user'])) {
    echo "
        <script>
            alert('Anda sudah login.!');
            window.location='" . base_url() .  "';
        </script>
    ";
} else {
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Login</title>

        <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/"> -->

        

        <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>_assets/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        
        <!-- Custom styles for this template -->
        <link href="<?= base_url() ?>_assets/login/signin.css" rel="stylesheet">
    </head>
<body class="text-center" style="background-image: url('../_assets/img/bg.png');">
    
<main class="form-signin">
    <form action="" method="post">
        <img class="mb-4" src="<?= base_url() ?>_assets/img/location.png" alt="" width="72" height="80">
        <h1 class="h3 mb-3 fw-normal">Halaman Register</h1>

        <div class="form-floating">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
            <label for="nama">Nama</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <select name="status" id="status" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Petugas">Petugas</option>
                <option value="Kader">Kader</option>
            </select>
            <label for="username">Status</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password2" id="password2" placeholder="Ulangi Password" required>
            <label for="password2">Ulangi Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="daftar">Register</button>
        <span>Sudah punya akun? <a href="<?= base_url('auth') ?>">Login!</a></span>
    </form>
</main>

        <!-- script -->
        <script src="<?= base_url() ?>_assets/js/jquery-3.5.1.js"></script>
        <!-- sweetalert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php
        // proses 
if (isset($_POST['daftar'])) {
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $user = trim(mysqli_real_escape_string($con, $_POST['username']));
    $level = trim(mysqli_real_escape_string($con, $_POST['status']));
    $pass = trim(mysqli_real_escape_string($con, $_POST['password']));
    $pass2 = trim(mysqli_real_escape_string($con, $_POST['password2']));

    if($pass == $pass2) {
        $pass = sha1(mysqli_real_escape_string($con, $_POST['password']));

        mysqli_query($con, "INSERT INTO tb_user (id_user, nama_user, username, password, level ) VALUES (null, '$nama', '$user', '$pass', '$level')") or die(mysqli_error($con));
    
        echo "
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Akun berhasil dibuat',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='" . base_url('auth') .  "';
                    }
                })
            </script>
        ";
    }else{
        echo "
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Daftar',
                    text: 'Password atau tidak sama.!',
                })
            </script>
        ";
    }
}

} ?>