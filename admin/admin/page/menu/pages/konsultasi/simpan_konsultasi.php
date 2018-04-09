<?php
  session_start();
  include('admin/admin/page/menu/koneksi/koneksi.php'); 
  
  $nama = $_POST['nama'];
  $email   = $_POST['email'];
  $posting  = $_POST['posting'];
  
  $simpan = mysql_query("INSERT INTO tb_post(nama,email, posting) VALUES('$nama','$email','$posting')");
if($simpan) {
    echo "<script>window.alert('Posting Sukses')</script>";
    echo "<script>window.location='dasbord.php?page=konsultasi';</script>";
} else {
echo "<script>window.alert('Posting Gagal')</script>";
echo "<script>window.location='dasbord.php?page=konsultasi';</script>";
}

?>