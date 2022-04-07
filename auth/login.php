<?php 

    // koneksi
    require_once "../_koneksi/koneksi.php";





if (isset($_SESSION['id_user'])) {
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
        <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>

        <div class="form-floating">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button>
        <span>Belum punya akun? <a href="<?= base_url('auth/daftar.php') ?>">Register!</a></span>
    </form>
</main>

        <!-- script -->
        <script src="<?= base_url() ?>_assets/js/jquery-3.5.1.js"></script>
        <!-- sweetalert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php
        // proses login
if (isset($_POST['login'])) {
    $user = trim(mysqli_real_escape_string($con, $_POST['username']));
    $pass = sha1(mysqli_real_escape_string($con, $_POST['password']));

    // echo $pass;
    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));

    if (mysqli_num_rows($sql_login)) {
        $d = mysqli_fetch_array($sql_login);

        // buat session
        // $_SESSION['user'] = [
        //     'id_user' => $d['id_user'],
        //     'nama_user' => $d['nama_user'],
        //     'username' => $d['username'],
        //     'level' => $d['level'],
        //     'id_desa' => $d['id_desa'],
        //     'jabatan' => $d['jabatan']
        // ];

        $_SESSION['id_user'] = $d['id_user'];
        $_SESSION['username'] = $d['username'];
        $_SESSION['nama_user'] = $d['nama_user'];
        $_SESSION['level'] = $d['level'];
        $_SESSION['id_desa'] = $d['id_desa'];
        $_SESSION['jabatan'] = $d['jabatan'];

        echo "
            <script>
                window.location='" . base_url() .  "';
            </script>
        ";
    } else {

        echo "
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Login',
                    text: 'Password atau Email Salah.!',
                })
            </script>
        ";
    }
}

} ?>