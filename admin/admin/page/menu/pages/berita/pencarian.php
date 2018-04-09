<section id="main-content">
          <section class="wrapper">  
<div class="row">
                <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Pages</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Berita & Event</a></li>     
                    </ol>
                     <br><form class="navbar-form" method="post" action="dasbord.php?page=pencarian_berita">
                        <input name="judul_gambar" class="form-control" placeholder="pencarian berita" type="text">
                        </form></br>
                </div>
            </div>
            
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading col-lg-6">
                           Berita & Event
                          </header>
                          <header class="panel-heading col-lg-6" align="right">
                              <a href="dasbord.php?page=tambah_berita"><button class="btn btn-primary" type="Button">Tambah</button></a>
                          </header>
                          
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                <th><i class="icon_calendar"></i> No</th>
                                 <th><i class="icon_calendar"></i> Judul Berita</th>
                                 <th><i class="icon_calendar"></i> Gambar</th>
                                 <th><i class="icon_calendar"></i> Isi</th>
                                 <th><i class="icon_pin"></i> Keterangan</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                    <?php
                    include('admin/admin/page/menu/koneksi/koneksi.php');
                    $i = 0;
                    $nama= $_POST['judul_gambar'];
                    $query = "SELECT * FROM tb_berita where judul_gambar like '%$nama%'";
                    $data = mysql_query($query);
                    while ($tampil = mysql_fetch_array($data)) {
                      $i++
                    ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td align="justify"><?php echo $tampil['judul_gambar']; ?></td>
                                    <td align="justify"><?php echo '<img src="aset/images/berita/'.$tampil['nama_file'].'" width="200" />'; ?></td>
                                    <td align="justify"><?php echo $tampil['isi']; ?></td>
                                    <td align="justify"><?php echo $tampil['keterangan']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                        <a class="btn btn-danger" href="dasbord.php?page=hapus_berita&id=<?php echo $tampil['id_berita']; ?>"><i class="icon_close_alt2"></i></a>
                                      <a class="btn btn-primary" href="dasbord.php?page=edit_berita&id=<?php echo $tampil['id_berita']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>                                                    
                                        </div>
                                    </td>
                                </tr>
                                <?php }; ?>
                                                            
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>

              </section>
      </section>