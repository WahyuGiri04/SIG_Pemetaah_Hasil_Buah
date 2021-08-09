<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIG | Buah-buahan Kab. Banyumas</title>

    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../../css/animate.css" rel="stylesheet">
    <link href="../../../css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="../../../css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="../../../css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/plugins/codemirror/codemirror.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">
    <style>
        .color-scheme,
        .color-scale {
            margin: auto;
            padding: 0;
            list-style: none;
            overflow: hidden; 
        }

        .color-scheme li {
            width: 2rem;
            height: 2rem;
            float: left;
            position: relative;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <?php include "../menu/menu_samping.php" ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
            <?php include "../menu/menu_atas.php" ?>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Form Peta Tematik Hasil Buah-buahan <small>Kab. Bnayumas</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <form action ="tampil_peta_tematik.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group row"><label class="col-sm-2 col-form-label">Jenis buah</label>
                                            <div class="col-sm-10">
                                                <select class="form-control m-b" name="id_buah">
                                                <?php
                                                include "../../../koneksi.php";
                                                $sql_jenis_bauh = $koneksi->query("SELECT * FROM tab_buah ORDER BY nama_buah  ASC");
                                                while($jenis_bauh = $sql_jenis_bauh->fetch_assoc()){?>
                                                    <option value = "<?php echo $jenis_bauh['id_buah'] ?>"><?php echo $jenis_bauh['nama_buah'] ?></option>
                                                <?php
                                                }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button class="btn btn-primary" type="submit">Lihat Peta <i class="fa fa-map"></i></button>
                                            </div>
                                        </div>
                                    </form>
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

    <!-- Jasny -->
    <script src="../../../js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- DROPZONE -->
    <script src="../../../js/plugins/dropzone/dropzone.js"></script>

    <!-- CodeMirror -->
    <script src="../../../js/plugins/codemirror/codemirror.js"></script>
    <script src="../../../js/plugins/codemirror/mode/xml/xml.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/1.3.3/chroma.min.js"></script>

    
</body>

</html>
