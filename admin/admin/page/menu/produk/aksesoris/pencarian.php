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

            <div class="row">
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
                                 <th rowspan=2><i class="icon_profile"></i> Judul_gambar</th>
                                 <th rowspan=2><i class="icon_calendar"></i> Gambar</th>
                                 <th rowspan=2><i class="icon_calendar"></i> Keterangan</th>
                                 <th rowspan=2><i class="icon_profile"></i> Action</th>
                                </tr>
                              <tr>
                    <?php
                    include('admin/admin/page/menu/koneksi/koneksi.php');
                    $i = 0;
                    $nama= $_POST['judul_gambar'];
                    $query = "SELECT * FROM tb_produk where judul_gambar like '%$nama%'";
                    $data = mysql_query($query);
                    while ($tampil = mysql_fetch_array($data)) {
                      $i++
                    ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td align="left"><?php echo $tampil['judul_gambar']; ?></td>
                                    <td align="left"><?php echo '<img src="aset/images/produk/'.$tampil['nama_file'].'" width="200" />'; ?></td>
                                    <td align="left"><?php echo $tampil['keterangan']; ?></td>
                                    <td>
                                        <div class="btn-group">                                                 
                                          <a class="btn btn-danger" href="dasbord.php?page=hapus_produkbaru&id=<?php echo $tampil['id_produk']; ?>"><i class="icon_close_alt2"></i></a> 
                                        <a class="btn btn-primary" href="dasbord.php?page=edit_produkbaru&id=<?php echo $tampil['id_produk']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php }; ?>                          
                           </tbody>
                           <tr>
                        <td colspan="8">
                        </td>
                      </tr>
                        </table>
                      </section>
                  </div>
              </div>

          </section>
      </section>