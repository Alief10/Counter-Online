<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

$id_berita = @$_POST['id_berita'];
$judul_gambar = @$_POST['judul_gambar'];
$isi = @$_POST['isi'];
$keterangan = @$_POST['keterangan'];




$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/berita/';
$nama_gambar = @$_FILES['nama_file']['name'];

$edit_berita = @$_POST['edit'];

if ($edit_berita) {
    if ($judul_gambar == "" || $isi == "" || $keterangan == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        if ($nama_gambar == "") {
            mysql_query("update tb_berita set judul_gambar = '$judul_gambar', isi = '$isi', keterangan = '$keterangan' where id_berita = '$id_berita'") or die(mysql_error());
            ?>
            <script type="text/javascript">
                alert("data berhasil diedit");
                window.location.href = "dasbord.php?page=berita";
            </script>
            <?php

        } else {
            $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
            if ($pindah) {
                mysql_query("update tb_berita set  judul_gambar = '$judul_gambar',nama_file = '$nama_gambar', isi = '$isi', keterangan = '$keterangan' where id_berita = '$id_berita'") or die(mysql_error());
                ?> 
                <script type="text/javascript">
                    alert("data berhasil di edit");
                    window.location.href = "dasbord.php?page=berita";
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