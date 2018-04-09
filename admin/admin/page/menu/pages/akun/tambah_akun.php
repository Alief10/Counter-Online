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
                          <header class="panel-heading">
                              Tambah Akun
                          </header>
                          <div class="panel-body">
                              <form role="form" method="post" action="dasbord.php?page=simpan_akun">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Username</label>
                                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
									  <div class="form-group">
                                      <label for="exampleInputPassword1">Kategori</label>
                                      <select name="lvl_user" class="form-control" required>
                                        <option>-Pilih-</option>
                                        <option>Super Admin</option>
                                        <option>Admin</option>
                                      </select>
                                  </div>
                                      
                                  </div>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                   <a href="dasbord.php?page=akun" data-toggle="modal" class="btn btn-primary">
                            Kembali
                            </a>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>