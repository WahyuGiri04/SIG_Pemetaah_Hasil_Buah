

<table style="width: 100%;" border="0" align="center">
    <tr>
        <td rowspan ="3"><img src="../../gambar/banyumas.svg" width="100px" height="100px"></td>
        <td style="width: 70%;" valign="baseline" align="center"><font size="4"><b>BADAN PUSAT STATISTIK</b></td>
        <td rowspan ="3"><img src="../../gambar/bps.svg" width="150px"></td>
    </tr>
    <tr>
        <td valign="baseline" align="center"><font size="5"><b>KABUPATEN BANYUMAS</b></td>
    </tr>
    <tr>
        <td align="center"><b>Alamat</b> : Jl. Warga Bakti No.5, Mangunjaya, Purwokerto Lor, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53114</td>
    </tr>
</table>
<hr size="2px" color="black">
<hr>
<table style="width: 100%;">
    <tr>
        <td align="right">Banyumas , <?php echo date('d / M / Y'); ?></td>
    <tr>
</table>
<br>
<?php
$tahun = $_GET['tahun'];
?>
<table style="width: 100%;">
    <tr>
        <td align="center"><font size="4"><b>DATA HASIL BUAH BUAHAN TAHUN <?php echo $tahun ?></b></td>
    <tr>
    <tr>
        <td align="center"><font size="3"><b>KABUPATEN BANYUMAS</b></td>
    </tr>
</table>
<br>
<table style="width: 100%;" border="1" cellspacing="0">
<thead>
                                            <tr>
                                                <th style ="width:3%;">No</th>
                                                <th>Nama Kecamatan</th>
                                                <?php
                                            
                                                include "../../koneksi.php";

                                                $sql_buah = $koneksi->query("SELECT * FROM tab_laporan_buah");
                                                while($data_buah = $sql_buah->fetch_assoc()){?>
                                                    <th><?php echo $data_buah['nama_buah'] ?></th>
                                                <?php
                                                }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $sql_data_kecamatan = $koneksi->query("SELECT * FROM tab_kecamatan ORDER BY nama_kecamatan ASC");
                                            while($data_kecamatan = $sql_data_kecamatan->fetch_assoc()){
                                                $id_kecamatan = $data_kecamatan['id_kecamatan'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $data_kecamatan['nama_kecamatan'] ?></td>
                                                    <?php 
                                                    $sql_buah = $koneksi->query("SELECT * FROM tab_laporan_buah");
                                                    while($data_buah = $sql_buah->fetch_assoc()){
                                                        $nama_buah = $data_buah['nama_buah'];
                                                        ?>
                                                        <td>
                                                            <?php
                                                            $sql_laporan = $koneksi->query("SELECT * FROM tab_laporan_hasil_buah WHERE nama_buah ='$nama_buah' AND tahun = '$tahun' AND id_kecamatan = '$id_kecamatan'");
                                                            $data_laporan = $sql_laporan->fetch_assoc();
                                                            $jumlah_laporan = $data_laporan['jumlah'];
                                                            if($jumlah_laporan==""){
                                                                echo " - ";
                                                            }else{
                                                                echo $jumlah_laporan." Ton";
                                                            }
                                                            ?>
                                                        </td>
                                                    <?php
                                                    }
                                                    ?>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
</table>


<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
