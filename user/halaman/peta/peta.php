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
    
    <link href="../../../css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <link rel="stylesheet" href="../../../dist/leaflet-panel-layers.css" />

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
                        <div class="col-lg-8">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Peta Buah-buahan <small>Kab. Banyumas</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="mapid" style="width: 100%; height:450px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Keterangan Warna <small>Kab. Banyumas</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content collapse">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 1%" class="text-center">No.</th>
                                                                <th>Buah</th>
                                                                <th class="text-center">Warna</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include "../../../koneksi.php";
                                                            $no = 1;
                                                            $sql_data_buah = $koneksi->query("SELECT * FROM tab_buah ORDER BY nama_buah ASC");
                                                            while($data_buah=$sql_data_buah->fetch_assoc()){?>
                                                                <tr>
                                                                    <td class="text-center"><?php echo $no++ ?></td>
                                                                    <td> <?php echo $data_buah['nama_buah'] ?></td>
                                                                    <td bgcolor="<?php echo $data_buah['kode_warna'] ?>"></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th style="width: 1%" class="text-center">No.</th>
                                                                <th>Buah</th>
                                                                <th class="text-center">Warna</th>
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Keterangan Angka <small>Kab. Banyumas</small></h5>
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
                                                    <th style="width: 1%" class="text-center">No.</th>
                                                    <th>Kecamatan</th>
                                                    <th class="text-center">Icon</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include "../../../koneksi.php";
                                            $no = 1;
                                            $sql_icn = $koneksi->query("SELECT * FROM tab_icon INNER JOIN tab_kecamatan ON tab_kecamatan.id_kecamatan=tab_icon.id_kecamatan");
                                            while($data_icn=$sql_icn->fetch_assoc()){?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++ ?></td>
                                                    <td> <?php echo $data_icn['nama_kecamatan'] ?></td>
                                                    <td><img src="../../icon/<?php echo $data_icn['icon'] ?>" style="width:40%"></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th style="width: 1%" class="text-center">No.</th>
                                                    <th>Buah</th>
                                                    <th class="text-center">Warna</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Grafik Buah-buahan <small>Kab. Banyumas</small></h5>
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

    <script src="../../../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../../../js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 5,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    
                ]

            });

        });

    </script>

    <script type="text/javascript" src="../../../dist/leaflet-panel-layers.js"></script>
    <script type="text/javascript" src="../../../dist/leaflet.ajax.js"></script>


    <script>

        var mymap = L.map('mapid').setView([-7.4310897,109.1631403], 10);

        var layer_utama = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
        });

        mymap.addLayer(layer_utama);
        
        <?php

        $sql_data_kecamatan = $koneksi->query("SELECT * FROM tab_kecamatan");
        while($data_kecamatan = $sql_data_kecamatan->fetch_assoc()){
        $id_kecamatan = $data_kecamatan['id_kecamatan'];
        $data_geojson = $data_kecamatan['data_geojson'];
        $nama_kecamatan = $data_kecamatan['nama_kecamatan'];

        $sql_hasil_buah = $koneksi->query("SELECT * FROM tab_hasil_buah INNER JOIN tab_buah ON tab_buah.id_buah=tab_hasil_buah.id_buah WHERE id_kecamatan = '$id_kecamatan' ORDER BY jumlah DESC LIMIT 1");
        $hasil_buah = $sql_hasil_buah->fetch_assoc();
        $kode_warna = $hasil_buah['kode_warna'];
        ?>
            var popup = "<h5 align='center'><?php echo $nama_kecamatan ?></h5><table class='table'><thead><tr><th>No</th><th>Buah</th><th>Jumlah (Ton)</th></tr></thead><tbody><?php $no = 1;$sql_jumlah_buah = $koneksi->query("SELECT * FROM tab_hasil_buah LEFT JOIN tab_buah ON tab_buah.id_buah=tab_hasil_buah.id_buah WHERE id_kecamatan = '$id_kecamatan' ORDER BY jumlah DESC");while($jumlah_buah = $sql_jumlah_buah->fetch_assoc()){?><tr><td><?php echo $no++ ?></td><td><?php echo $jumlah_buah['nama_buah'] ?></td><td><?php echo number_format($jumlah_buah['jumlah']) ?> Ton</td></tr><?php }?></tbody></table>";
            var peta = new L.GeoJSON.AJAX(["../../../data/<?php echo $data_geojson; ?>"],{color: 'white', fillColor: '<?php echo $kode_warna ?>', fillOpacity: 1 }).addTo(mymap);
            
            peta.bindPopup(popup).closePopup();
            
        <?php
        }
        ?>

        <?php
        $sql_icon = $koneksi->query("SELECT * FROM tab_icon INNER JOIN tab_kecamatan ON tab_icon.id_kecamatan=tab_kecamatan.id_kecamatan ");
        while($data_icon = $sql_icon->fetch_assoc()){
            $icon = $data_icon['icon'];
            $latitude = $data_icon['latitude'];
            $longitude = $data_icon['longitude'];
            $nama_kecamatan = $data_icon['nama_kecamatan'];
            ?>
            var icon = L.icon({
                        iconUrl: '../../icon/<?php echo $icon ?>',
                        iconSize: [20,20],
                    });
                    var marker = L.marker([<?php echo $latitude ?>, <?php echo $longitude ?> ], {icon: icon}).addTo(mymap);
                    var pop = marker.bindTooltip("<?php echo $nama_kecamatan ?>",{permanent:false,direction:"center"});
            <?php
        }
        ?>

    </script>

    <?php
    $sql_diagram = $koneksi->query("SELECT nama_buah,kode_warna, SUM(jumlah) as total FROM tab_hasil_buah INNER JOIN tab_buah ON tab_buah.id_buah=tab_hasil_buah.id_buah GROUP BY tab_buah.id_buah");
    while($data_diagram=$sql_diagram->fetch_assoc()){
        $nama_buah[] = $data_diagram['nama_buah'];
        $jumlah_buah[] = $data_diagram['total'];
    }
    ?>
    <script src="../../../js/plugins/chartJs/Chart.min.js"></script>
    <script>
        $(function () {

        var barData = {
            labels: [<?php foreach($nama_buah as $buah){ echo "'$buah',"; } ?>],
            datasets: [
                {
                    label: "Hasil Buah (Ton)",
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
