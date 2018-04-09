<!--Proses Simpan Data Ke database -->
<?php
  // $nama_variabel = $_Methot['Nama_field_form'];
  include('admin/admin/page/menu/koneksi/koneksi.php');; 

  $username = $_POST['nama'];
  $password = $_POST['password'];
  $level	= $_POST ['lvl_user'];
  $pass = md5($password);
  
  // $query ="INSERT INTO login VALUES ('$username','$password')";
  // $simpan = mysql_query($query);
  $simpan = mysql_query("INSERT INTO login (nama, password,level_user) VALUES('$username','$pass','$level')");

  if ($simpan) {
    echo"<script>window.alert('Simpan Berhasil..!')</script>";
    echo"<script>document.location='dasbord.php?page=akun';</script>"; 
  } else {
    echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='dasbord.php?page=tambah_akun';</script>";
  }
?>