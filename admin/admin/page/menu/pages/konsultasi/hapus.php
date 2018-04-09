<!--Hapus-->
<?php
include('admin/admin/page/menu/koneksi/koneksi.php');
  $id = $_GET['id'];
  $query = "DELETE FROM tb_post WHERE id_post=$id";
  $data = mysql_query($query);

  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='dasbord.php?page=memilih_konsultasi';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
  }
?>