<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIG | Buah-buahan Kab. Banyumas</title>

    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../../../css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="../../../css/animate.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">

    
    <link href="../../../css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">

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
                    <h2 align="center">Tabel Data Buah-buahan</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Tabel data buah-buahan</h5>
                                <p>Kab. Banyumas </p>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <a href="tambah_data_buah.php" class="btn btn-danger"><i class="fa fa-plus"> </i> Tambah Data</a>
                                    <br>
                                    <br>
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Buah </th>
                                                <th>Warna </th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            include "../../../koneksi.php";
                                            $sql_data_buah = $koneksi->query("SELECT * FROM tab_buah ORDER BY nama_buah ASC");
                                            while($data_buah = $sql_data_buah->fetch_assoc()){
                                                $id_buah = $data_buah['id_buah'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $data_buah['nama_buah'] ?></td>
                                                    <td style ="width:5%;" bgcolor="<?php echo $data_buah['kode_warna'] ?>"></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $id_buah ?>">
                                                            <i class="fa fa-eye"></i>
                                                            Lihat Gambar
                                                        </button>
                                                        <div class="modal inmodal" id="<?php echo $id_buah ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content animated bounceInRight">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                        <h4 class="modal-title"><?php echo $data_buah['nama_buah']; ?></h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="ibox ">
                                                                            <div class="ibox-title">
                                                                                <h5>Gambar </h5>
                                                                                <div class="ibox-tools">
                                                                                    <a class="collapse-link">
                                                                                        <i class="fa fa-chevron-up"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div  class="ibox-content">
                                                                                <table style ="width:100%;">
                                                                                    <tr>
                                                                                        <td align="center"><img style ="width:50%;" src="../../../gambar/<?php echo $data_buah['gambar'] ?>"></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close" ></i> Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="edit_data_buah.php?id_buah=<?php echo $id_buah ?>" class="btn btn-warning"><i class="fa fa-edit"> </i> Edit Data</a>
                                                        <a href="../../aksi/aksi_hapus_data_buah.php?id_buah=<?php echo $id_buah ?>" onclick="return confirm('Apakah anda yakin ?');" class="btn btn-danger"><i class="fa fa-trash"> </i> Hapus Data</a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Buah </th>
                                                <th>Warna </th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
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
    <script src="../../../js/jquery-3.1.1.min.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap.js"></script>
    <script src="../../../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../../../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../../../js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../../js/inspinia.js"></script>
    <script src="../../../js/plugins/pace/pace.min.js"></script>

    <script src="../../../js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

    <!-- Page-Level Scripts -->
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

</body>

</html>
