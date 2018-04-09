<?php

include('admin/admin/page/menu/koneksi/koneksi.php');

$judul_gambar = @$_POST['judul_gambar'];
$isi = @$_POST['isi'];
$keterangan = @$_POST['keterangan'];

$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/berita/';
$nama_gambar = @$_FILES['nama_file']['name'];

$tambah_berita = @$_POST['tambah'];

if ($tambah_berita) {
    if ($judul_gambar == "" || $nama_gambar == "" || $isi == "" || $keterangan == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
        if ($pindah) {
            mysql_query("INSERT into tb_berita (judul_gambar,nama_file,isi,keterangan) VALUES('$judul_gambar','$nama_gambar','$isi','$keterangan')") or die(mysql_error());
            ?> 
            <script type="text/javascript">
                alert("data berhasil di tambah");
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
?>