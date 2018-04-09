<?php

session_start();

include('koneksi.php');;


$username = $_POST['nama']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="nama" tadi
$password = md5($_POST['password']); // variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi
// md5 ada sebuah fungsi PHP untuk engkripsi. misalnya admin jadi 21232f297a57a5a743894a0e4a801fc3. untuk lengkapnya, silahkan googling tentang md5

// proses untuk login

// menyesuaikan dengan data di database
$perintah = "select * from login WHERE nama = '$username' AND password= '$password'";
$hasil = mysql_query($perintah);
$row = mysql_fetch_array($hasil);
if ($row['nama'] == $username AND $row['password'] == $password) {
    $_SESSION['nama'] = $username;
     echo"<script>window.alert('Login Sukses')</script>";
     echo"<script>document.location='../dasbord.php';</script>"; 
 }else {
    echo"<script>window.alert('Gagal Login')</script>";
    echo"<script>document.location='index.php';</script>";
  }
?>