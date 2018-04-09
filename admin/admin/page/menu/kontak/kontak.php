<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> KONTAK</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Kontak</a></li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                          Dealer
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Gambar</th>
                                 <th><i class="icon_calendar"></i> Nama Dealer</th>
                                 <th><i class="icon_profile"></i> No Telepon</th>
                                 <th><i class="icon_profile"></i> Alamat</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <tr>
                                 <?php
                            include('admin/admin/page/menu/koneksi/koneksi.php');
                            $query = "SELECT * FROM tb_kontak";
                            $data = mysql_query($query);
                            $namafolder="../aset/images/profil/"; //tempat menyimpan file
                            while ($tampil = mysql_fetch_array($data)) {
                                ?>
                                <tr>
                                    <td align="justify"><?php echo '<img src="aset/images/kontak/'.$tampil['nama_file'].'" width="200" />'; ?></td>
                                    <td align="justify"><?php echo $tampil['nama_marketing']; ?></td>
                                    <td align="justify"><?php echo $tampil['no_tlp']; ?></td>
                                    <td align="justify"><?php echo $tampil['alamat']; ?></td>
                                    <td align="justify"><?php echo $tampil['email']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                      <a class="btn btn-primary" href="dasbord.php?page=edit_dealer&id=<?php echo $tampil['id_kontak']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>                                                    
                                      
                                        </div>
                                    </td>
                                </tr>

                                <?php }; ?>                        
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                           <header class="panel-heading col-lg-6">
                            Marketing
                          </header>
                          <header class="panel-heading col-lg-6" align="right">
                          <a href="dasbord.php?page=tambah_marketing"><button class="btn btn-primary" type="Button">Tambah</button></a>
                        </header>

                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Gambar</th>
                                 <th><i class="icon_calendar"></i> Nama Marketing</th>
                                 <th><i class="icon_profile"></i> Jabatan</th>
                                 <th><i class="icon_profile"></i> Alamat</th>
                                 <th><i class="icon_profile"></i> No Telepon</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <tr>
                                 <?php
                            include('admin/admin/page/menu/koneksi/koneksi.php');
                            $query = "SELECT * FROM tb_market";
                            $data = mysql_query($query);
                            while ($tampil = mysql_fetch_array($data)) {
                                ?>
                                <tr>
                                    <td align="left"><?php echo '<img src="aset/images/market/'.$tampil['nama_file'].'" width="200" />'; ?></td>
                                    <td align="left"><?php echo $tampil['nama_market']; ?></td>
                                    <td align="left"><?php echo $tampil['jabatan']; ?></td>
                                    <td align="left"><?php echo $tampil['alamat']; ?></td>
                                    <td align="left"><?php echo $tampil['no_tlp']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                      <a class="btn btn-danger" href="dasbord.php?page=hapus_marketing&id=<?php echo $tampil['id_market']; ?>"><i class="icon_close_alt2"></i></a>
                                       <a class="btn btn-primary" href="dasbord.php?page=edit_marketing&id=<?php echo $tampil['id_market']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>                                                    
                                        </div>
                                    </td>
                                </tr>

                                <?php }; ?>                        
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>