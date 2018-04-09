<!-- header -->
<div class="container">
	<div class="contact2">
 <div class="main-head-section">
	<div class="container">
 			<div class="about-top">
<?php
  include('user/user/page/koneksi/koneksi.php');
  $query = "SELECT * FROM tb_kontak";
  $data = mysql_query($query);
  while ($tampil = mysql_fetch_array($data)) {
?>
 	<div class="col-md-8 ab-top">
 		<?php echo '<img src="aset/images/kontak/'.$tampil['nama_file']. '" class="img-responsive2" >'; ?>
 	</div>
 	<div class="col-md-4 ab-top">
 	<div class="company_ad">
 	<h3>Kontak Info</h3>
 	<address>
	<p>Dealer Cabang<br />
		<?php echo $tampil['nama_marketing']; ?>
	</p>
	<p>Telepon <br />
		<?php echo $tampil['no_tlp']; ?>
	</p>
			<p>Alamat <br />
		<?php echo $tampil['alamat']; ?>
	</p>
	<p>Email <br />
		<?php echo $tampil['email']; ?>
	</p>
									 	 	
		</address>
		</div>
          <?php }; ?> 
 		</div>
      </div>
    </div>	
    <div class="row team-bar">
          <div class="first-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="second-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
          <div class="third-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="fourth-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
        </div> <!--skill_border-->
    <div class="team">
        <div class="center wow fadeInDown">
          <h2>Marketing Astra Motor Kajen</h2>
        </div>
        <?php
                include('user/user/page/koneksi/koneksi.php');
                $query = "SELECT * FROM tb_market";
                $data = mysql_query($query);
                while ($tampil = mysql_fetch_array($data)) {
              ?>
    <div class="row clearfix">
          <div class="col-md-4 col-sm-6"> 
            <div>
              <div class="media">
                <div class="center2">
                  <?php echo '<img src="aset/images/market/'.$tampil['nama_file']. '" class="img-responsive" >'; ?>
                </div>
                <div class="center">
                <p><h4>
                    <?php echo $tampil['nama_market']; ?></h4>
                  </p>
                  <p>Jabatan :
                    <?php echo $tampil['jabatan']; ?>
                  </p>
                      <p>Alamat :
                    <?php echo $tampil['alamat']; ?>
                  </p>
                  <p>Telepon :
                    <?php echo $tampil['no_tlp']; ?>
                  </p>
                      
                </div>
                </div>
              </div><!--/.media -->
          </div><!--/.col-lg-4 -->
          <?php }; ?>
          </div>
        </div>
 </div>
</div>
</div>