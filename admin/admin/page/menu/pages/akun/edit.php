<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Pages</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="dasbord.php?page=home_admin">Akun</a></li>

                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Akun
                    </header>
                    <?php
                    include('admin/admin/page/menu/koneksi/koneksi.php');
                    $id = $_GET['id'];
                    $query = "SELECT * FROM login WHERE id_login=$id";
                    $data = mysql_query($query);
                    $tampil = mysql_fetch_array($data);
                    ?>
                    <div class="panel-body">
                        <div class="form">
                            <form method="post" action="dasbord.php?page=proses_edit_akun" enctype="multipart/form-data" >
                                <input type="hidden" value="<?php echo $id ?>" name="id_login">
                                  <div class="form-group">
                                      <label>Username</label>
                                      <input name="nama" type="text" class="form-control" value="<?php echo $tampil['nama']; ?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Password</label>
                                      <input name="password" type="password" class="form-control" placeholder="Masukkan Password" required>
                                  </div>
								  <div class="form-group">
                                      <label for="exampleInputPassword1">Kategori</label>
                                      <select name="lvl_user" class="form-control" required>
                                        <option>-Pilih -</option>
                                        <option>Super Admin</option>
                                        <option>Admin</option>
                                      </select>
                                  </div>
                                  
                                  
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="btn btn-primary" type="submit" name="edit" value="Edit"/>
                                        <a href="dasbord.php?page=akun" data-toggle="modal" class="btn btn-primary">
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