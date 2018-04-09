<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i>Home</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="dasbord.php?page=home_admin">Produk Baru</a></li>

                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Produk Baru
                    </header>
                    <?php
                    include('admin/admin/page/menu/koneksi/koneksi.php');
                    $id = $_GET['id'];
                    $query = "SELECT * FROM tb_aksesoris WHERE id_aksesoris=$id";
                    $data = mysql_query($query);
                    $tampil = mysql_fetch_array($data);
                    ?>
                    <div class="panel-body">
                        <div class="form">
                            <form method="post" action="dasbord.php?page=proses_edit_produkbaru" enctype="multipart/form-data" >
                                <input type="hidden" value="<?php echo $id ?>" name="id_produk">
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Judul Gambar<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " name="judul_gambar" type="text" value="<?php echo $tampil['judul_gambar']; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Tampilan Awal <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <td><?php echo '<img src="aset/images/produk/'.$tampil['nama_file'].'" width="200" />'; ?></td>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Ubah Gambar <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="file" id="nama_file" name="nama_file" />
                                        <p class="help-block">Masukkan File Gambar Baru.</p>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Keterangan<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " name="keterangan" type="text" value="<?php echo $tampil['keterangan']; ?>"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="btn btn-primary" type="submit" name="edit" value="Edit"/>
                                        <a href="dasbord.php?page=" data-toggle="modal" class="btn btn-primary">
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