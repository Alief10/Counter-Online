<section id="main-content">
          <section class="wrapper">            
              <!--start slide show-->
              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Home</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>                       
                    </ol>
                </div>
            </div>
            
                <!--<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                      <br><form class="navbar-form" method="post" action="dasbord.php?page=pencarian_slide">
                        <input name="judul_gambar" class="form-control" placeholder="pencarian slide" type="text">
                        </form></br>
                          <header class="panel-heading col-lg-6">
                            Slide 
                          </header>
                          <header class="panel-heading col-lg-6" align="right">
                          <a href="dasbord.php?page=tambah_slide"><button class="btn btn-primary" type="Button">Tambah</button></a>
                        </header>

                          
                          <table class="table table-striped table-advance table-hover">
                         <tbody class="left">
                            <tr>
                                <th><i class="icon_id-2"></i>      Judul</th>
                                <th><i class="icon_id-2"></i>      Gambar</th>
                                <th><i class="icon_id-2_alt"></i>  Keterangan</th>
                                <th><i class="icon_cogs"></i>      Action</th>
                            </tr>
                            <?php
                            include('admin/admin/page/menu/koneksi/koneksi.php');
                            $query = "SELECT * FROM tb_slide";
                            $data = mysql_query($query);
                            while ($tampil = mysql_fetch_array($data)) {
                                ?>
                                <tr>
                                    <td align="justify"><?php echo $tampil['judul_gambar']; ?></td>
                                    <td align="justify"><?php echo '<img src="aset/images/slide/'.$tampil['nama_file'].'" width="200" />'; ?></td>
                                    <td align="justify"><?php echo $tampil['keterangan']; ?></td>
                                    <td>
                                        <div class="btn-group">                                                 
                                          <a class="btn btn-danger" href="dasbord.php?page=hapus_slide&id=<?php echo $tampil['id_slide']; ?>"><i class="icon_close_alt2"></i></a> 
                                        <a class="btn btn-primary" href="dasbord.php?page=edit_slide&id=<?php echo $tampil['id_slide']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php }; ?> 
                            </tbody>
                        </table>
                      </section>
                  </div>
              </div>

              <!-- end slide show -->
              <!--<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                      <br><form class="navbar-form" method="post" action="dasbord.php?page=pencarian_produkbaru">
                        <input name="judul_gambar" class="form-control" placeholder="pencarian produk baru" type="text">
                        </form></br>
                           <header class="panel-heading col-lg-6">
                            Produk Baru 
                          </header>
                          <header class="panel-heading col-lg-6" align="right">
                          <a href="dasbord.php?page=tambah_produkbaru"><button class="btn btn-primary" type="Button">Tambah</button></a>
                        </header>

                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                <th rowspan=2><i class="icon_profile"></i> No</th>
                                 <th rowspan=2><i class="icon_profile"></i> Judul</th>
                                 <th rowspan=2><i class="icon_calendar"></i> Gambar</th>
                                 <th rowspan=2><i class="icon_calendar"></i> Keterangan</th>
								 <th rowspan=2><i class="icon_calendar"></i> Harga</th>
                                 <th rowspan=2><i class="icon_profile"></i> Action</th>
                                </tr>
                              <tr>
                                  <?php
                            include("admin/koneksi.php"); //panggil script koneksi
include_once("produkbaru/ClassPaging.php"); //Panggil classPaging

//buat batas berita yang akan ditampilkan dalam setiap halaman
$limit = 3; 

//buat query
$query = new CnnNav($limit,'tb_aksesoris','*','id_aksesoris');

//jalankan querynya
$result = $query ->getResult();
//perintah diatas sama dengan perintah mysql_query
                            $j = 0;
while($tampil=mysql_fetch_array($result)){
                              $j++
                                ?>
                                <tr>
                                    <td><?php echo $j; ?></td>
                                    <td align="left"><?php echo $tampil['judul_gambar']; ?></td>
                                    <td align="left"><?php echo '<img src="aset/images/produk/'.$tampil['nama_file'].'" width="200" />'; ?></td>
                                    <td align="left"><?php echo $tampil['keterangan']; ?></td>
                                    <td align="left"><?php echo $tampil['harga']; ?></td>
                                    <td>
                                        <div class="btn-group">                                                 
                                          <a class="btn btn-danger" href="dasbord.php?page=hapus_produkbaru&id=<?php echo $tampil['id_produk']; ?>"><i class="icon_close_alt2"></i></a> 
                                        <a class="btn btn-primary" href="dasbord.php?page=edit_produkbaru&id=<?php echo $tampil['id_produk']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>
                                        </div>
                                        <?php }; ?> 
                                    </td>
                                </tr>
                                  <tr>
    <td colspan="12" align="center" style=" height: 30px; font-size: 20px;">
    <?php 
      $query->printNav(); //Cetak paging
    ?>
  </td>
  </tr>                      
                           </tbody>
                           <tr>
                        <td colspan="8">
                        </td>
                      </tr>
                        </table>
                      </section>
                  </div>
              </div>-->

          </section>
      </section>