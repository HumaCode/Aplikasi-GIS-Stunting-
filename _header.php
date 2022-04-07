<?php
// koneksi
require_once "_koneksi/koneksi.php";

if (!isset($_SESSION['id_user'])) {
    echo "
            <script>
                window.location='" . base_url('auth') .  "';
            </script>
        ";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIS Stunting</title>

    <link href='<?= base_url() ?>_assets/img/location.png' rel='shortcut icon'>

    <!-- Bootstrap core CSS -->

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





    <!-- datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">


    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>_assets/navbar/navbar-top-fixed.css" rel="stylesheet">

    <!-- script -->
    <script src="<?= base_url() ?>_assets/js/jquery-3.5.1.js"></script>
    <!-- datatable -->


    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!--<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>-->
    <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>

    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- chart -->
    <script src="<?= base_url() ?>_assets/chart/Chart.js"></script>


</head>

<body style="background-image: url('../_assets/img/bg.png');">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Pemetaan Stunting di Kecamatan Tirto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Pemetaan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>data-balita">Data Balita</a>
                    </li>

                    <?php if ($_SESSION['level'] == 'Petugas') { ?>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url() ?>user">Data User</a>
                        </li>
                    <?php } ?>



                </ul>

                <span class="navbar-text">
                    <a href="<?= base_url('auth/logout.php') ?>" class="btn btn-sm btn-danger">Logout</a>
                </span>

            </div>
        </div>
    </nav>