<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="asett/img/favicon.png">

    <script language='JavaScript'>
    var txt="Login Admin Counter Online";
    var kecepatan=300;
    var segarkan=null;
    function bergerak() {
        document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>

    <!-- Bootstrap CSS -->    
    <link href="asett/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="asett/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="asett/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="asett/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="asett/css/style.css" rel="stylesheet">
    <link href="asett/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="">

    <div class="container">

      <form id="form1" class="login-form" role="form" name="form1" method="post" action="login-cek.php">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="nama" class="form-control" placeholder="Username" autofocus required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            
        </div>
      </form>
    </div>
  </body>
</html>