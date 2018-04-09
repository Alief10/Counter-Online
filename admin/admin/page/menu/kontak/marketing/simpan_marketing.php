<?php

include('admin/admin/page/menu/koneksi/koneksi.php');

$nama_market = @$_POST['nama_market'];
$jabatan = @$_POST['jabatan'];
$alamat = @$_POST['alamat'];
$no_tlp = @$_POST['no_tlp'];


$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/market/';
$nama_gambar = @$_FILES['nama_file']['name'];

$tambah_marketing = @$_POST['tambah'];

if ($tambah_marketing) {
    if ($nama_market == "" || $nama_gambar == "" || $jabatan == "" || $alamat == "" || $no_tlp == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
        if ($pindah) {
            mysql_query("INSERT into tb_market (nama_market,nama_file,jabatan,alamat,no_tlp) VALUES('$nama_market','$nama_gambar','$jabatan','$alamat','$no_tlp')") or die(mysql_error());
            ?> 
            <script type="text/javascript">
                alert("data berhasil di tambah");
                window.location.href = "dasbord.php?page=kontak";
            </script>
            <?php

        } else {
            ?>
            <script type="text/javascript">
                alert("gambar gagal diupload");
            </script>
            <?php

        }
    }
}
?>