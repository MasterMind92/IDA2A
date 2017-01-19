<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profil</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/flat-ui.min.css">
    	<link rel="stylesheet" type="text/css" href="dist/css/obv.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Forum</h1>
		
		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
				
				<!--Region du menu-->
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php 
						include 'menu.php';
					 ?>
				</div>
				
				<!--Region de la photo de profil-->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<img src="#" class="img-responsive" alt="Image">
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<ul>
							<li>Pseudo :</li>
							<li>e-mail :</li>
							<li>Tel. :</li>
						</ul>
					</div>
				</div>
				<!--Region des info (infos tiré dans la BDD)-->
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4 class="text-center">Informations personnelles</h4>	
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4 class="text-center">Centres d'intérêts</h4>
				</div>
			</div>
		</div>
		<?php 
			include 'footer.php';
		 ?>
		<!-- jQuery -->
		<script src="dist/js/vendor/jquery.min.js"></script>
    	<script src="dist/js/flat-ui.min.js"></script>
    	<script src="dist/js/vendor/video.js"></script>
	</body>
</html>