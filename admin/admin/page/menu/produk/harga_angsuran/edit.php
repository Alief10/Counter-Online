<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Produk</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="dasbord.php?page=home_admin">Harga & Angsuran</a></li>

                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Harga & Angsuran
                    </header>
                    <?php
                    include('admin/admin/page/menu/koneksi/koneksi.php');
                    $id = $_GET['id'];
                    $query = "SELECT * FROM tb_harga WHERE id_harga=$id";
                    $data = mysql_query($query);
                    $tampil = mysql_fetch_array($data);
                    ?>
                    <div class="panel-body">
                        <div class="form">
                            <form method="post" action="dasbord.php?page=proses_edit_harga" enctype="multipart/form-data" >
                                <input type="hidden" value="<?php echo $id ?>" name="id_harga">
                                 <form role="form" action="dasbord.php?page=simpan_harga" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
                                  <div class="form-group">
                                      <label>Jenis / Type</label>
                                      <input name="jenis" type="text" class="form-control" value=" <?php echo $tampil['jenis_type']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Harga Pokok</label>
                                      <input name="harga_utama" type="text" class="form-control" value="<?php echo $tampil['harga_utama']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Uang Muka</label>
                                      <input name="uang_muka1" type="text" class="form-control" value="<?php echo $tampil['uang_muka1']; ?>" required>
                                      <input name="uang_muka2" type="text" class="form-control" value="<?php echo $tampil['uang_muka2']; ?>" required>
                                      <input name="uang_muka3" type="text" class="form-control" value="<?php echo $tampil['uang_muka3']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Angsuran 1 Bulan</label>
                                      <input name="11_bln_1" type="text" class="form-control" value="<?php echo $tampil['bln_11_1']; ?>" required>
                                      <input name="11_bln_2" type="text" class="form-control" value="<?php echo $tampil['bln_11_2']; ?>" required>
                                      <input name="11_bln_3" type="text" class="form-control" value="<?php echo $tampil['bln_11_3']; ?>" required>
                                  </div>
                                  <!--<div class="form-group">
                                      <label>Angsuran 2 Bulan</label>
                                      <input name="17_bln_1" type="text" class="form-control" value="<?php echo $tampil['bln_2_1']; ?>" required>
                                      <input name="17_bln_2" type="text" class="form-control" value="<?php echo $tampil['bln_2_2']; ?>" required>
                                      <input name="17_bln_3" type="text" class="form-control" value="<?php echo $tampil['bln_2_3']; ?>" required>
                                  </div>-->
                                 
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="btn btn-primary" type="submit" name="edit" value="Edit"/>
                                        <a href="dasbord.php?page=harga" data-toggle="modal" class="btn btn-primary">
                                            Kembali
                                        </a>

                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>