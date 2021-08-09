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
<?php include "../../../koneksi.php" ; ?>
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
                                <?php 
                                $id_buah = $_POST['id_buah'];
                                $sql_data_buah = $koneksi->query("SELECT * FROM tab_buah WHERE id_buah ='$id_buah'");
                                $data_buah = $sql_data_buah->fetch_assoc();
                                $nama_buah = $data_buah['nama_buah'];
                                ?>
                                    <h5>Peta Tematik Buah <?php echo $nama_buah ?> <small>Kab. Banyumas</small></h5>
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
                                <?php 
                                $id_buah = $_POST['id_buah'];
                                $sql_data_buah = $koneksi->query("SELECT * FROM tab_buah WHERE id_buah ='$id_buah'");
                                $data_buah = $sql_data_buah->fetch_assoc();
                                $nama_buah = $data_buah['nama_buah'];
                                ?>
                                    <h5>Peta Tematik Buah <?php echo $nama_buah ?> <small>Kab. Banyumas</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <?php
                                                    $sql_jumlah_maksimum = $koneksi->query("SELECT MAX(jumlah) AS jumlah_max FROM tab_hasil_buah WHERE id_buah = '$id_buah' ");
                                                    $data_jumlah_maksimum = $sql_jumlah_maksimum->fetch_assoc();
                                                    $jumlah_maksimum = $data_jumlah_maksimum['jumlah_max'];
                                                    if(($jumlah_maksimum>=0)&&($jumlah_maksimum<500)){
                                                        $tipe = "1";
                                                    }elseif(($jumlah_maksimum>=500)&&($jumlah_maksimum<1000)){
                                                        $tipe = "2";
                                                    }elseif(($jumlah_maksimum>=1000)&&($jumlah_maksimum<3000)){
                                                        $tipe = "3";
                                                    }else{
                                                        $tipe = "4";
                                                    }

                                                    $sql_tipe = $koneksi->query("SELECT * FROM tab_tipe_penilaian WHERE tipe = '$tipe'");
                                                    while($data_tipe = $sql_tipe->fetch_assoc()){
                                                        $batas_atas[]=$data_tipe['batas_atas'];
                                                        $batas_bawah[]=$data_tipe['batas_bawah'];
                                                    }
                                                    ?>
                                                    <table class="table " >
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Keterangan</th>
                                                                <th>warna</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        $warna_monokromatik = $data_buah['warna_monokromatik'];
                                                        $warna = explode(",",$warna_monokromatik);
                                                        ?>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><?php echo $batas_bawah[0]." - ".$batas_atas[0] ?> Ton</td>
                                                                <td bgcolor="<?php echo $warna[0] ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td><?php echo $batas_bawah[1]." - ".$batas_atas[1] ?> Ton</td>
                                                                <td bgcolor="<?php echo $warna[1] ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td><?php echo $batas_bawah[2]." - ".$batas_atas[2] ?> Ton</td>
                                                                <td bgcolor="<?php echo $warna[2] ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td><?php echo $batas_bawah[3]." - ".$batas_atas[3] ?> Ton</td>
                                                                <td bgcolor="<?php echo $warna[3] ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Lebih dari <?php echo $batas_bawah[4] ?> Ton</td>
                                                                <td bgcolor="<?php echo $warna[4] ?>"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Grafik Buah-buahan <small>Kab. Banyumas</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
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
                        <div class="col-lg-7">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Grafik Buah-buahan <small>Kab. Banyumas</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="table-responsive">
                                        <table style="width:300%;" border = "1" >
                                            <tr>
                                                <td><div><canvas id="barChart"></canvas></diV></td>
                                            </tr>
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

    <script type="text/javascript" src="../../../dist/leaflet-panel-layers.js"></script>
    <script type="text/javascript" src="../../../dist/leaflet.ajax.js"></script>

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

            $sql_hasil_buah = $koneksi->query("SELECT * FROM tab_hasil_buah WHERE id_kecamatan = '$id_kecamatan' AND id_buah = '$id_buah'");
            $hasil_buah = $sql_hasil_buah->fetch_assoc();
            $jml = $hasil_buah['jumlah'];

            if($jml==0){
                $kode_warna = "";
                $opacity = 0 ;
            }elseif(($jml >= $batas_bawah[0])&&($jml < $batas_atas[0])){
                $kode_warna = $warna[0];
                $opacity = 0.9 ;
            }elseif(($jml >= $batas_bawah[1])&&($jml < $batas_atas[1])){
                $kode_warna = $warna[1];
                $opacity = 0.9 ;
            }elseif(($jml >= $batas_bawah[2])&&($jml < $batas_atas[2])){
                $kode_warna = $warna[2];
                $opacity = 0.9 ;
            }elseif(($jml >= $batas_bawah[3])&&($jml < $batas_atas[3])){
                $kode_warna = $warna[3];
                $opacity = 0.9 ;
            }else{
                $kode_warna = $warna[4];
                $opacity = 0.9 ;
            }
            ?>
                var popup = "<h5 align='center'><?php echo $nama_kecamatan ?></h5><table class='table'><thead><tr><th>Buah</th><th>Jumlah (Ton)</th></tr></thead><tbody><tr><td><?php echo $nama_buah ?></td><td><?php echo number_format($jml) ?> Ton</td></tr></tbody></table>";
                new L.GeoJSON.AJAX(["../../../data/<?php echo $data_geojson; ?>"],{color: 'white', fillColor: '<?php echo $kode_warna ?>', fillOpacity: <?php echo $opacity ?> }).addTo(mymap).bindPopup(popup).closePopup();
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
    $sql_diagram = $koneksi->query("SELECT * FROM tab_kecamatan LEFT JOIN tab_hasil_buah ON tab_kecamatan.id_kecamatan=tab_hasil_buah.id_kecamatan WHERE id_buah = '$id_buah'");
    while($data_diagram=$sql_diagram->fetch_assoc()){
        $nama_kec[] = $data_diagram['nama_kecamatan'];
        $jumlah_buah[] = $data_diagram['jumlah'];
    }
    ?>
    <script src="../../../js/plugins/chartJs/Chart.min.js"></script>
    <script>
        $(function () {

        var barData = {
            labels: [<?php foreach($nama_kec as $kec){ echo "'$kec',"; } ?>],
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
