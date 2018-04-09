<section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i> GALERI</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Galeri</a></li>
            <li><i class="fa fa-bars"></i>Produk</li>
            
          </ol>
        </div>
      </div>
              <!-- page start-->
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Galeri
                          </header>
                          <div class="panel-body">
                              <form role="form" action="dasbord.php?page=simpan_galeri" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Judul Gambar</label>
                                      <input name="judul_gambar" type="text" class="form-control" placeholder="Masukkan Judul Gambar" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">Gambar</label>
                                      <input name="nama_file" type="file" id="exampleInputFile" witdh="200px" height="200">
                                      <p class="help-block">Pilih Gambar</p>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Harga</label>
                                      <input name="harga" type="text" class="form-control" placeholder="Masukkan Harga " required>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Merk</label>
                                      <select name="merk" class="form-control" required>
                                        <option>-Pilih Merk-</option>
                                        <option>Samsung</option>
                                        <option>Lenovo</option>
                                        <option>Nokia</option>
                                      </select>
                                  </div>
								  <div class="form-group">
                                      <label for="exampleInputPassword1">Kategori</label>
                                      <select name="kategori" class="form-control" required>
                                        <option>-Pilih kategori-</option>
                                        <option>Handphone</option>
                                        <option>Aksesoris</option>
                                        <option>Tablet</option>
                                        
                                      </select>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Mesin</label>
                                      <input name="mesin" type="text" class="form-control" placeholder="Masukkan Data " required>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Warna</label>
                                      <input name="warna" type="text" class="form-control" placeholder="Masukkan Warna " required>
                                  </div>
                                 <!-- <div class="form-group">
                                      <label for="exampleInputEmail1">Tangki</label>
                                      <input name="tangki" type="text" class="form-control" placeholder="Masukkan Kapasitas Tangki" required>
                                  </div>-->
                                  
                                  <input class="btn btn-primary" type="submit" name="tambah" value="Simpan"/>
                                  <a href="dasbord.php?page=galeri" data-toggle="modal" class="btn btn-primary">
                            Kembali
                        </a>
                              </form>
                          </div>
                      </section>
                  </div>
                  </div>
                  </section>
                  </section>