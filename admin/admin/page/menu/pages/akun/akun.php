<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Akun</a></li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading col-lg-6">
                            Akun
                          </header>
                          <header class="panel-heading col-lg-6" align="right">
                          <a href="dasbord.php?page=tambah_akun"><button class="btn btn-primary" type="Button">Tambah</button></a>
                        </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                              	 <th><i class="icon_profile"></i> No</th>
                                 <th><i class="icon_profile"></i> Username</th>
                                 <th><i class="icon_calendar"></i> Password</th>
                                 <th><i class="icon_calendar"></i> Level User</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <tr>
                                 <?php
                            include('admin/admin/page/menu/koneksi/koneksi.php');
                            $i = 0;
                            $query = "SELECT * FROM login";
                            $data = mysql_query($query);
                            while ($tampil = mysql_fetch_array($data)) {
                                $i++
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td align="justify"><?php echo $tampil['nama']; ?></td>
                                    <td align="justify"><?php echo $tampil['password']; ?></td>
                                    <td align="justify"><?php echo $tampil['level_user']; ?></td>
									
                                    
                                    <td>
                                        <div class="btn-group">                                                 
                                       		<a class="btn btn-danger" href="dasbord.php?page=hapus_akun&id=<?php echo $tampil['id_login']; ?>"><i class="icon_close_alt2"></i></a> 
                                          <a class="btn btn-primary" href="dasbord.php?page=edit_akun&id=<?php echo $tampil['id_login']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>                                              
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