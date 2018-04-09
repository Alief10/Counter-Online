<!-- header -->
<div class="container">
    <div class="contact">
        <div class="container">
            <div class="about-top">
                <div class="center">
                    <h2>Profil</h2>
                </div>
                <?php
                include('user/user/page/koneksi/koneksi.php');
                $query = "SELECT * FROM tb_profil";
                $data = mysql_query($query);
                while ($tampil = mysql_fetch_array($data)) {
                    ?>
                <div class="col-md-6 ">
                    <a><img src="aset/images/profil/<?php echo $tampil['nama_file']; ?>" class="img-responsive2"</a>
                </div>
                    <div class="col-md-6 ">
                        <h3><?php echo $tampil['judul_gambar']; ?></h3>
                        <p align="justify"><?php echo $tampil['keterangan']; ?></p>
                    <?php }; ?> 
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2 align="center">LOKASI<br>ASTRA MOTOR KAJEN</h2>
    <iframe src="https://www.google.com/maps/d/embed?mid=zSOpa_4Spk9U.k9zROugUccMc" width="100%" height="450"></iframe>
</div>