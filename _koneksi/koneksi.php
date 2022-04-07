<?php

// zona waktu menesuaikan di indonesia
date_default_timezone_set('Asia/Jakarta');

session_start();
require_once "conn.php";

$con = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

// membuat function base url
function base_url($url = null)
{
    $base_url = "http://localhost/gis_stunting_native_new";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url . "/";
    }
}

// function tanggal indo
function tgl_indo($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);

    return $tanggal . "/" . $bulan . "/" . $tahun;
}

function tambah_nol_didepan($value, $threshold = null)
{
    return sprintf("%0". $threshold . "s", $value);
}

function hitung_umur($tanggal_lahir) {
    list($year,$month,$day) = explode("-",$tanggal_lahir);
    $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff   = date("d") - $day;
    if ($month_diff < 0) $year_diff--;
        elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
    return $month_diff;

}

// function hitung_umur($tanggal_lahir) {
//     //tanggal lahir
//     $birthDt = new DateTime($tanggal_lahir);
//     //tanggal hari ini
//     $today = new DateTime('today');
//     //tahun
//     $y = $today->diff($birthDt)->y;
//     //bulan
//     $m = $today->diff($birthDt)->m;
//     //hari
//     $d = $today->diff($birthDt)->d;
//     if ($y < 2){
//         if ($y!=0){
//             $tahun = $y."tahun";
//         }else{
//             $tahun = "";
//         }

// }
// }