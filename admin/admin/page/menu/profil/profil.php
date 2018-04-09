<section id="main-content">
    <section class="wrapper">
        <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa fa-bars"></i> PROFIL</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="#">Profil</a></li>
                    </ol>
                </div>
            </div>
        <!--main content start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                     Data Profil
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
                            $query = "SELECT * FROM tb_profil";
                            $data = mysql_query($query);
                            while ($tampil = mysql_fetch_array($data)) {
                                ?>
                                <tr>
                                    <td align="justify"><?php echo $tampil['judul_gambar']; ?></td>
                                    <td align="justify"><img src="aset/images/profil/<?php echo $tampil['nama_file']; ?>" width="200px"</td>
                                    <td align="justify"><?php echo $tampil['keterangan']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                      <a class="btn btn-primary" href="dasbord.php?page=edit_profil&id=<?php echo $tampil['id_profil']; ?>"><i class="icon_bag_alt" title="Edit"></i></a>                                                    
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
    