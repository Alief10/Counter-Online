<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> PRODUK</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Galeri</a></li>		
					</ol>
                        <br><form class="navbar-form" method="post" action="dasbord.php?page=pencarian_produk">
                        <input name="judul_gambar" class="form-control" placeholder="pencarian produk" type="text">
                        </form></br>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                           <header class="panel-heading col-lg-6">
                            Produk
                          </header>
                          <header class="panel-heading col-lg-6" align="right">
                          <a href="dasbord.php?page=tambah_galeri"><button class="btn btn-primary" type="Button">Tambah</button></a>
                        </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                <th rowspan=2><i class="icon_profile"></i> No</th>
                                 <th rowspan=2><i class="icon_profile"></i> Nama</th>
                                 <th rowspan=2><i class="icon_calendar"></i> Gambar</th>
                                 <th rowspan=2><i class="icon_calendar"></i> Harga</th>
                                 <th rowspan=2><i class="icon_calendar"></i> Kategori</th>
                                  <th rowspan=2><i class="icon_calendar"></i> Kelas</th>
                                  <th rowspan=2><i class="icon_calendar"></i> Mesin</th>
                                  <th rowspan=2><i class="icon_calendar"></i> Warna</th>
                                   <th rowspan=2><i class="icon_calendar"></i> Tangki</th>
                                 <th rowspan=2><i class="icon_profile"></i> Action</th>
                                </tr>
                              <tr>
                                 
                                <?php
                    include('admin/admin/page/menu/koneksi/koneksi.php');
                    $i = 0;
                    $nama= $_POST['judul_gambar'];
                    $query = "SELECT * FROM tb_galeri where judul_gambar like '%$nama%'";
                    $data = mysql_query($query);
                    while ($tampil = mysql_fetch_array($data)) {
                      $i++
                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td align="left"><?php echo $tampil['judul_gambar']; ?></td>
                                    <td align="left"><?php echo '<img src="aset/images/galeri/'.$tampil['nama_file'].'" width="200" />'; ?></td>
                                    <td align="left"><?php echo $tampil['harga']; ?></td>
                                    <td align="left"><?php echo $tampil['kategori']; ?></td>
                                    <td align="left"><?php echo $tampil['kelas']; ?></td>
                                    <td align="left"><?php echo $tampil['mesin']; ?></td>
                                    <td align="left"><?php echo $tampil['warna']; ?></td>
                                    <td align="left"><?php echo $tampil['tangki']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                      <a class="btn btn-danger" href="dasbord.php?page=hapus_galeri&id=<?php echo $tampil['id_galeri']; ?>"><i class="icon_close_alt2"></i></a>
                                      <a class="btn btn-primary" href="dasbord.php?page=edit_galeri&id=<?php echo $tampil['id_galeri']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>                                               
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