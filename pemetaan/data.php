<?php 
    // load header
    include_once('../_header.php');

    

    // mengambil total data balita kec tirto
    $data_balita= mysqli_query($con, "SELECT * FROM tb_balita");
    // menghitung total data balita kec tirto
    $jumlah_balita = mysqli_num_rows($data_balita);

    // mengambil total balita stunting kec tirto
    $data_balita_stunting= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung total balita stunting kec tirto
    $jumlah_balita_stunting = mysqli_num_rows($data_balita_stunting);


    // mengambil total balita normal kec tirto
    $data_balita_normal= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung total balita normal kec tirto
    $jumlah_balita_normal = mysqli_num_rows($data_balita_normal);


    // balita Normal
    // mengambil data balita desa curug
    $bc= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 1
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_curug = mysqli_num_rows($bc);

    // mengambil data balita desa dadirejo
    $bd= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 2
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_dadirejo = mysqli_num_rows($bd);

    // mengambil data balita desa jeruksari
    $bj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 3
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_jeruksari = mysqli_num_rows($bj);

    // mengambil data balita desa karanganyar
    $bk= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 4
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_karanganyar = mysqli_num_rows($bk);

    // mengambil data balita desa karangjompo
    $bkj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 5
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_karangjompo = mysqli_num_rows($bkj);

    // mengambil data balita desa mulyorejo
    $bm= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 6
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_mulyorejo = mysqli_num_rows($bm);

    // mengambil data balita desa ngalian
    $bn= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 7
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_ngalian = mysqli_num_rows($bn);

    // mengambil data balita desa pacar
    $bp= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 8
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_pacar = mysqli_num_rows($bp);

    // mengambil data balita desa pacar
    $bpa= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 9
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_pandanarum = mysqli_num_rows($bpa);

    // mengambil data balita desa pucung
    $pbc= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 10
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_pucung = mysqli_num_rows($pbc);

    // mengambil data balita desa samborejo
    $bsj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 11
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_samborejo = mysqli_num_rows($bsj);

    // mengambil data balita desa sidorejo
    $bsdr= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 12
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_sidorejo = mysqli_num_rows($bsdr);

    // mengambil data balita desa silirejo
    $bslo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 13
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_silirejo = mysqli_num_rows($bslo);

    // mengambil data balita desa tanjung
    $btj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 14
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_tanjung = mysqli_num_rows($btj);

    // mengambil data balita desa tegaldowo
    $tgdw= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 15
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_tegaldowo = mysqli_num_rows($tgdw);


    // mengambil data balita desa wuled
    $bwl= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 16
                                        AND (id_kategori = 3
                                        OR id_kategori = 4)");
    // menghitung data balita
    $normal_wuled = mysqli_num_rows($bwl);



    // balita stunting
    // mengambil data balita desa curug
    $balitaCurug= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 1
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $curug = mysqli_num_rows($balitaCurug);

    // mengambil data balita desa dadirejo
    $balitaDadirejo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 2
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $dadirejo = mysqli_num_rows($balitaDadirejo);

    // mengambil data balita desa jeruksari
    $balitaJeruksari= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 3
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $jeruksari = mysqli_num_rows($balitaJeruksari);

    // mengambil data balita desa karanganyar
    $balitaKaranganyar= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 4
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $karanganyar = mysqli_num_rows($balitaKaranganyar);

    // mengambil data balita desa karangjompo
    $balitaKarangjompo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 5
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $karangjompo = mysqli_num_rows($balitaKarangjompo);

    // mengambil data balita desa mulyorejo
    $balitaMulyorejo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 6
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $mulyorejo = mysqli_num_rows($balitaMulyorejo);

    // mengambil data balita desa ngalian
    $balitaNgalian= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 7
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $ngalian = mysqli_num_rows($balitaNgalian);

    // mengambil data balita desa pacar
    $balitaPacar= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 8
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $pacar = mysqli_num_rows($balitaPacar);

    // mengambil data balita desa pacar
    $balitaPandanarum= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 9
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $pandanarum = mysqli_num_rows($balitaPandanarum);

    // mengambil data balita desa pucung
    $balitaPucung= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 10
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $pucung = mysqli_num_rows($balitaPucung);

    // mengambil data balita desa samborejo
    $balitaSamborejo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 11
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $samborejo = mysqli_num_rows($balitaSamborejo);

    // mengambil data balita desa sidorejo
    $balitaSidorejo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 12
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $sidorejo = mysqli_num_rows($balitaSidorejo);

    // mengambil data balita desa silirejo
    $balitaSilirejo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 13
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $silirejo = mysqli_num_rows($balitaSilirejo);

    // mengambil data balita desa tanjung
    $balitaTanjung= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 14
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $tanjung = mysqli_num_rows($balitaTanjung);

    // mengambil data balita desa tegaldowo
    $balitaTegaldowo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 15
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $tegaldowo = mysqli_num_rows($balitaTegaldowo);


    // mengambil data balita desa wuled
    $balitaWuled= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 16
                                        AND (id_kategori = 1
                                        OR id_kategori = 2)");
    // menghitung data balita
    $wuled = mysqli_num_rows($balitaWuled);




    // menghitung jumlah balita total per desa
    // mengambil data balita desa curug
    $bltCurug= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 1");
    // menghitung data balita
    $blt_curug = mysqli_num_rows($bltCurug);

    // mengambil data balita desa dadirejo
    $bltddrj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 2");
    // menghitung data balita
    $blt_dadirejo = mysqli_num_rows($bltddrj);

    // mengambil data balita desa jeruksari
    $bltjrksr= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 3");
    // menghitung data balita
    $blt_jeruksari = mysqli_num_rows($bltjrksr);

    // mengambil data balita desa karanganyar
    $bltkrnganyr= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 4");
    // menghitung data balita
    $blt_karanganyar = mysqli_num_rows($bltkrnganyr);

    // mengambil data balita desa karangjompo
    $bltkrngjmpo= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 5");
    // menghitung data balita
    $blt_karangjompo = mysqli_num_rows($bltkrngjmpo);

    // mengambil data balita desa mulyorejo
    $bltmlyrj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 6");
    // menghitung data balita
    $blt_mulyorejo = mysqli_num_rows($bltmlyrj);

    // mengambil data balita desa ngalian
    $bltnglian= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 7");
    // menghitung data balita
    $blt_ngalian = mysqli_num_rows($bltnglian);

    // mengambil data balita desa pacar
    $bltpcr= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 8");
    // menghitung data balita
    $blt_pacar = mysqli_num_rows($bltpcr);

    // mengambil data balita desa pacar
    $bltpndnarm= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 9");
    // menghitung data balita
    $blt_pandanarum = mysqli_num_rows($bltpndnarm);

    // mengambil data balita desa pucung
    $blt_pcg= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 10");
    // menghitung data balita
    $blt_pucung = mysqli_num_rows($blt_pcg);

    // mengambil data balita desa samborejo
    $bltsmbrj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 11");
    // menghitung data balita
    $blt_samborejo = mysqli_num_rows($bltsmbrj);

    // mengambil data balita desa sidorejo
    $bltsdrj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 12");
    // menghitung data balita
    $blr_sidorejo = mysqli_num_rows($bltsdrj);

    // mengambil data balita desa silirejo
    $bltslrj= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 13");
    // menghitung data balita
    $blt_silirejo = mysqli_num_rows($bltslrj);

    // mengambil data balita desa tanjung
    $bltynjng= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 14");
    // menghitung data balita
    $blt_tanjung = mysqli_num_rows($bltynjng);

    // mengambil data balita desa tegaldowo
    $blttgldw= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 15");
    // menghitung data balita
    $blt_tegaldowo = mysqli_num_rows($blttgldw);


    // mengambil data balita desa wuled
    $bltwld= mysqli_query($con, "SELECT * 
                                        FROM tb_balita 
                                        WHERE id_desa = 16");
    // menghitung data balita
    $blt_wuled = mysqli_num_rows($bltwld);

    // $desaStt = mysqli_query($con, "SELECT tb_desa.*, tb_desa_balita.*
    //                                 FROM tb_desa
    //                                 JOIN tb_desa_balita ON tb_desa_balita.id_desa=tb_desa.id_desa");
    

    $id_user = $_SESSION['id_user'];
    $sql_user = mysqli_query($con, "SELECT * FROM  tb_user WHERE id_user='$id_user'");
    $usr = mysqli_fetch_array($sql_user);
?>

    <div class="bg-light p-5 rounded">
        <?php if($usr['id_desa'] == '') { ?>
            
            <marquee class="text-danger"><strong>Silahkan Lengkapi Profil Terlebih Dahulu</strong> </marquee>
            <div class="d-grid gap-2">
                <a href="../user/edit.php?id=<?= $_SESSION['id_user'] ?>" class="btn btn-danger">LENGKAPI PROFIL</a>
            </div>

        <?php } ?>


        <div id="map" class="mt-3" style="height: 500px;"></div>
        ket :<br>
        <span class="text-danger"><strong>Merah</strong></span> = Ada Kasus Stunting <br>
        <span class="text-success"><strong>Hijau</strong></span> = Tidak Ada
    </div>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                Keterangan
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header">
                            <?= $jumlah_balita ?> Data Balita Di Kecamatan Tirto
                            </div>
                            <div class="card-body">
                                    
                                        <canvas id="myChart"></canvas>

                                                    <?php 

                                                        $nama_desa = "";
                                                        $jumlah = null;
                                                        
                                                        $sql = "SELECT nama_desa,COUNT(*) as total,tb_desa.nama_desa
                                                            FROM tb_kategori_balita,tb_desa
                                                            WHERE tb_kategori_balita.id_desa=tb_desa.id_desa
                                                            GROUP by nama_desa";
                                                        $hasil = mysqli_query($con, $sql);

                                                        while ($data = mysqli_fetch_array($hasil)) {
                                                            //Mengambil nilai desa dari database
                                                            $desa = $data['nama_desa'];
                                                            $nama_desa .= "'$desa'" . ", ";
                                                            //Mengambil nilai total dari database
                                                            $jum = $data['total'];
                                                            $jumlah .= "$jum" . ", ";
                                                        }

                                                    ?>

                                </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- total seluruh balita -->
                    <div class="col-lg-4 mt-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Total Data Balita</h4>
                            </div>
                            <div class="card-body">
                                <small class="text-dark"><strong> <?= $jumlah_balita ?> Data Balita di Kecamatan Tirto</strong></small>

                                <ul class="list-group mt-3">
                                    <li class="list-group-item">Desa Curug 
                                        <span class="float-end">
                                            <?php if(!$blt_curug) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_curug ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Dadirejo 
                                        <span class="float-end">
                                            <?php if(!$blt_dadirejo) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_dadirejo ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Jeruksari 
                                        <span class="float-end">
                                            <?php if(!$blt_jeruksari) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_jeruksari ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Karanganyar 
                                        <span class="float-end">
                                            <?php if(!$blt_karanganyar) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_karanganyar ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Karangjompo 
                                        <span class="float-end">
                                            <?php if(!$blt_karangjompo) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_karangjompo ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Mulyorejo 
                                        <span class="float-end">
                                            <?php if(!$blt_mulyorejo) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_mulyorejo ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Ngalian 
                                        <span class="float-end">
                                            <?php if(!$blt_ngalian) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_ngalian ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Pacar 
                                        <span class="float-end">
                                            <?php if(!$blt_pacar) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_pacar ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Pandanarum 
                                        <span class="float-end">
                                            <?php if(!$blt_pandanarum) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_pandanarum ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Pucung 
                                        <span class="float-end">
                                            <?php if(!$blt_pucung) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_pucung ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Samborejo 
                                        <span class="float-end">
                                            <?php if(!$blt_samborejo) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_samborejo ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Silirejo 
                                        <span class="float-end">
                                            <?php if(!$blt_silirejo) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_silirejo ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Tanjung 
                                        <span class="float-end">
                                            <?php if(!$blt_tanjung) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_tanjung ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Tegaldowo 
                                        <span class="float-end">
                                            <?php if(!$blt_tegaldowo) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_tegaldowo ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item">Desa Wuled 
                                        <span class="float-end">
                                            <?php if(!$blt_wuled) { ?>
                                                    <span class="text-danger">Belum ada data</span>    
                                            <?php }else{ ?>
                                                    <?= $blt_wuled ?> Data Balita
                                            <?php } ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                
                    <!-- normal -->
                    <div class="col-lg-4 mt-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Balita Kategori Normal</h4>
                                </div>
                                <div class="card-body">
                                    <small class="text-success"><strong> <?= $jumlah_balita_normal ?> Balita di Kecamatan Tirto Dalam Kategori Normal</strong></small>

                                    <ul class="list-group mt-3">
                                        <li class="list-group-item">Desa Curug 
                                            <span class="float-end">
                                                <?php if(!$normal_curug) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_curug ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Dadirejo 
                                            <span class="float-end">
                                                <?php if(!$normal_dadirejo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_dadirejo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Jeruksari 
                                            <span class="float-end">
                                                <?php if(!$normal_jeruksari) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_jeruksari ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Karanganyar 
                                            <span class="float-end">
                                                <?php if(!$normal_karanganyar) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_karanganyar ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Karangjompo 
                                            <span class="float-end">
                                                <?php if(!$normal_karangjompo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_karangjompo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Mulyorejo 
                                            <span class="float-end">
                                                <?php if(!$normal_mulyorejo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_mulyorejo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Ngalian 
                                            <span class="float-end">
                                                <?php if(!$normal_ngalian) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_ngalian ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Pacar 
                                            <span class="float-end">
                                                <?php if(!$normal_pacar) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_pacar ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Pandanarum 
                                            <span class="float-end">
                                                <?php if(!$normal_pandanarum) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_pandanarum ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Pucung 
                                            <span class="float-end">
                                                <?php if(!$normal_pucung) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_pucung ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Samborejo 
                                            <span class="float-end">
                                                <?php if(!$normal_samborejo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_samborejo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Silirejo 
                                            <span class="float-end">
                                                <?php if(!$normal_silirejo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_silirejo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Tanjung 
                                            <span class="float-end">
                                                <?php if(!$normal_tanjung) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_tanjung ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Tegaldowo 
                                            <span class="float-end">
                                                <?php if(!$normal_tegaldowo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_tegaldowo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Wuled 
                                            <span class="float-end">
                                                <?php if(!$normal_wuled) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $normal_wuled ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <!-- stunting -->
                    <div class="col-lg-4 mt-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Balita Kategori Stunting</h4>
                                </div>
                                <div class="card-body">
                                    <small class="text-danger"><strong> <?= $jumlah_balita_stunting ?> Balita di Kecamatan Tirto Dalam Kategori Stunting</strong></small>

                                    <ul class="list-group mt-3">
                                        <li class="list-group-item">Desa Curug 
                                            <span class="float-end">
                                                <?php if(!$curug) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $curug ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Dadirejo 
                                            <span class="float-end">
                                                <?php if(!$dadirejo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $dadirejo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Jeruksari 
                                            <span class="float-end">
                                                <?php if(!$jeruksari) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $jeruksari ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Karanganyar 
                                            <span class="float-end">
                                                <?php if(!$karanganyar) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $karanganyar ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Karangjompo 
                                            <span class="float-end">
                                                <?php if(!$karangjompo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $karangjompo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Mulyorejo 
                                            <span class="float-end">
                                                <?php if(!$mulyorejo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $mulyorejo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Ngalian 
                                            <span class="float-end">
                                                <?php if(!$ngalian) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $ngalian ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Pacar 
                                            <span class="float-end">
                                                <?php if(!$pacar) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $pacar ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Pandanarum 
                                            <span class="float-end">
                                                <?php if(!$pandanarum) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $pandanarum ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Pucung 
                                            <span class="float-end">
                                                <?php if(!$pucung) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $pucung ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Samborejo 
                                            <span class="float-end">
                                                <?php if(!$samborejo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $samborejo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Silirejo 
                                            <span class="float-end">
                                                <?php if(!$silirejo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $silirejo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Tanjung 
                                            <span class="float-end">
                                                <?php if(!$tanjung) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $tanjung ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Tegaldowo 
                                            <span class="float-end">
                                                <?php if(!$tegaldowo) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $tegaldowo ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">Desa Wuled 
                                            <span class="float-end">
                                                <?php if(!$wuled) { ?>
                                                        <span class="text-danger">Belum ada data</span>    
                                                <?php }else{ ?>
                                                        <?= $wuled ?> Data Balita
                                                <?php } ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                                                
                </div>

                <div class="row">
                    
                </div>
                    
            </div>
        </div>
    </div>


<script>
                    var ctx = document.getElementById('myChart').getContext('2d');
						var chart = new Chart(ctx, {
							// The type of chart we want to create
							type: 'bar',
							// The data for our dataset
							data: {
								labels: [<?php echo $nama_desa; ?>],
								datasets: [{
									label: '',
									backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)', 'rgb(50, 168, 144)' , 'rgb(252, 186, 3)', 'rgb(110, 95, 46)', 'rgb(209, 104, 59)', 'rgb(34, 255, 0)', 'rgb(0, 0, 0)', 'rgb(17, 40, 191)', 'rgb(126, 7, 237)', 'rgb(247, 0, 231)', 'rgb(224, 20, 37)'],
									borderColor: ['rgb(255, 99, 132)'],
									data: [<?php echo $jumlah  ?>, 'Balita']
								}]
							},

							// Configuration options go here
							options: {
								scales: {
									yAxes: [{
										ticks: {
											beginAtZero: true
										}
									}]
								}
							}
						});



// script peta
        var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
	    });

        var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/satellite-v9'
        });


        var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/dark-v10'
        });

        var desa = L.layerGroup();
        var map = L.map('map', {
            center: [-6.900587, 109.637160],
            zoom: 12,
            layers: [peta1, desa]
        });

        var baseMaps = {
            "Grayscale": peta1,
            "Satellite": peta2,
            "Streets": peta3,
            "Dark": peta4
        };

        var overLayer = {
            "Desa" : desa, 
        }

        L.control.layers(baseMaps, overLayer).addTo(map);


<?php 
    $sql_curug = mysqli_query($con, "SELECT * FROM tb_desa 
                                        WHERE id_desa = 1");
    $crg = mysqli_fetch_array($sql_curug);

    $sql_dadirejo = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 2");
    $ddrj = mysqli_fetch_array($sql_dadirejo);

    $sql_jeruksari = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 3");
    $jrksr = mysqli_fetch_array($sql_jeruksari);

    $sql_karanganyar = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 4");
    $kranyar = mysqli_fetch_array($sql_karanganyar);

    $sql_karangjompo = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 5");
    $krjm = mysqli_fetch_array($sql_karangjompo);

    $sql_mulyorejo = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 6");
    $mulyo = mysqli_fetch_array($sql_mulyorejo);

    $sql_ngalian = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 7");
    $nga = mysqli_fetch_array($sql_ngalian);


    $sql_pacar = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 8");
    $pcr = mysqli_fetch_array($sql_pacar);

    $sql_pandanarum = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 9");
    $pandan = mysqli_fetch_array($sql_pandanarum);

    $sql_pucung = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 10");
    $pcng = mysqli_fetch_array($sql_pucung);

    $sql_samborejo = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 11");
    $smbrj = mysqli_fetch_array($sql_samborejo);

    $sql_sidorejo = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 12");
    $sdrj = mysqli_fetch_array($sql_sidorejo);

    $sql_silirejo = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 13");
    $slrj = mysqli_fetch_array($sql_silirejo);

    $sql_tanjung = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 14");
    $tnjng = mysqli_fetch_array($sql_tanjung);

    $sql_tegaldowo = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 15");
    $tgldw = mysqli_fetch_array($sql_tegaldowo);

    $sql_wuled = mysqli_query($con, "SELECT * FROM tb_desa
                                        WHERE id_desa = 16");
    $wld = mysqli_fetch_array($sql_wuled);
        
?>
        // desa curug
        L.geoJSON(<?= $crg['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$curug) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" <center>Desa <?= $crg['nama_desa'] ?></center>" +
                " <?php if(!$curug) { ?><?php }else{ ?> <center><?= $curug ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $crg['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa dadirejo
        L.geoJSON(<?= $ddrj['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$dadirejo) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $ddrj['nama_desa'] ?> <br>" +
                " <?php if(!$dadirejo) { ?><?php }else{ ?> <center><?= $dadirejo ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $ddrj['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa jeruksari
        L.geoJSON(<?= $jrksr['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$jeruksari) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $jrksr['nama_desa'] ?> <br>" +
                " <?php if(!$jeruksari) { ?><?php }else{ ?> <center><?= $jeruksari ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $jrksr['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");


        // desa karanganyar
        L.geoJSON(<?= $kranyar['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$karanganyar) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $kranyar['nama_desa'] ?> <br>" +
                " <?php if(!$karanganyar) { ?><?php }else{ ?> <center><?= $karanganyar ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $kranyar['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");


        // desa karangjompo
        L.geoJSON(<?= $krjm['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$karangjompo) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $krjm['nama_desa'] ?> <br>" +
                " <?php if(!$karangjompo) { ?><?php }else{ ?> <center><?= $karangjompo ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $krjm['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa mulyorejo
        L.geoJSON(<?= $mulyo['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$mulyorejo) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $mulyo['nama_desa'] ?> <br>" +
                " <?php if(!$mulyorejo) { ?><?php }else{ ?> <center><?= $mulyorejo ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $mulyo['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa ngalian
        L.geoJSON(<?= $nga['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$ngalian) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $nga['nama_desa'] ?> <br>" +
                " <?php if(!$ngalian) { ?><?php }else{ ?> <center><?= $ngalian ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $nga['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");


        // desa pacar
        L.geoJSON(<?= $pcr['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$pacar) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $pcr['nama_desa'] ?> <br>" +
                " <?php if(!$pacar) { ?><?php }else{ ?> <center><?= $pacar ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $pcr['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa pandanarum
        L.geoJSON(<?= $pandan['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$pandanarum) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $pandan['nama_desa'] ?> <br>" +
                " <?php if(!$pandanarum) { ?><?php }else{ ?> <center><?= $pandanarum ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $pandan['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa pucung
        L.geoJSON(<?= $pcng['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$pucung) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $pcng['nama_desa'] ?> <br>" +
                " <?php if(!$pucung) { ?><?php }else{ ?> <center><?= $pucung ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $pcng['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");


        // desa samborejo
        L.geoJSON(<?= $smbrj['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$samborejo) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $smbrj['nama_desa'] ?> <br>" +
                " <?php if(!$samborejo) { ?><?php }else{ ?> <center><?= $samborejo ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $smbrj['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa sidorejo
        L.geoJSON(<?= $sdrj['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$sidorejo) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $sdrj['nama_desa'] ?> <br>" +
                " <?php if(!$sidorejo) { ?><?php }else{ ?> <center><?= $sidorejo ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $sdrj['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa silirejo
        L.geoJSON(<?= $slrj['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$silirejo) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $slrj['nama_desa'] ?> <br>" +
                " <?php if(!$silirejo) { ?><?php }else{ ?> <center><?= $silirejo ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $slrj['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");


        // desa tanjung
        L.geoJSON(<?= $tnjng['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$tanjung) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $tnjng['nama_desa'] ?> <br>" +
                " <?php if(!$tanjung) { ?><?php }else{ ?> <center><?= $tanjung ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $tnjng['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");


        // desa tegaldowo
        L.geoJSON(<?= $tgldw['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$tegaldowo) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $tgldw['nama_desa'] ?> <br>" +
                " <?php if(!$tegaldowo) { ?><?php }else{ ?> <center><?= $tegaldowo ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $tgldw['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

        // desa wuled
        L.geoJSON(<?= $wld['geojson'] ?>, {
                    style : {
                        color : 'black',
                        fillColor : '<?php if(!$wuled) {echo 'green';}else{echo 'red';}  ?>'
                    }
                }).addTo(map).bindPopup(" Desa <?= $wld['nama_desa'] ?> <br>" +
                " <?php if(!$wuled) { ?><?php }else{ ?> <center><?= $wuled ?> Kasus Stunting</center>  <center><a href='detail.php?id=<?= $wld['id_desa'] ?>' class='badge bg-info text-decoration-none'>Lihat Detail</a></center> <?php } ?>");

    </script>


<?php 
    // load footer 
    include_once('../_footer.php');
?>

