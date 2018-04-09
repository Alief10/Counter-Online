<div class="container">
	<div class="col-md-12 bann-right">
		<!-- banner -->
		<div class="banner">		
			<div class="header-slider">
				<div class="slider">
					<div class="callbacks_container">
					  	<ul class="rslides" id="slider">
					  		<?php
                            include('user/user/page/koneksi/koneksi.php');
                            $query = "SELECT * FROM tb_slide";
                            $data = mysql_query($query);
                            while ($tampil = mysql_fetch_array($data)) {
                            ?>
							<li>
								<?php echo '<img src="aset/images/slide/'.$tampil['nama_file'].'"  >'; ?>
								<div class="caption">
									<h3><?php echo $tampil['judul_gambar']; ?></h3>
									<p><?php echo $tampil['keterangan']; ?></p>
								</div>
							</li>
							<?php }; ?>	
						</ul>
			  		</div>
				 </div>
			</div>
		</div>
		<!-- banner -->	
		<!-- produk -->
		<div class="nam-matis">
			<div class="nam-matis-top">
							<?php
							include('user/user/page/koneksi/koneksi.php'); 
                            // jumlah data yang akan ditampilkan per halaman
$dataPerPages = 3;
// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.
if(isset($_GET['pagess']))
{
$noPages = $_GET['pagess'];
}
else $noPages = 1;
// perhitungan offset
$offsets = ($noPages - 1) * $dataPerPages;
$query = "SELECT * FROM tb_produk LIMIT $offsets, $dataPerPages";
$result = mysql_query($query) or die('Error');
while($data = mysql_fetch_array($result)) {
                            ?>
						<div class="col-md-4">
							<?php echo '<img src="aset/images/produk/'.$data['nama_file']. '" class="img-responsive3" >'; ?>
							<h3><?php echo $data['judul_gambar']; ?></h3>
							<p align="justify"><?php echo $data['keterangan']; ?></p>
							<form class="navbar-form" method="post" action="index.php?page=tampil_galeri">
                            <button name="judul_gambar" class="btn btn-default" value="<?php echo $data['judul_gambar']; ?>" type="submit">Read More</button>
                    		</form>
						</div>
						<?php }
$query   = "SELECT COUNT(*) AS jumData FROM tb_produk";  
$hasil  = mysql_query($query);
$data     = mysql_fetch_array($hasil);
$jumDatas = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPages = ceil($jumDatas/$dataPerPages);
// menampilkan link previous
echo  '<center style="font-size:12pt;">';
if ($noPages > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?pagess=".($noPages-1)."'>&lt;&lt; Prev</a>";
// memunculkan nomor halaman dan linknya
for($pages = 1; $pages <= $jumPages; $pages++)
{
if ((($pages >= $noPages - 3) && ($pages <= $noPages + 3)) || ($pages== 1) || ($pages == $jumPages))
{
if (($pages == 1) && ($pages != 2))  echo " ... ";
if (($pages != ($jumPages - 1)) && ($pages == $jumPages)) echo " ... ";
if ($pages == $noPages) echo " <b>".$pages."</b> ";
else echo " <a href='".$_SERVER['PHP_SELF']."?pagess=".$pages."'>".$pages."</a> ";
$pages = $pages;
}
}
// menampilkan link next
if ($noPages < $jumPages) echo "<a href='".$_SERVER['PHP_SELF']."?pagess=".($noPages+1)."'>Next &gt;&gt;</a></center>";
						; ?>	
				</div>
		</div>
		<!-- end produk -->	
	<!-- lain-lain -->
	<div class="col-md-8 bann-left">
		<h3>Berita & Event</h3>
		<div class="blo-top">
			<div class="blog-grids">
				<?php
// jumlah data yang akan ditampilkan per halaman
$dataPerPage = 3;
// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.
if(isset($_GET['pages']))
{
$noPage = $_GET['pages'];
}
else $noPage = 1;
// perhitungan offset
$offset = ($noPage - 1) * $dataPerPage;
$query = "SELECT * FROM tb_berita LIMIT $offset, $dataPerPage";
$result = mysql_query($query) or die('Error');
while($data = mysql_fetch_array($result))
 {
                	?>
				<div class="blog-grid-left">
					<?php echo '<img src="aset/images/berita/'.$data['nama_file']. '" class="img-responsive6" >'; ?>
				</div>
				<div class="blog-grid-right">
					<h4><?php echo $data['judul_gambar']; ?></h4>
					<p><?php echo $data['isi']; ?></p>
					<form class="navbar-form" method="post" action="index.php?page=tampil_berita">
                        <button name="judul_gambar" class="btn btn-default" value="<?php echo $data['judul_gambar']; ?>" type="submit">Read More</button>
                   	</form>
				</div>
				<div class="clearfix"> </div>
					<?php }
$query   = "SELECT COUNT(*) AS jumData FROM tb_berita";
$hasil  = mysql_query($query);
$data     = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
// menampilkan link previous
echo  '<center style="font-size:12pt;">';
if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?pages=".($noPage-1)."'>&lt;&lt; Prev</a>";
// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page== 1) || ($page == $jumPage))
{
if (($page == 1) && ($page != 2))  echo " ... ";
if (($page != ($jumPage - 1)) && ($page == $jumPage)) echo " ... ";
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo " <a href='".$_SERVER['PHP_SELF']."?pages=".$page."'>".$page."</a> ";
$page = $page;
}
}
// menampilkan link next
if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?pages=".($noPage+1)."'>Next &gt;&gt;</a></center>";
					; ?>	
			</div>
		</div>
	</div>
	<div class="col-md-4 bann-left">
		<h3>Konsultasi</h3>
		<div class="blo-top">
		<div style="overflow:auto;width:auto;height:400px;" >
                                              <div class="strator">
                                              <h2>Komentar</h2>
                                                <?php
                                                include('user/user/page/koneksi/koneksi.php');
                                                
                                                $query = "SELECT * FROM tb_post";
                                                $data = mysql_query($query);
                                                while ($tampil = mysql_fetch_array($data)) {
                                               
                                                  ?>
                                                  <tr>
                                                    <br />
                                                    <p align="left"><h4><strong>* <?php echo $tampil['nama']; ?><span class="pull-right">* <?php echo $tampil['email']; ?></span></strong></h4></p>
                                                    <p align="left">- <?php echo $tampil['posting']; ?></p>
                                                  </tr>

                                                  <?php }; ?>
                                                  <div class="clearfix"></div>
                                                </div>
                                              </div>
			<li>Ingin Berkonsultasi dengan kami dan mendapatkan informasi lebih?</li>
            <!-- Buttons -->
                <a href="index.php?page=konsultasi"><button type="button" class="btn btn-primary" placeholder="Konsultasi">Konsultasi</button></a>
               
		</div>
	</div>
	<!-- end lain-lain -->
	</div>
	</div>
	<!-- end -->
	<!-- slide gambar -->
	<div>
		<div class="fle-xsel">
		
			<ul id="flexiselDemo3">
			<?php
                include('user/user/page/koneksi/koneksi.php');
                	$query = "SELECT * FROM tb_galeri";
                	$data = mysql_query($query);
                while ($tampil = mysql_fetch_array($data)) {
                	?>
				<li>
					<a href="index.php?page=produk">
						<div class="banner-1">
							<?php echo '<img src="aset/images/galeri/'.$tampil['nama_file']. '" class="img-responsive4"  >'; ?>
						</div>	
					</a>
				</li>
					<?php }; ?>	
			</ul>
		</div>
		</div>
		<!-- end slide gambar -->