<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Konsultasi</a></li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Komentar
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                              	 <th><i class="icon_profile"></i> No</th>
                                 <th><i class="icon_profile"></i> Nama</th>
                                 <th><i class="icon_calendar"></i> Email</th>
                                 <th><i class="icon_pin"></i> Komentar</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php
                            include('admin/admin/page/menu/koneksi/koneksi.php');
                            $i = 0;
                            $query = "SELECT * FROM tb_post";
                            $data = mysql_query($query);
                            while ($tampil = mysql_fetch_array($data)) {
                                $i++
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td align="justify"><?php echo $tampil['nama']; ?></td>
                                    <td align="justify"><?php echo $tampil['email']; ?></td>
                                    <td align="justify"><?php echo $tampil['posting']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                        <a class="btn btn-danger" href="dasbord.php?page=hapus_konsultasi&id=<?php echo $tampil['id_post']; ?>"><i class="icon_close_alt2"></i></a>     
                                    </td>
                                </tr>

                                <?php }; ?>                         
                           </tbody>
                        </table>
                        
                      </section>

                              <a href="dasbord.php?page=konsultasi" data-toggle="modal" class="btn btn-primary">
                                  Kembali
                              </a>
                              </div>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>