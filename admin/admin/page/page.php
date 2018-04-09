<?php //tampilan menu 
	//home
	//if(@$_GET['page']==""){ include("menu/home/home.php");}
	//home produk
	if(@$_GET['page']=="aksesoris"){ include("menu/produk/aksesoris/aksesoris.php");}
	if(@$_GET['page']=="tambah_aksesoris"){ include("menu/produk/aksesoris/tambah_aksesoris.php");}
	if(@$_GET['page']=="simpan_aksesoris"){ include("menu/produk/aksesoris/simpan_aksesoris.php");}
	if(@$_GET['page']=="hapus_aksesoris"){ include("menu/produk/aksesoris/hapus.php");}
	if(@$_GET['page']=="edit_aksesoris"){ include("menu/produk/aksesoris/edit.php");}
	if(@$_GET['page']=="proses_edit_aksesoris"){ include("menu/produk/aksesoris/proses_edit.php");}
	if(@$_GET['page']=="pencarian_aksesoris"){ include("menu/produk/aksesoris/pencarian.php");}
	//home slide show
	if(@$_GET['page']=="tambah_slide"){ include("menu/home/slide/tambah_slide.php");}
	if(@$_GET['page']=="simpan_slide"){ include("menu/home/slide/simpan_slide.php");}
	if(@$_GET['page']=="hapus_slide"){ include("menu/home/slide/hapus.php");}
	if(@$_GET['page']=="edit_slide"){ include("menu/home/slide/edit.php");}
	if(@$_GET['page']=="proses_edit_slide"){ include("menu/home/slide/proses_edit.php");}
	if(@$_GET['page']=="pencarian_slide"){ include("menu/home/slide/pencarian.php");}
	//home berita event
	if(@$_GET['page']=="simpan_berita"){ include("menu/pages/berita/simpan_berita.php");}
	if(@$_GET['page']=="berita"){ include("menu/pages/berita/berita.php");}
	if(@$_GET['page']=="tambah_berita"){ include("menu/pages/berita/tambah_berita.php");}
	if(@$_GET['page']=="hapus_berita"){ include("menu/pages/berita/hapus.php");}
	if(@$_GET['page']=="edit_berita"){ include("menu/pages/berita/edit.php");}
	if(@$_GET['page']=="proses_edit_berita"){ include("menu/pages/berita/proses_edit.php");}
	if(@$_GET['page']=="pencarian_berita"){ include("menu/pages/berita/pencarian.php");}
	//profil
	if(@$_GET['page']=="profil"){ include("menu/profil/profil.php");}
	if(@$_GET['page']=="edit_profil"){ include("menu/profil/edit.php");}
	if(@$_GET['page']=="proses_edit_profil"){ include("menu/profil/proses_edit.php");}
	
	//produk galeri
	if(@$_GET['page']=="galeri"){ include("menu/produk/galeri/galeri.php");}
	if(@$_GET['page']=="tambah_galeri"){ include("menu/produk/galeri/tambah_galeri.php");}
	if(@$_GET['page']=="simpan_galeri"){ include("menu/produk/galeri/simpan_galeri.php");}
	if(@$_GET['page']=="hapus_galeri"){ include("menu/produk/galeri/hapus.php");}
	if(@$_GET['page']=="edit_galeri"){ include("menu/produk/galeri/edit.php");}
	if(@$_GET['page']=="proses_edit_galeri"){ include("menu/produk/galeri/proses_edit.php");}
	if(@$_GET['page']=="pencarian_produk"){ include("menu/produk/galeri/pencarian.php");}
	//produk harga & angsuran
	if(@$_GET['page']=="harga"){ include("menu/produk/harga_angsuran/harga.php");}
	if(@$_GET['page']=="tambah_harga"){ include("menu/produk/harga_angsuran/tambah_harga.php");}
	if(@$_GET['page']=="simpan_harga"){ include("menu/produk/harga_angsuran/simpan_harga.php");}
	if(@$_GET['page']=="hapus_harga"){ include("menu/produk/harga_angsuran/hapus.php");}
	if(@$_GET['page']=="edit_harga"){ include("menu/produk/harga_angsuran/edit.php");}
	if(@$_GET['page']=="proses_edit_harga"){ include("menu/produk/harga_angsuran/proses_edit.php");}
	if(@$_GET['page']=="pencarian_harga"){ include("menu/produk/harga_angsuran/pencarian.php");}
	//kontak
	if(@$_GET['page']=="kontak"){ include("menu/kontak/kontak.php");}
	//kontak dealer
	if(@$_GET['page']=="edit_dealer"){ include("menu/kontak/dealer/edit.php");}
	if(@$_GET['page']=="proses_edit_dealer"){ include("menu/kontak/dealer/proses_edit.php");}
	//kontak marketing
	if(@$_GET['page']=="tambah_marketing"){ include("menu/kontak/marketing/tambah_marketing.php");}
	if(@$_GET['page']=="simpan_marketing"){ include("menu/kontak/marketing/simpan_marketing.php");}
	if(@$_GET['page']=="hapus_marketing"){ include("menu/kontak/marketing/hapus.php");}
	if(@$_GET['page']=="edit_marketing"){ include("menu/kontak/marketing/edit.php");}
	if(@$_GET['page']=="proses_edit_marketing"){ include("menu/kontak/marketing/proses_edit.php");}
	//pages Konsultasi
	if(@$_GET['page']=="konsultasi"){ include("menu/pages/konsultasi/konsultasi.php");}
	if(@$_GET['page']=="memilih_konsultasi"){ include("menu/pages/konsultasi/memilih_konsultasi.php");}
	if(@$_GET['page']=="simpan_konsultasi"){ include("menu/pages/konsultasi/simpan_konsultasi.php");}
	if(@$_GET['page']=="hapus_konsultasi"){ include("menu/pages/konsultasi/hapus.php");}
	//pages akun
	if(@$_GET['page']=="akun"){ include("menu/pages/akun/akun.php");}
	if(@$_GET['page']=="tambah_akun"){ include("menu/pages/akun/tambah_akun.php");}
	if(@$_GET['page']=="simpan_akun"){ include("menu/pages/akun/simpan_akun.php");}
	if(@$_GET['page']=="hapus_akun"){ include("menu/pages/akun/hapus.php");}
	if(@$_GET['page']=="edit_akun"){ include("menu/pages/akun/edit.php");}
	if(@$_GET['page']=="proses_edit_akun"){ include("menu/pages/akun/proses_edit.php");}
	//404
	if(@$_GET['page']=="eror"){ include("menu/pages/akun/hapus.php");}
	
	
?>