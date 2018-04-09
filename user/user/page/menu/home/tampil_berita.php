<div class="container">
        <div class="col-md-12 bann-right">
        <!-- main star -->
		<div class="content-top">
        <div class="single">
        <?php
                    include('user/user/page/koneksi/koneksi.php');
                    $nama= $_POST['judul_gambar'];
                    $query = "SELECT * FROM tb_berita where judul_gambar like '%$nama%'";
                    $data = mysql_query($query);
                    while ($tampil = mysql_fetch_array($data)) {
                ?>
				<div class="single-top">
					<?php echo '<img src="aset/images/berita/'.$tampil['nama_file']. '" class="img-responsive" >'; ?>
					<div class="artical-links" align="justify">
		  					<span><h2><?php echo $tampil['judul_gambar']; ?></h2></span>
		  					<span><?php echo $tampil['keterangan']; ?></span>
		  			</div>
					
				</div>
				<?php }; ?>	
				</div>
        <!-- end star -->
        </div>
        </div>