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
        <h2 align="center">Konsultasi</h2>
              <!-- page start-->
              <div class="col-lg-12">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Komentar
                                  </header>
                                  <div class="panel-body">
                                      <div style="overflow:auto;width:auto;height:500px;" >
                                      <?php
                                                include('admin/admin/page/menu/koneksi/koneksi.php');
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
                                      </div>
                                  </div>
                                  <div align="right">
                                   <a href="dasbord.php?page=memilih_konsultasi" data-toggle="modal" class="btn btn-primary">Hapus</a>
                                  </div>
                                  
                              </section>
              <!-- end star -->
                <section class="panel">
                          <header class="panel-heading">
                              Masukkan Komentar Anda
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form" method="post" action="dasbord.php?page=simpan_konsultasi">
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 control-label">Nama</label>
                                      <div class="col-lg-10">
                                          <input type="text" name="nama" class="form-control" id="inputEmail1" value="Admin" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputPassword1" class="col-lg-2 control-label">Answer</label>
                                      <div class="col-lg-10">
                                          <input type="text" name="email" class="form-control" id="inputPassword1" value="Reply ( )" required>
                                          <p class="help-block">*Masukkan Nama Reply dalam tanda kurung*</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-lg-2">Komentar</label>
                                      <div class="col-lg-10">
                                          <textarea type="text" name="posting" class="form-control ckeditor" placeholder="Masukkan Komentar Anda" rows="5" required></textarea>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">Post</button>
                                         
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
              <!-- page end-->
          </section>
      </section>