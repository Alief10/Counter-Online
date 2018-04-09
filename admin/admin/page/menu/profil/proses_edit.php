<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

$id_profil = @$_POST['id_profil'];
$judul_gambar = @$_POST['judul_gambar'];
$keterangan = @$_POST['keterangan'];

$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/profil/';
$nama_gambar = @$_FILES['nama_file']['name'];

$edit_profil = @$_POST['edit'];

if ($edit_profil) {
    if ($judul_gambar == "" || $keterangan == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        if ($nama_gambar == "") {
            mysql_query("update tb_profil set judul_gambar = '$judul_gambar', keterangan = '$keterangan' where id_profil = '$id_profil'") or die(mysql_error());
            ?>
            <script type="text/javascript">
                alert("data berhasil diedit");
                window.location.href = "dasbord.php?page=profil";
            </script>
            <?php

        } else {
            $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
            if ($pindah) {
                mysql_query("update tb_profil set judul_gambar = '$judul_gambar',nama_file = '$nama_gambar', keterangan = '$keterangan' where id_profil = '$id_profil'") or die(mysql_error());
                ?> 
                <script type="text/javascript">
                    alert("data berhasil di edit");
                    window.location.href = "dasbord.php?page=profil";
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