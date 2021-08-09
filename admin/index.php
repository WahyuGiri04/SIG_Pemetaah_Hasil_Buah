<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Aplikasi SIG | Kab. Banyumas</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="ibox-content">
            <div class="row">

                <div class="col-md-6">
                    <h2 align = "center" class="font-bold">Welcome to Aplikasi SIG</h2>

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" height="250px" src="../gambar/banyumas.svg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Kab. Banyumas</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" height="250px" src="../gambar/pertanian.svg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Dinas Pertanian</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" height="250px" src="../gambar/bps.svg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Badan Pusat Statistik</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ibox-content">
                        <form class="m-t" role="form" method="post" action="cek_login.php">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <button type="submit" class="btn btn-primary block full-width m-b"><i class="fa fa-paper-plane" ></i>  Login</button>

                            <p class="text-muted text-center">
                                <small>Apakah anda ingin ke halaman User ?</small>
                            </p>
                            <a class="btn btn-sm btn-white btn-block" href="../user/"><i class="fa fa-sign-out" ></i> Menuju Halaman User</a>
                        </form>
                        <p class="m-t">
                            <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="../js/plugins/flot/jquery.flot.js"></script>
    <script src="../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="../js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="../js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="../js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="../js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../js/demo/sparkline-demo.js"></script>

    <!-- Toastr -->
    <script src="../js/plugins/toastr/toastr.min.js"></script>

</body>

</html>
