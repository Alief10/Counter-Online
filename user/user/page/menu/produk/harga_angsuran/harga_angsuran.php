<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Harga & Angsuran</h2>
            </div>
        </div>
</section>
<section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
        </div>
      </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Lihat Harga & Angsuran
                          </header>
                          <table class="table table-striped table-advance table-hover" >
                           <tbody>
                              <tr>
                              
                              <th rowspan=2><center>No</center></th>
                                 <th rowspan=2><center> Jenis/Type Motor</center></th>
                                 <th rowspan=2><center> Uang Muka</center></th>
                                 <th colspan=6><center> Angsuran Per Bulan</center></th>
                                 </tr>

                					<tr>
                                    <th><center>11 Bln</center></th>
                                    <th><center>17 Bln</center></th>
                                    <th><center>23 Bln</center></th>
                                    <th><center>29 Bln</center></th>
                                    <th><center>35 Bln</center></th>
                                    <th><center>47 Bln</center></th>
                                    </tr>
                                 </th>
                              </tr>
                              <?php
                            include('user/user/page/koneksi/koneksi.php');
                            $i = 0;
                            $query = "SELECT * FROM tb_harga";
                            $data = mysql_query($query);
                            while ($tampil = mysql_fetch_array($data)) {
                              $i++
                                ?>
                                <tr>
                                    <td><center><?php echo $i; ?></center></td>
                                    
                                        <div class="btn-group">                                                    
                                        </div>
                                    
                                    <td align="center"><b>
                                    <?php echo $tampil['jenis_type']; ?> <br><br>
                                    <?php echo $tampil['harga_utama']; ?>
                                    </b></td>
                                    <td align="center">
                                    <?php echo $tampil['uang_muka1']; ?><br>
                                    <?php echo $tampil['uang_muka2']; ?><br>
                                    <?php echo $tampil['uang_muka3']; ?>
                                    </td>
                                    <td align="center">
                                    <?php echo $tampil['bln_11_1']; ?><br>
                                    <?php echo $tampil['bln_11_2']; ?><br>
                                    <?php echo $tampil['bln_11_3']; ?>
                                    </td>
                                    <td align="center">
                                    <?php echo $tampil['bln_17_1']; ?><br>
                                    <?php echo $tampil['bln_17_2']; ?><br>
                                    <?php echo $tampil['bln_17_3']; ?>
                                    </td>
                                    <td align="center">
                                    <?php echo $tampil['bln_23_1']; ?><br>
                                    <?php echo $tampil['bln_23_2']; ?><br>
                                    <?php echo $tampil['bln_23_3']; ?>
                                    </td>
                                    <td align="center">
                                    <?php echo $tampil['bln_29_1']; ?><br>
                                    <?php echo $tampil['bln_29_2']; ?><br>
                                    <?php echo $tampil['bln_29_3']; ?>
                                    </td>
                                    <td align="center">
                                    <?php echo $tampil['bln_35_1']; ?><br>
                                    <?php echo $tampil['bln_35_2']; ?><br>
                                    <?php echo $tampil['bln_35_3']; ?>
                                    </td>
                                    <td align="center">
                                    <?php echo $tampil['bln_47_1']; ?><br>
                                    <?php echo $tampil['bln_47_2']; ?><br>
                                    <?php echo $tampil['bln_47_3']; ?>
                                    </td>
                                </tr>
                                <?php }; ?> 
                        <td colspan="12">  
                        </td>
                      </tr>
                        </table>
                      </section>
                  </div>
              </div>
          </section>
      </section>