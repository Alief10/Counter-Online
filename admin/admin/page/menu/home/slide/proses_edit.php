<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

$id_slide = @$_POST['id_slide'];
$judul_gambar = @$_POST['judul_gambar'];
$keterangan = @$_POST['keterangan'];


$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/slide/';
$nama_gambar = @$_FILES['nama_file']['name'];

$edit_slide = @$_POST['edit'];

if ($edit_slide) {
    if ($judul_gambar == "" || $keterangan == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        if ($nama_gambar == "") {
            mysql_query("update tb_slide set judul_gambar = '$judul_gambar', keterangan = '$keterangan' where id_slide = '$id_slide'") or die(mysql_error());
            ?>
            <script type="text/javascript">
                alert("data berhasil diedit");
                window.location.href = "dasbord.php?page=";
            </script>
            <?php

        } else {
            $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
            if ($pindah) {
                mysql_query("update tb_slide set judul_gambar = '$judul_gambar', nama_file = '$nama_gambar', keterangan = '$keterangan' where id_slide = '$id_slide'") or die(mysql_error());
                ?> 
                <script type="text/javascript">
                    alert("data berhasil di edit");
                    window.location.href = "dasbord.php?page=";
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