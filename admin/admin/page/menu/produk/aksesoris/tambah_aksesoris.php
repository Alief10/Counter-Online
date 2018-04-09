<section id="main-content">
          <section class="wrapper">            
              <!--start slide show-->
              <div class="row">
                
            </div>
              <!-- page start-->
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Produk Aksesoris
                          </header>
                          <div class="panel-body">
                              <form role="form" action="dasbord.php?page=simpan_aksesoris" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Judul Gambar</label>
                                      <input name="judul_gambar" type="text" class="form-control" placeholder="Masukkan Judul Gambar" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">Nama</label>
                                      <input name="nama_file" type="file" id="exampleInputFile" witdh="200px" height="200">
                                      <p class="help-block">Pilih Gambar</p>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Keterangan</label>
                                      <textarea name="keterangan"  class="form-control" placeholder="Masukkan Keterangan" required></textarea>
                                  </div>
								   <div class="form-group">
                                      <label for="exampleInputEmail1">Harga</label>
                                      <input name="harga" type="text" class="form-control" placeholder="Masukkan Judul Gambar" required>
                                  </div>
								  
                                  <input class="btn btn-primary" type="submit" name="tambah" value="Simpan"/>
                                  <a href="dasbord.php?page=aksesoris" data-toggle="modal" class="btn btn-primary">
                            Kembali
                        </a>
                              </form>
                          </div>

                  </section>
                  </div>
                  </div>
                  </section>
                  </section>