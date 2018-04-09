<?php
session_start();

?>
<div class="container">
<div class="content-top">
			<div class="single">
				<div class="about">
					<h2 align="center">Konsultasi</h2>
					<?php
  include('user/user/page/koneksi/koneksi.php');
  $query = "SELECT * FROM tb_profil";
  $data = mysql_query($query);
  while ($tampil = mysql_fetch_array($data)) {
?>
          <?php echo '<img src="aset/images/profil/'.$tampil['nama_file']. '" class="img-responsive2">'; ?>
          <?php }; ?> 
						<div class="respon">
							
							<div style="overflow:auto;width:auto;height:500px;" >
                                              <div class="strator">
                                              <h2>Komentar</h2>
                                                <?php
                                                include('user/user/page/koneksi/koneksi.php');
                                                $i = 0;
                                                $query = "SELECT * FROM tb_post";
                                                $data = mysql_query($query);
                                                while ($tampil = mysql_fetch_array($data)) {
                                                  $i++
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
							<div class="comment">
								<h2>Masukkan Komentar Anda</h2>
								<form class="form-horizontal" method="post" action="index.php?page=proses_chating">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-sm-2">Nama</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="textbox" name="nama" placeholder="Masukkan Nama Anda" required></input>
                                            </div>
                                          </div> 
                                          <div class="form-group">
                                            <label class="control-label col-sm-2">Email</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="textbox" name="email" placeholder="Masukkan Email Anda" required></input>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2">Komentar</label>
                                            <div class="col-sm-10">
                                              <textarea type="text" class="form-control ckeditor" name="posting" rows="5" placeholder="Gunakan Bahasa Indonesia Yang Baik dan Benar" required></textarea>
                                            </div>
                                          </div>

                                          <!-- Buttons -->
                                          <div class="form-group">
                                            <!-- Buttons -->
                                            <div class="col-lg-offset-2 col-lg-9">
                                              <button type="submit" class="btn btn-primary">Post</button>
                                            </div>
                                          </div>
                                        </form>
							</div>
						</div>
				</div>
					<div class="clearfix"> </div>
			</div>
</div>