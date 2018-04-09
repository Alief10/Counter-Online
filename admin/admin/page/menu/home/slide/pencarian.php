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
                    $i = 0;
                    $nama= $_POST['judul_gambar'];
                    $query = "SELECT * FROM tb_slide where judul_gambar like '%$nama%'";
                    $data = mysql_query($query);
                    while ($tampil = mysql_fetch_array($data)) {
                      $i++
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

