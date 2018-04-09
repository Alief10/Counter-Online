<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

$id_produk = @$_POST['id_produk'];
$judul_gambar = @$_POST['judul_gambar'];
$keterangan = @$_POST['keterangan'];




$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/produk/';
$nama_gambar = @$_FILES['nama_file']['name'];

$edit_produkbaru = @$_POST['edit'];

if ($edit_produkbaru) {
    if ($judul_gambar == "" || $keterangan == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        if ($nama_gambar == "") {
            mysql_query("update tb_produk set judul_gambar = '$judul_gambar', keterangan = '$keterangan' where id_produk = '$id_produk'") or die(mysql_error());
            ?>
            <script type="text/javascript">
                alert("data berhasil diedit");
                window.location.href = "dasbord.php?page=";
            </script>
            <?php

        } else {
            $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
            if ($pindah) {
                mysql_query("update tb_produk set  judul_gambar = '$judul_gambar',nama_file = '$nama_gambar', keterangan = '$keterangan' where id_produk = '$id_produk'") or die(mysql_error());
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