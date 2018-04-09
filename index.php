<!DOCTYPE HTML>
<html>
<head>
<script language='JavaScript'>
    var txt="Astra Honda Motor Kajen ";
    var kecepatan=300;
    var segarkan=null;
    function bergerak() {
        document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>
<link href="aset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="aset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- tlain -->
<link href="aset/asset/css/prettyPhoto.css" rel="stylesheet">
<link href="aset/asset/css/main.css" rel="stylesheet">
<link href="aset/asset/css/responsive.css" rel="stylesheet">
<!-- tlain -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
<script src="aset/js/jquery.min.js"></script>
<script src="aset/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
	
</head>
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="aset/images/logo.jpg" class="img-responsive5" alt=""></a>
			</div>
			
				<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-1">
							<li><a href="index.php?page=">Home</a></li>
							<li><a href="index.php?page=profil">Profil</a></li>
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" color="red">
                            	<li><a href="index.php?page=produk">Galeri</a></li>
                                <li><a href="index.php?page=harga">Harga & Angsuran</a></li>
                            </ul>
                        	</li>
							<li><a href="index.php?page=kontak">Kontak</a></li>
							<li><a href="index.php?page=konsultasi">Konsultasi</a></li>
							<li>
                        		<form class="navbar-form" method="post" action="index.php?page=search">
                            		<input name="judul_gambar" class="form-control" placeholder="Search" type="text" required>
                        		</form>
                    		</li> 
								<div class="clearfix"></div>
							                   
                     
						</ul>
				</div>
						<!-- script-for-nav -->
							<script>
								$( "span.menu" ).click(function() {
								  $( ".head-nav ul" ).slideToggle(300, function() {
									// Animation complete.
								  });
								});
							</script>
						<!-- script-for-nav -->
				
						
			
					<div class="clearfix"> </div>
		</div>
	</div>
<!-- header -->
		<div>
        	<?php include('user/user/page/page.php');?>
        </div>
<!-- end hider -->
        <script type="text/javascript">
								$(window).load(function() {
									
									$("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
								</script>
								<script type="text/javascript" src="aset/js/jquery.flexisel.js"></script>
								<span style="color: white;font-size:12pt;background-color: #BBB4B4;"><marquee direction="left" style="background: RED;font-style: italic;">Percayakan Kendaraan Anda Pada Dealer Kami, Untuk Mendapatkan Kenyamanan Dalam Berkendara</marquee></span>

<!-- footer -->
		<div class="footer">
			<div class="col-md-3 foot-1" align="center">
				<h4>About Us</h4>
				<ul>
					<li><a href="index.php?page=profil">- Profil -</a></li>
					<li><a href="index.php?page=kontak">- Kontak -</a></li>
				</ul>
			</div>
			<div class="col-md-6 foot-1" align="center">
				<h4>Dealer Astra Motor Kajen</h4>
				<ul>
					<li>||   Segera kunjungi dealer kami banyak pilihan jenis dan warna produk motor honda tersedia.</li>
					<li>||   Pilih motor impianmu, persyaratan lengkap langsung kami proses, dan motor siap kami antar kerumah anda.</li>
					<li>||   Jl Diponegoro No. 815 lingkungan sidokerti kajen (0285) 381465.</li>
				</ul>
			</div>
			<div class="col-md-3 foot-1" align="center">
				<h4>Custom Menu</h4>
				<ul>
					<li><a href="index.php?page=">- Home -</a></li>
					<li><a href="index.php?page=produk">- Galeri -</a></li>
					<li><a href="index.php?page=harga">- Harga & Angsuran -</a></li>
					<li><a href="index.php?page=konsultasi">- Konsultasi -</a></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="copyright">
				<p>Copyrights © 2016 Developer WEB Desain | Developer by <a href="#">Kelompok 6</a></p>
			</div>
		</div>
	<script src="aset/asset/js/jquery.prettyPhoto.js"></script>
    <script src="aset/asset/js/main.js"></script>
    <script src="aset/asset/js/wow.min.js"></script>
</body>
</html>