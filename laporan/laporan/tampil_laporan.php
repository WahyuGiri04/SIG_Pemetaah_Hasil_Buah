<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIG | Buah-buahan Kab. Banyumas</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../../css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <?php include "../menu/menu_samping.php" ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php include "../menu/menu_atas.php" ?>
            </div>
            <br>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <?php $tahun = $_POST['tahun']; ?>
                    <h2 align="center">Tabel Data Laporan Hasil Buah  Tahun <?php echo $tahun ?></h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Tabel data kecamatan</h5>
                                <p>Kab. Banyumas </p>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                                <a target="_blank" href="print.php?tahun=<?php echo $tahun ?>" class="btn btn-danger"><i class="fa fa-print"> </i> Cetak Data</a>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                            <tr>
                                                <th style ="width:3%;">No</th>
                                                <th>Nama Kecamatan</th>
                                                <?php
                                            
                                                include "../../koneksi.php";

                                                $sql_buah = $koneksi->query("SELECT * FROM tab_laporan_buah");
                                                while($data_buah = $sql_buah->fetch_assoc()){?>
                                                    <th><?php echo $data_buah['nama_buah'] ?></th>
                                                <?php
                                                }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql_data_kecamatan = $koneksi->query("SELECT * FROM tab_kecamatan ORDER BY nama_kecamatan ASC");
                                            while($data_kecamatan = $sql_data_kecamatan->fetch_assoc()){
                                                $id_kecamatan = $data_kecamatan['id_kecamatan'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $data_kecamatan['nama_kecamatan'] ?></td>
                                                    <?php 
                                                    $sql_buah = $koneksi->query("SELECT * FROM tab_laporan_buah");
                                                    while($data_buah = $sql_buah->fetch_assoc()){
                                                        $nama_buah = $data_buah['nama_buah'];
                                                        ?>
                                                        <td>
                                                            <?php
                                                            $sql_laporan = $koneksi->query("SELECT * FROM tab_laporan_hasil_buah WHERE nama_buah ='$nama_buah' AND tahun = '$tahun' AND id_kecamatan = '$id_kecamatan'");
                                                            $data_laporan = $sql_laporan->fetch_assoc();
                                                            $jumlah_laporan = $data_laporan['jumlah'];
                                                            if($jumlah_laporan==""){
                                                                echo " - ";
                                                            }else{
                                                                echo $jumlah_laporan." Ton";
                                                            }
                                                            ?>
                                                        </td>
                                                    <?php
                                                    }
                                                    ?>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="../../js/jquery-3.1.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../../js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../js/inspinia.js"></script>
    <script src="../../js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'}
                ]

            });

        });

    </script>

</body>

</html>
