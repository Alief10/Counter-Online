<div class="container">
    <div class="contact2">
 <div class="main-head-section">
    <div class="container">
            <div class="about-top">
<?php
  include('user/user/page/koneksi/koneksi.php');
   $nama= $_POST['judul_gambar'];
  $query = "SELECT * FROM tb_galeri  where judul_gambar like '%$nama%'";
  $data = mysql_query($query);
  while ($tampil = mysql_fetch_array($data)) {
?>
    <div class="col-md-8 ab-top">
        <?php echo '<img src="aset/images/galeri/'.$tampil['nama_file']. '" class="img-responsive2" >'; ?>
    </div>
    <div class="col-md-4 ab-top">
    <div class="company_ad">
    <h2>Keterangan</h2>
    <address>
    <p><h3>
        <?php echo $tampil['judul_gambar']; ?></h3>
    </p>
     <p>Harga              :
        <?php echo $tampil['harga']; ?>
      </p>
      <p>Kelas             :
        <?php echo $tampil['kelas']; ?>
      </p>
       <p>Mesin            :
        <?php echo $tampil['mesin']; ?>
      </p>
       <p>Warna            :
        <?php echo $tampil['warna']; ?>
      </p>
       <p>Kapasitas Tangki :
        <?php echo $tampil['tangki']; ?>
      </p>

                                            
        </address>
        </div>
          <?php }; ?> 
        </div>
      </div>
    </div>  
        <!-- end star -->
        </div>
        </div>