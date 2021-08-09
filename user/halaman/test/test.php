<?php

include "../../../koneksi.php";

?>

                    <div class='ibox-title'><h5 align='center'>Basic Table</h5><div class='ibox-tools'><a class='collapse-link'><i class='fa fa-chevron-up'></i></a></div></div>
                    <div class='ibox-content'>

                        <table class='table'><thead><tr><th>No</th><th>Buah</th><th>Jumlah (Ton)</th></tr></thead><tbody><?php $no = 1;$sql_jumlah_buah = $koneksi->query("SELECT * FROM tab_hasil_buah LEFT JOIN tab_buah ON tab_buah.id_buah=tab_hasil_buah.id_buah WHERE id_kecamatan = '7' ORDER BY jumlah DESC");while($jumlah_buah = $sql_jumlah_buah->fetch_assoc()){?><tr><td><?php echo $no++ ?></td><td><?php echo $jumlah_buah['nama_buah'] ?></td><td><?php echo number_format($jumlah_buah['jumlah']) ?> Ton</td></tr><?php }?></tbody></table>

                    </div>