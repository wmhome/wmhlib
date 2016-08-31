<?php
include("../libs/php/funcions.php");
session_start();
ob_start();

if (!$_SESSION['usuarioa'] || $_SESSION['usuarioa']=="Invitado"){
	header("Location:index.php");
}

$link=conecta();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WhiteMind Library</title>

    <!-- WM CSS Lib -->
    <link href="../css/wmcsslib.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div id="page">
	  	<header>
	  		<?php include("layout/header.php");?>
	  	</header>
	  	<div class="page-wrap" id="page-content-wrapper">
		  	<div class="container">
		  		<div class="row">
		  			<div class="col-sm-12">
		  				<img src="../assets/img/cerbell.png" class="img-responsive">
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-sm-12">
		  				<div class="page-header">
						  <h1>WhiteMind Backoffice <small>v.1.0.1</small></h1>
						</div>
		  			</div>
		  		</div>
		  	</div>
	  	</div>
	  	
	  	<!-- Side nav for responsive views -->
	    <div class="sb-slidebar sb-right sb-style-overlay sb-width-wide plm prm pbm mt52">
	      <?php include("layout/sidenav-right.html");?>
	    </div>
	    <!-- Side nav -->
	  	<footer class="site-footer">
	  		<div class="container">
	  			<p class="text-muted text-center mtl">&copy; WhiteMind - <a href="http://www.whitemind.es" target="_blank">www.whitemind.es</a> - <a href="http://www.wmhome.es" target="_blank">www.wmhome.es</a></p>
	  		</div>
	  	</footer>
  	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/components/slidebars/slidebars.js"></script>
    <script>
	  (function($) {
	    $(document).ready(function() {
	      $.slidebars({
	        scrollLock: true // true or false
	      });
	    });
	  }) (jQuery);
	</script>
  </body>
</html>