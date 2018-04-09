<section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i> PRODUK</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Harga & Angsuran</a></li>
          </ol>
          <br><form class="navbar-form" method="post" action="dasbord.php?page=pencarian_harga">
                        <input name="jenis_type" class="form-control" placeholder="pencarian harga" type="text">
                        </form></br>
        </div>
      </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading col-lg-6">
                              Harga & Angsuran
                          </header>
                          <header class="panel-heading col-lg-6" align="right">
                          <a href="dasbord.php?page=tambah_harga"><button class="btn btn-primary" type="Button">Tambah</button></a>
                        </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                  <th rowspan=2><i class="icon_profile"></i> Action</th>
                                 <th rowspan=2><i class="icon_profile"></i> No</th>
                                 <th rowspan=2><i class="icon_profile"></i> Jenis/Type</th>
                                 <th rowspan=2><i class="icon_calendar"></i> Uang Muka</th>
                                 <th colspan=6><i class="icon_pin"></i> Angsuran Per Bulan
                                    <tr>
                                    <th>1 Bln</th>
                                    <!--<th>2 Bln</th>-->
                                    </tr>
                                 </th>
                                 
                              </tr>
                              <?php
                            include("admin/koneksi.php"); //panggil script koneksi
include_once("ClassPaging.php"); //Panggil classPaging

//buat batas berita yang akan ditampilkan dalam setiap halaman
$limit = 5; 

//buat query
$query = new CnnNav($limit,'tb_harga','*','id_harga');

//jalankan querynya
$result = $query ->getResult();
//perintah diatas sama dengan perintah mysql_query
                            $j = 0;
while($tampil=mysql_fetch_array($result)){
                              $j++
                                ?>
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                        <a class="btn btn-danger" href="dasbord.php?page=hapus_harga&id=<?php echo $tampil['id_harga']; ?>"><i class="icon_close_alt2"></i></a>
                                      <a class="btn btn-primary" href="dasbord.php?page=edit_harga&id=<?php echo $tampil['id_harga']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>                                                    
                                        </div>
                                    </td>
                                    <td><?php echo $j; ?></td>
                                    <td align="left">
                                    <?php echo $tampil['jenis_type']; ?> <br><br>
                                    <?php echo $tampil['harga_utama']; ?>
                                    </td>
                                    <td align="left">
                                    <?php echo $tampil['uang_muka1']; ?><br>
                                    <?php echo $tampil['uang_muka2']; ?><br>
                                    <?php echo $tampil['uang_muka3']; ?>
                                    </td>
                                    <td align="left">
                                    <?php echo $tampil['bln_11_1']; ?><br>
                                    <?php echo $tampil['bln_11_2']; ?><br>
                                    <?php echo $tampil['bln_11_3']; ?>
                                    </td>
                                    <td align="left">
                                    <?php echo $tampil['bln_2_1']; ?><br>
                                    <?php echo $tampil['bln_2_2']; ?><br>
                                    <?php echo $tampil['bln_2_3']; ?>
									</td>
                                    
                                </tr>
                                <?php }; ?> 
                        
                      </tr>
                      <tr>
    <td colspan="12" align="center" style=" height: 30px; font-size: 20px;">
    <?php 
      $query->printNav(); //Cetak paging
    ?>
  </td>
  </tr>
                        </table>
                      </section>
                  </div>
              </div>
          </section>
      </section>