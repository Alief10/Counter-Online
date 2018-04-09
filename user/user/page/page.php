<?php //tampilan menu 
	//menu
	if(@$_GET['page']==""){ include("menu/home/home.php");}
	if(@$_GET['page']=="tampil_berita"){ include("menu/home/tampil_berita.php");}
	//about
	if(@$_GET['page']=="profil"){ include("menu/profil/profil.php");}
	//kontak
	if(@$_GET['page']=="kontak"){ include("menu/kontak/kontak.php");}
	//produk
	if(@$_GET['page']=="produk"){ include("menu/produk/galeri/produk.php");}
	if(@$_GET['page']=="tampil_galeri"){ include("menu/produk/galeri/tampil_galeri.php");}
	if(@$_GET['page']=="search"){ include("menu/search/search.php");}
	if(@$_GET['page']=="cari_tipe"){ include("menu/produk/galeri/tipe_produk.php");}
	if(@$_GET['page']=="harga"){ include("menu/produk/harga_angsuran/harga_angsuran.php");}
	//posting
	if(@$_GET['page']=="konsultasi"){ include("menu/konsultasi/konsultasi.php");}
	if(@$_GET['page']=="proses_chating"){ include("menu/konsultasi/proses_chating.php");}
?>