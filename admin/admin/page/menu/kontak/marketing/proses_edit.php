<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

$id_market = @$_POST['id_market'];
$nama_market = @$_POST['nama_market'];
$jabatan = @$_POST['jabatan'];
$alamat = @$_POST['alamat'];
$no_tlp = @$_POST['no_tlp'];

$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/market/';
$nama_gambar = @$_FILES['nama_file']['name'];

$edit_marketing = @$_POST['edit'];

if ($edit_marketing) {
    if ($nama_market == "" || $jabatan == "" || $alamat == "" || $no_tlp == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        if ($nama_gambar == "") {
            mysql_query("update tb_market set nama_market = '$nama_market', jabatan = '$jabatan', alamat = '$alamat', no_tlp = '$no_tlp' where id_market = '$id_market'") or die(mysql_error());
            ?>
            <script type="text/javascript">
                alert("data berhasil diedit");
                window.location.href = "dasbord.php?page=kontak";
            </script>
            <?php

        } else {
            $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
            if ($pindah) {
                mysql_query("update tb_market set nama_file = '$nama_gambar', nama_market = '$nama_market', jabatan = '$jabatan', alamat = '$alamat', no_tlp = '$no_tlp' where id_market = '$id_market'") or die(mysql_error());
                ?> 
                <script type="text/javascript">
                    alert("data berhasil di edit");
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
}
?>