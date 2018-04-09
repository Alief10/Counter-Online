<!--Hapus-->
<?php
include('admin/admin/page/menu/koneksi/koneksi.php');
  $id = $_GET['id'];
  $query = "DELETE FROM login WHERE id_login=$id";
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='dasbord.php?page=akun';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='dasbord.php?page=akun';</script>";
  }
?>