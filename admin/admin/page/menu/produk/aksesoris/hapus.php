<!--Hapus-->
<?php
include('admin/admin/page/menu/koneksi/koneksi.php');
  $id = $_GET['id'];
  $query = "DELETE FROM tb_aksesoris WHERE id_aksesoris=$id";
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='dasbord.php?page=aksesoris';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='dasbord.php?page=aksesoris';</script>";
  }
?>