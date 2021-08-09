<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aplikasi SIG | Kab. Banyumas</title>

    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../../css/animate.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <?php include "../menu/menu_samping.php" ; ?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <?php include "../menu/menu_atas.php" ; ?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Ubah Password</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeIn">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-key"></i> Ubah Password</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="fa fa-user"></i> Ubah Username</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <?php
                                        $id_pengguna = $_SESSION['id_pengguna']; 
                                        ?>
                                        <strong>Form Ubah Password</strong>
                                        <br><br>
                                        <div class="col-lg-12">
                                            <div class="ibox ">
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Ubah Password</h3>
                                                            <form method="post" action="../../aksi/aksi_ubah_password.php" role="form">
                                                                <input type="text" hidden name="id_pengguna" value="<?php echo $id_pengguna ?>" required placeholder="Masukkan Username Baru" class="form-control">
                                                                <div class="form-group"><label>Password Baru</label> <input type="password" name="pass_baru" required placeholder="Masukkan Password Baru" class="form-control"></div>
                                                                <div class="form-group"><label>Ulang Password Baru</label> <input type="password" name="pass_baru_ulang" required placeholder="Masukkan Ulang Password baru" class="form-control"></div>
                                                                <div class="form-group"><label>Password lama</label> <input type="password" name="pass_lama" required placeholder="Password Lama" class="form-control"></div>
                                                                <br>
                                                                <div>
                                                                    <button onclick="return confirm('Apakah anda yakin ?');" class="btn btn-primary float-right m-t-n-xs" type="submit"><i class="fa fa-edit"></i> <strong>Ubah Password</strong></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6"><h4>Ubah Password</h4>
                                                            <p>Ubah Password pengguna</p>
                                                            <p class="text-center">
                                                                <a href=""><i class="fa fa-key big-icon"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" id="tab-2" class="tab-pane">
                                    <div class="panel-body">
                                        <strong>Form Ubah Username</strong>
                                        <br><br>
                                        <div class="col-lg-12">
                                            <div class="ibox ">
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Ubah Password</h3>
                                                            <form role="form" action = "../../aksi/aksi_ubah_username.php" method="post">
                                                                <input type="text" hidden name="id_pengguna" value="<?php echo $id_pengguna ?>" required placeholder="Masukkan Username Baru" class="form-control">
                                                                <div class="form-group"><label>Username Baru</label> <input type="text" name="username_baru" required placeholder="Masukkan Username Baru" class="form-control"></div>
                                                                <div class="form-group"><label>Password</label> <input type="password" name="pass" required placeholder="Password" class="form-control"></div>
                                                                <br>
                                                                <div>
                                                                    <button class="btn btn-primary float-right m-t-n-xs" onclick="return confirm('Apakah anda yakin ?');" type="submit"><i class="fa fa-edit"></i> <strong>Ubah Username</strong></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6"><h4>Ubah Username</h4>
                                                            <p>Ubah Nama pengguna</p>
                                                            <p class="text-center">
                                                                <a href=""><i class="fa fa-user big-icon"></i></a>
                                                            </p>
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


</body>

</html>
