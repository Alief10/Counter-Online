<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

$id_kontak = @$_POST['id_kontak'];
$nama_marketing = @$_POST['nama_marketing'];
$no_tlp = @$_POST['no_tlp'];
$alamat = @$_POST['alamat'];
$email= @$_POST['email'];



$sumber = @$_FILES['nama_file']['tmp_name'];
$target = 'aset/images/kontak/';
$nama_gambar = @$_FILES['nama_file']['name'];

$edit_dealer = @$_POST['edit'];

if ($edit_dealer) {
    if ($nama_marketing == "" || $no_tlp == "" || $alamat == "" || $email == "") {
        ?>
        <script type="text/javascript">
            alert("Inputan tidak Boleh ada yang kosong");
        </script>
        <?php

    } else {
        if ($nama_gambar == "") {
            mysql_query("update tb_kontak set nama_marketing = '$nama_marketing', no_tlp = '$no_tlp', alamat = '$alamat', email = '$email' where id_kontak = '$id_kontak'") or die(mysql_error());
            ?>
            <script type="text/javascript">
                alert("data berhasil diedit");
                window.location.href = "dasbord.php?page=kontak";
            </script>
            <?php

        } else {
            $pindah = move_uploaded_file($sumber, $target . $nama_gambar);
            if ($pindah) {
                mysql_query("update tb_kontak set nama_file = '$nama_gambar', nama_marketing = '$nama_marketing', no_tlp = '$no_tlp', alamat = '$alamat', email = '$email' where id_kontak = '$id_kontak'") or die(mysql_error());
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