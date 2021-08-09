<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIG | Buah-buahan Kab. Banyumas</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../../css/plugins/toastr/toastr.min.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">

    <?php include "../menu/menu_samping.php"; ?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">

            <?php include "../menu/menu_atas.php" ?>

        </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Form Laporan per-Tahun Hasil Buah-buahan <small>Kab. Bnayumas</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <form action ="tampil_laporan.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Tahun Laporan</label>
                                            <div class="col-sm-10">
                                                <select class="form-control m-b" name="tahun">
                                                    <option value = "0"> Silahkan Pilih Tahun</option>
                                                    <?php
                                                    include "../../koneksi.php";
                                                    $sql_tahun = $koneksi->query("SELECT * FROM tab_laporan_hasil_buah GROUP BY tahun");
                                                    while($tahun = $sql_tahun->fetch_assoc()){?>
                                                        <option value = "<?php echo $tahun['tahun'] ?>"><?php echo $tahun['tahun'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button class="btn btn-primary" type="submit">Cek Data Laporan <i class="fa fa-folder"></i></button>
                                            </div>
                                        </div>
                                    </form>
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

    <!-- Flot -->
    <script src="../../js/plugins/flot/jquery.flot.js"></script>
    <script src="../../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../../js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../../js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../../js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="../../js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="../../js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../../js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../js/inspinia.js"></script>
    <script src="../../js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../../js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="../../js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="../../js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="../../js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../../js/demo/sparkline-demo.js"></script>

    <!-- Toastr -->
    <script src="../../js/plugins/toastr/toastr.min.js"></script>

    
</body>
</html>
