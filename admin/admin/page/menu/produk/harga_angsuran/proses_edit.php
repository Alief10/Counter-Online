<!--Buat File Baru Untuk Simpan Edit-->
<?php
include('admin/admin/page/menu/koneksi/koneksi.php');

  $id = @$_POST['id_harga'];
  $jenis_type = $_POST['jenis'];
  $harga_utama = $_POST['harga_utama'];
  $uang_muka1 = $_POST['uang_muka1'];
  $uang_muka2 = $_POST['uang_muka2'];
  $uang_muka3 = $_POST['uang_muka3'];
  $bln_11_1 = $_POST['11_bln_1'];
  $bln_11_2 = $_POST['11_bln_2'];
  $bln_11_3 = $_POST['11_bln_3'];
  $bln_17_1 = $_POST['17_bln_1'];
  $bln_17_2 = $_POST['17_bln_2'];
  $bln_17_3 = $_POST['17_bln_3'];
  $bln_23_1 = $_POST['23_bln_1'];
  $bln_23_2 = $_POST['23_bln_2'];
  $bln_23_3 = $_POST['23_bln_3'];
  $bln_29_1 = $_POST['29_bln_1'];
  $bln_29_2 = $_POST['29_bln_2'];
  $bln_29_3 = $_POST['29_bln_3'];
  $bln_35_1 = $_POST['35_bln_1'];
  $bln_35_2 = $_POST['35_bln_2'];
  $bln_35_3 = $_POST['35_bln_3'];
  $bln_47_1 = $_POST['47_bln_1'];
  $bln_47_2 = $_POST['47_bln_2'];
  $bln_47_3 = $_POST['47_bln_3'];

  $query = "UPDATE tb_harga SET  jenis_type = '$jenis_type', harga_utama = '$harga_utama', uang_muka1 = '$uang_muka1', uang_muka2 = '$uang_muka2', uang_muka3 = '$uang_muka3', bln_11_1 = '$bln_11_1',
             bln_11_2 = '$bln_11_2', bln_11_3 = '$bln_11_3', bln_17_1 = '$bln_17_1', bln_17_2 = '$bln_17_2', bln_17_3 = '$bln_17_3', bln_23_1 = '$bln_23_1', bln_23_2 = '$bln_23_2', bln_23_3 = '$bln_23_3',
             bln_29_1 = '$bln_29_1', bln_29_2 = '$bln_29_2', bln_29_3 = '$bln_29_3', bln_35_1 = '$bln_35_1', bln_35_2 = '$bln_35_2', bln_35_3 = '$bln_35_3', bln_47_1 = '$bln_47_1', bln_47_2 = '$bln_47_2',
             bln_47_3 = '$bln_47_3' WHERE id_harga = '$id'";
  $edit = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Data Berhasil di Edit..!')</script>";
    echo"<script>document.location='dasbord.php?page=harga';</script>"; 
  } else {
    echo"<script>window.alert('Data Gagal di Edit..!')</script>";
     echo"<script>document.location='dasbord.php?page=harga';</script>";
  }

?>
