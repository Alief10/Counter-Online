
<?php
//home menu
	if(@$_GET['page']=="home"){ include("home.php");}
	if(@$_GET['page']=="about_us"){ include("aboutus.php");}
	if(@$_GET['page']=="merk"){ include("gallery.php");}
	if(@$_GET['page']=="aksesoris"){ include("license.html");}
	if(@$_GET['page']=="contact_us"){ include("contact.html");}

// produk merk hp
if(@$_GET['page']=="lenovo"){ include("merk/lenovo/lenovo.php");}
if(@$_GET['page']=="samsung"){ include("merk/samsung/samsung.php");}
if(@$_GET['page']=="nokia"){ include("merk/nokia/nokia.php");}
if(@$_GET['page']=="evercross"){ include("merk/evercross/evercross.php");}
if(@$_GET['page']=="oppo"){ include("merk/oppo/oppo.php");}
if(@$_GET['page']=="mito"){ include("merk/mito/mito.php");}
if(@$_GET['page']=="apple"){ include("merk/apple/apple.php");}
if(@$_GET['page']=="vivo"){ include("merk/vivo/vivo.php");}
if(@$_GET['page']=="asus"){ include("merk/asus/asus.php");}
	
	?>