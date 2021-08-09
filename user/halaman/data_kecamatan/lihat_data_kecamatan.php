<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIG | Buah-buahan Kab. Banyumas</title>

    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../../css/animate.css" rel="stylesheet">
    <link href="../../../css/plugins/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">

    <link href="../../../css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="../../../css/plugins/slick/slick.css" rel="stylesheet">
    <link href="../../../css/plugins/slick/slick-theme.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
    <?php include "../menu/menu_samping.php " ?>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <?php include "../menu/menu_atas.php" ?>
        </div>
        <br>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Kecamatan</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Data Kecamatan</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Detail Kecamatan</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-folder" ></i> Detail Data</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox ">
                                                    <div class="ibox-title">
                                                        <?php
                                                        $id_kecamatan = $_GET['id_kecamatan'];
                                                        include "../../../koneksi.php";
                                                        $sql_data_kecamatan = $koneksi->query("SELECT * FROM tab_kecamatan WHERE id_kecamatan = '$id_kecamatan'");
                                                        $data_kecamatan = $sql_data_kecamatan->fetch_assoc();
                                                        ?>
                                                        <h5>Deskripsi Kecamatan <?php echo $data_kecamatan['nama_kecamatan'] ?><small> Kab. Banyumas</small></h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-chevron-up"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="slick_demo_1">
                                                                    <div>
                                                                        <div class="ibox-content">
                                                                            <div class="product-images">
                                                                                <?php
                                                                                $sql_gambar = $koneksi->query("SELECT * FROM tab_hasil_buah LEFT JOIN tab_buah ON tab_buah.id_buah=tab_hasil_buah.id_buah WHERE id_kecamatan = '$id_kecamatan'");
                                                                                while($gambar = $sql_gambar->fetch_assoc()){?>
                                                                                    <img align="center" style="width:100%;" src="../../../gambar/<?php echo $gambar['gambar'] ?>">
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <h2 class="font-bold m-b-xs">
                                                                    Deskripsi Kecamatan <?php echo $data_kecamatan['nama_kecamatan'] ?>
                                                                </h2>
                                                                <hr>
                                                                <h4>Deskripsi</h4>
                                                                <div class="text-muted">
                                                                    <?php
                                                                    if($data_kecamatan['deskripsi']==""){
                                                                        $desk = "Masukkan Deskripsi Kecamatan !!!!!"
                                                                    ?>
                                                                        <p> Deskripsi Masih Kosong !!! </p>
                                                                    <?php
                                                                    }else{
                                                                        $desk = $data_kecamatan['deskripsi'];
                                                                    ?>
                                                                        <p><?php echo $data_kecamatan['deskripsi']; ?></p>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox ">
                                                    <div class="ibox-title">
                                                        <h5>Tabel data hasil buah-buahan kecamatan <?php echo $data_kecamatan['nama_kecamatan'] ?> <small>Kab. Banyumas</small></h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-chevron-down"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content collapse">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                                <thead>
                                                                    <tr>
                                                                        <th style ="width:3%;">No</th>
                                                                        <th>Buah</th>
                                                                        <th>Jumlah (ton)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $no = 1;
                                                                    include "../../../koneksi.php";
                                                                    $sql_data_hasil_buah = $koneksi->query("SELECT * FROM tab_hasil_buah LEFT JOIN tab_buah ON tab_buah.id_buah=tab_hasil_buah.id_buah WHERE id_kecamatan ='$id_kecamatan' ORDER BY nama_buah ASC");
                                                                    while($data_hasil_buah = $sql_data_hasil_buah->fetch_assoc()){
                                                                        $id_hasil_buah = $data_hasil_buah['id_hasil_buah'];
                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $no++ ?></td>
                                                                            <td><?php echo $data_hasil_buah['nama_buah'] ?></td>
                                                                            <td><?php echo number_format($data_hasil_buah['jumlah']) ?> Ton</td>
                                                                        </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Buah</th>
                                                                        <th>Jumlah (ton)</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox ">
                                                    <div class="ibox-title">
                                                        <h5>Diagram hasil buah-buahan kecamatan <?php echo $data_kecamatan['nama_kecamatan'] ?> <small>Kab. Banyumas</small></h5>
                                                        <div class="ibox-tools">
                                                            <a class="collapse-link">
                                                                <i class="fa fa-chevron-down"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content collapse">
                                                        <div class="table-responsive">
                                                            <canvas id="barChart" height="140"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Mainly scripts -->
    <script src="../../../js/jquery-3.1.1.min.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap.js"></script>
    <script src="../../../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../../js/inspinia.js"></script>
    <script src="../../../js/plugins/pace/pace.min.js"></script>
    <script src="../../../js/plugins/summernote/summernote-bs4.js"></script>


    <script src="../../../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../../../js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

    });
    </script>

    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 5,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

    <script src="../../../js/plugins/slick/slick.min.js"></script>

    <style>
        .slick_demo_2 .ibox-content {
            margin: 0 10px;
        }
    </style>

    <script>
        $(document).ready(function(){


            $('.slick_demo_1').slick({
                dots: true
            });
        });

    </script>

    <script>
        $(document).ready(function(){


            $('.product-images').slick({
                dots: true
            });

        });

    </script>

    <script src="../../../js/plugins/chartJs/Chart.min.js"></script>
    <?php
    $sql_diagram = $koneksi->query("SELECT * FROM tab_hasil_buah LEFT JOIN tab_buah ON tab_buah.id_buah=tab_hasil_buah.id_buah WHERE id_kecamatan='$id_kecamatan'");
    while($data_diagram=$sql_diagram->fetch_assoc()){
        $nama_buah[] = $data_diagram['nama_buah'];
        $jumlah_buah[] = $data_diagram['jumlah'];
    }
    ?>
    <script>
        $(function () {

        var barData = {
            labels: [<?php foreach($nama_buah as $buah){ echo "'$buah',"; } ?>],
            datasets: [
                {
                    label: "Hasil Buah ",
                    backgroundColor: 'rgba(26,179,148,0.5)',
                    borderColor: "rgba(26,179,148,0.7)",
                    pointBackgroundColor: "rgba(26,179,148,1)",
                    pointBorderColor: "#fff",
                    data: [<?php foreach($jumlah_buah as $jml_buah){ echo "'$jml_buah',"; } ?>]
                }
            ]
        };

        var barOptions = {
            responsive: true
        };


        var ctx2 = document.getElementById("barChart").getContext("2d");
        new Chart(ctx2, {type: 'bar', data: barData, options:barOptions});

        });
    </script>


</body>

</html>
