 <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Galeri</h2>
            </div>
            <h3 align="center" color="red">Pilih Tipe Produk</h3>
            <ul class="portfolio-filter text-center">
                    <form class="navbar-form" method="post" action="index.php?page=cari_tipe">
                            <button name="kategori" class="btn btn-default" type="submit">All Produk</button>
                            <button name="kategori" class="btn btn-default" value="matic" type="submit">Matic</button>
                            <button name="kategori" class="btn btn-default" value="bebek" type="submit">Bebek</button>
                            <button name="kategori" class="btn btn-default" value="sport" type="submit">Sport</button>
                    </form>
            </ul>
        <div class="row">
                <div class="portfolio-items">
                <?php
                    include('user/user/page/koneksi/koneksi.php');
                    $type= $_POST['kategori'];
                    $query = "SELECT * FROM tb_galeri where kategori like '%$type%'";
                    $data = mysql_query($query);
                    while ($tampil = mysql_fetch_array($data)) {
                ?>
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <?php echo '<img src="aset/images/galeri/'.$tampil['nama_file']. '" class="img-responsive3" >'; ?>
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <?php echo $tampil['judul_gambar']; ?>
                                    <?php echo '<img src="aset/images/galeri/'.$tampil['nama_file']. '" class="img-responsive6" >'; ?>
                                    <form class="navbar-form" method="post" action="index.php?page=tampil_galeri">
                                    <button name="judul_gambar" class="btn btn-default" value="<?php echo $tampil['judul_gambar']; ?>" type="submit">Read More</button>
                                    </form>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    <?php }; ?>
                </div>
            </div> 
     </div>
    </section><!--/#portfolio-item-->