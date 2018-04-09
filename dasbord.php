<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['nama'])) {
        header('Location:admin/index.php');
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    

    <script language='JavaScript'>
    var txt=" Admin Counter Online ";
    var kecepatan=300;
    var segarkan=null;
    function bergerak() {
        document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
    </script>


    <!-- Bootstrap CSS -->    
    <link href="admin/asett/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin/asett/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="admin/asett/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="admin/asett/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="admin/asett/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="admin/asett/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="admin/asett/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="admin/asett/css/owl.carousel.css" type="text/css">
	<link href="admin/asett/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="admin/asett/css/fullcalendar.css">
	<link href="admin/asett/css/widgets.css" rel="stylesheet">
    <link href="admin/asett/css/style.css" rel="stylesheet">
    <link href="admin/asett/css/style-responsive.css" rel="stylesheet" />
	<link href="admin/asett/css/xcharts.min.css" rel=" stylesheet">	
	<link href="admin/asett/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo"><span class="lite">Counter</span> Online</a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="admin/asett/img/logo.png" width="30" height="30">
                            </span>
                            <span class="username">hy, <?php echo $_SESSION['nama']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="admin/logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a class="" href="dasbord.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="dasbord.php?page=profil">
                          <i class="icon_genius"></i>
                          <span>Profil</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Produk</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="dasbord.php?page=galeri">Produk</a></li>
                          <li><a class="" href="dasbord.php?page=aksesoris">Aksesoris</a></li>
                      </ul>
                  </li>
                 <!-- <li>
                      <a class="" href="dasbord.php?page=kontak">
                          <i class="icon_genius"></i>
                          <span>Kontak</span>
                      </a>
                  </li>!-->
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="dasbord.php?page=konsultasi">Konsultasi</a></li>
                          <!--<li><a class="" href="dasbord.php?page=berita">Berita & Event</a></li>-->
                          <li><a class="" href="dasbord.php?page=akun">Akun</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
          <div id="center-content">
                <?php include('admin/admin/page/page.php');?>
          </div>
      </aside>
      <!--sidebar end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="admin/asett/js/jquery.js"></script>
	<script src="admin/asett/js/jquery-ui-1.10.4.min.js"></script>
    <script src="admin/asett/js/jquery-1.8.3.min.js"></script>
    <script type="admin/text/javascript" src="asett/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="admin/asett/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="admin/asett/js/jquery.scrollTo.min.js"></script>
    <script src="admin/asett/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="admin/asett/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="admin/asett/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="admin/asett/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="admin/asett/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="admin/asett/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="admin/asett/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="admin/asett/js/calendar-custom.js"></script>
	<script src="admin/asett/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="admin/asett/js/jquery.customSelect.min.js" ></script>
	<script src="admin/asett/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="admin/asett/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="admin/asett/js/sparkline-chart.js"></script>
    <script src="admin/asett/js/easy-pie-chart.js"></script>
	<script src="admin/asett/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="admin/asett/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="admin/asett/js/xcharts.min.js"></script>
	<script src="admin/asett/js/jquery.autadmin/osize.min.js"></script>
	<script src="admin/asett/js/jquery.placeholder.min.js"></script>
	<script src="admin/asett/js/gdp-data.js"></script>	
	<script src="admin/asett/js/morris.min.js"></script>
	<script src="admin/asett/js/sparklines.js"></script>	
	<script src="admin/asett/js/charts.js"></script>
	<script src="admin/asett/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
