<section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i> PAGES</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Berita & Event</a></li>
            
          </ol>
        </div>
      </div>
              <!-- page start-->
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Berita & Event
                          </header>
                          <div class="panel-body">
                              <form role="form" action="dasbord.php?page=simpan_berita" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Judul Berita</label>
                                      <input name="judul_gambar" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Gambar" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">Gambar</label>
                                      <input name="nama_file" type="file" id="exampleInputFile" witdh="200px" height="200">
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Isi</label>
                                      <textarea class="form-control ckeditor" name="isi" rows="4" placeholder="Masukkan Isi Gambar" required></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Keterangan</label>
                                      <textarea class="form-control ckeditor" name="keterangan" rows="6" placeholder="Masukkan Keterangan Gambar" required></textarea>
                                  </div>
                                  <input class="btn btn-primary" type="submit" name="tambah" value="Simpan"/>
                                  <a href="dasbord.php?page=berita" data-toggle="modal" class="btn btn-primary">
                            Kembali
                        </a>
                              </form>
                          </div>
                      </section>
                  </div>
                  </div>
                  </section>
                  </section>