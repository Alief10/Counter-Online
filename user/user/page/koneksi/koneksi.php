<?php

$server="localhost";
$username = "root";
$password = "";
$database = "db_kelompok6";

$conec = mysql_connect($server,$username,$password,$database);
$select_db = mysql_select_db($database, $conec) or die ('gagal koneksi');

?>