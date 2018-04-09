<!--Proses Simpan Data Ke database -->
<?php
  // $nama_variabel = $_Methot['Nama_field_form'];
  include('admin/admin/page/menu/koneksi/koneksi.php'); 

  $jenis_type = $_POST['jenis'];
  $harga_utama = $_POST['harga_utama'];
  $uang_muka1 = $_POST['uang_muka1'];
  $uang_muka2 = $_POST['uang_muka2'];
  $uang_muka3 = $_POST['uang_muka3'];
  $bln_11_1 = $_POST['11_bln_1'];
  $bln_11_2 = $_POST['11_bln_2'];
  $bln_11_3 = $_POST['11_bln_3'];
  $bln_2_1 = $_POST['2_bln_1'];
  $bln_2_2 = $_POST['2_bln_2'];
  $bln_2_3 = $_POST['2_bln_3'];
  
  

  $query ="INSERT INTO tb_harga (jenis_type,harga_utama,uang_muka1,uang_muka2,uang_muka3,bln_11_1,bln_11_2,bln_11_3,bln_2_1,bln_2_2,bln_3_3) 
            VALUES ('$jenis_type','$harga_utama','$uang_muka1','$uang_muka2','$uang_muka3','$bln_11_1','$bln_11_2','$bln_11_3','$bln_2_1','$bln_2_2','$bln_2_3')";
  $simpan = mysql_query($query);
  //echo $query;

  if ($query) {
    echo"<script>window.alert('Data Berhasil Ditambah..!')</script>";
    echo"<script>document.location='dasbord.php?page=harga';</script>"; 
  } else {
    echo"<script>window.alert('Data Gagal Ditambah..!')</script>";
  }
?>