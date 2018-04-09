<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

$id= $_POST['id_login'];
$username=$_POST['nama'];
$password=md5($_POST['password']);
$level	= $_POST ['lvl_user'];

  $query = 'update login set nama="'.$username.'", password="'.$password.'" ,level_user="'.$level.'"where id_login="'.$id.'"';
  $edit = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Data Berhasil di Edit..!')</script>";
    echo"<script>document.location='dasbord.php?page=akun';</script>"; 
  } else {
    echo"<script>window.alert('Data Gagal di Edit..!')</script>";
     echo"<script>document.location='dasbord.php?page=akun';</script>";
  }

?>