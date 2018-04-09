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
                                    <th>11 Bln</th>
                                    <th>17 Bln</th>
                                    <th>23 Bln</th>
                                    <th>29 Bln</th>
                                    <th>35 Bln</th>
                                    <th>47 Bln</th>
                                    </tr>
                                 </th>
                                 
                              </tr>
                              <?php
                    include('admin/admin/page/menu/koneksi/koneksi.php');
                    $i = 0;
                    $jenis= $_POST['jenis_type'];
                    $query = "SELECT * FROM tb_harga where jenis_type like '%$jenis%'";
                    $data = mysql_query($query);
                    while ($tampil = mysql_fetch_array($data)) {
                      $i++
                                ?>
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                        <a class="btn btn-danger" href="dasbord.php?page=hapus_harga&id=<?php echo $tampil['id_harga']; ?>"><i class="icon_close_alt2"></i></a>
                                      <a class="btn btn-primary" href="dasbord.php?page=edit_harga&id=<?php echo $tampil['id_harga']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>                                                    
                                        </div>
                                    </td>
                                    <td><?php echo $i; ?></td>
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
                                    <?php echo $tampil['bln_17_1']; ?><br>
                                    <?php echo $tampil['bln_17_2']; ?><br>
                                    <?php echo $tampil['bln_17_3']; ?>
                                    </td>
                                    <td align="left">
                                    <?php echo $tampil['bln_23_1']; ?><br>
                                    <?php echo $tampil['bln_23_2']; ?><br>
                                    <?php echo $tampil['bln_23_3']; ?>
                                    </td>
                                    <td align="left">
                                    <?php echo $tampil['bln_29_1']; ?><br>
                                    <?php echo $tampil['bln_29_2']; ?><br>
                                    <?php echo $tampil['bln_29_3']; ?>
                                    </td>
                                    <td align="left">
                                    <?php echo $tampil['bln_35_1']; ?><br>
                                    <?php echo $tampil['bln_35_2']; ?><br>
                                    <?php echo $tampil['bln_35_3']; ?>
                                    </td>
                                    <td align="left">
                                    <?php echo $tampil['bln_47_1']; ?><br>
                                    <?php echo $tampil['bln_47_2']; ?><br>
                                    <?php echo $tampil['bln_47_3']; ?>
                                    </td>
                                    
                                </tr>
                                <?php }; ?> 
                        
                      </tr>
                        </table>
                      </section>
                  </div>
              </div>
          </section>
      </section>