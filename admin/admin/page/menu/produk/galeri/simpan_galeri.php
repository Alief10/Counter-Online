<?php

include('admin/admin/page/menu/koneksi/koneksi.php');

$judul_gambar=$_POST['judul_gambar'];
$kategori=$_POST['kategori'];
$harga=$_POST['harga'];
$merk=$_POST['merk'];
$mesin=$_POST['mesin'];
$warna=$_POST['warna'];



$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/galeri/';
$nama_gambar = @$_FILES['nama_file']['name'];

$tambah_galeri = @$_POST['tambah'];

if ($tambah_galeri) {
    if ($judul_gambar == "" || $nama_gambar == "" || $kategori == "" || $harga == "" || $merk == "" || $mesin == "" || $warna == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
        if ($pindah) {
            mysql_query("INSERT into tb_galeri (judul_gambar,nama_file,harga,kategori,merk,mesin,warna) VALUES('$judul_gambar','$nama_gambar','$harga','$kategori','$merk','$mesin','$warna')") or die(mysql_error());
            ?> 
            <script type="text/javascript">
                alert("data berhasil di tambah");
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
?>