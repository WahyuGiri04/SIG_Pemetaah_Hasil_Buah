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
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Form Edit Data</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Data Buah-buahan</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Edit Data Buah-buahan</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <?php
            include "../../../koneksi.php";
            $id_buah = $_GET['id_buah'];
            $sql_data_buah = $koneksi->query("SELECT * FROM tab_buah WHERE id_buah = '$id_buah'");
            $data_buah = $sql_data_buah->fetch_assoc();
            ?>
            <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Form Edit Data Buah-buahan <small>Kab. Bnayumas</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <form action ="../../aksi/aksi_edit_data_buah.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Nama Buah-buahan </label>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-9">
                                                <input type="text" hidden name="id_buah" value = "<?php echo $data_buah['id_buah'] ?>" class="form-control">
                                                <input type="text" name="nama_buah" value = "<?php echo $data_buah['nama_buah'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Gambar </label>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-9">
                                                <img style = "width:30%;" src = "../../../gambar/<?php echo $data_buah['gambar'] ?>" >
                                                <input type="file" name="gambar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group  row"><label class="col-sm-2 col-form-label"> Pilih Warna </label>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-9"><input type="color" id="user-color" name="kode_warna" value = "<?php echo $data_buah['kode_warna'] ?>" class=""></div>
                                        </div>
                                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Hasil Monokromatik</label>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-9"><ol class="color-scheme"></ol></div>
                                        </div>
                                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Kode Warna Monokromatik</label>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-9 "><input type="text" name="warna_monokromatik" value = "<?php echo $data_buah['warna_monokromatik'] ?>" id = "warna" class="form-control"></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <a class="btn btn-white" type="submit"><i class="fa fa-backward" ></i> Kembali</a>
                                                <button class="btn btn-primary" onclick="return confirm('Apakah anda yakin ?');" type="submit">Edit data <i class="fa fa-edit"></i></button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cekWarna = document.querySelector('#user-color'),
                colorScheme = document.querySelector('.color-scheme'),
                colorScale = document.querySelector('.color-scale'),
                steps = 5, // is preferably an odd number
                chromaColor, userColor, colorList, scaleColors, scaleCount, scaleList;
            
            cekWarna.addEventListener('change', function() {
                // Reinitialize the color list.
                colorList = [];

                // Get the color value.
                userColor = document.querySelector('#user-color').value;

                // Reset the content of the color scheme list.
                colorScheme.innerHTML = '';

                // Initialize Chroma.
                chromaColor = chroma(userColor);

                // Create a monchromatic color scheme.
                for (var i = 0; i < steps; i++) {
                    colorList[i] = chromaColor.darken(i - Math.floor(steps / 2));
                }

                // Generate some elements.
                for (var j = 0; j < colorList.length; j++) {
                    var newItem = document.createElement('li');

                    newItem.style.backgroundColor = colorList[j];
                    colorScheme.appendChild(newItem);
                }
                document.getElementById('warna').value = colorList;
            });
        });        
    </script>
</body>

</html>
