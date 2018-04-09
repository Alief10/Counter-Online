<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Kontak</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="dasbord.php?page=home_admin">Dealer</a></li>

                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Dealer
                    </header>
                    <?php
                    include('admin/admin/page/menu/koneksi/koneksi.php');
                    $id = $_GET['id'];
                    $query = "SELECT * FROM tb_kontak WHERE id_kontak=$id";
                    $data = mysql_query($query);
                    $tampil = mysql_fetch_array($data);
                    ?>
                    <div class="panel-body">
                        <div class="form">
                            <form method="post" action="dasbord.php?page=proses_edit_dealer" enctype="multipart/form-data" >
                                <input type="hidden" value="<?php echo $id ?>" name="id_kontak">
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Tampilan Awal <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <td><?php echo '<img src="aset/images/kontak/'.$tampil['nama_file'].'" width="200" />'; ?></td>
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
                                    <label for="username" class="control-label col-lg-2">Nama Dealer <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " name="nama_marketing" type="text" value="<?php echo $tampil['nama_marketing']; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">No Telepon <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " name="no_tlp" type="text" value="<?php echo $tampil['no_tlp']; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Alamat <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " name="alamat" type="text" value="<?php echo $tampil['alamat']; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " name="email" type="email" value="<?php echo $tampil['email']; ?>"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="btn btn-primary" type="submit" name="edit" value="Edit"/>
                                        <a href="dasbord.php?page=kontak" data-toggle="modal" class="btn btn-primary">
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