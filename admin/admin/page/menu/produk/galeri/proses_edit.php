<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

$id_galeri= @$_POST['id_galeri'];
$judul_gambar=$_POST['judul_gambar'];
$harga=$_POST['harga'];
$kategori=$_POST['kategori'];
$kelas=$_POST['kelas'];
$mesin=$_POST['mesin'];
$warna=$_POST['warna'];

    



$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/galeri/';
$nama_gambar = @$_FILES['nama_file']['name'];

$edit_galeri = @$_POST['edit'];

if ($edit_galeri) {
    if ($judul_gambar == "" || $harga == "" || $kategori == "" || $kelas == "" || $mesin == "" || $warna == "" || $tangki == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        if ($nama_gambar == "") {
            mysql_query("update tb_galeri set judul_gambar = '$judul_gambar', harga = '$harga', kategori = '$kategori', kelas = '$kelas', mesin = '$mesin', warna = '$warna', tangki = '$tangki' where id_galeri = '$id_galeri'") or die(mysql_error());
            ?>
            <script type="text/javascript">
                alert("data berhasil diedit");
                window.location.href = "dasbord.php?page=galeri";
            </script>
            <?php

        } else {
            $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
            if ($pindah) {
                mysql_query("update tb_galeri set judul_gambar = '$judul_gambar', nama_file = '$nama_gambar', harga = '$harga', kategori = '$kategori', kelas = '$kelas', mesin = '$mesin', warna = '$warna', tangki = '$tangki' where id_galeri = '$id_galeri'") or die(mysql_error());
                ?> 
                <script type="text/javascript">
                    alert("data berhasil di edit");
                    window.location.href = "dasbord.php?page=galeri";
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