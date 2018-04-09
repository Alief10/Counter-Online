<?php
  session_start();
  include('user/user/page/koneksi/koneksi.php'); 
  
  $nama = $_POST['nama'];
  $email   = $_POST['email'];
  $posting  = $_POST['posting'];
  
  $simpan = mysql_query("INSERT INTO tb_post(nama,email, posting) VALUES('$nama','$email','$posting')");
if($simpan) {
        echo "<script>window.location='index.php?page=konsultasi';</script>";
} else {
echo "Proses Gagal!";
echo "<script>window.location='index.php?page=chat';</script>";
}

?>