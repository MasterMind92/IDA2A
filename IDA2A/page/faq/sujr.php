<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

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

			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 ">
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php 
						include 'menu.php';
					 ?>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th class="col-lg-6">Discussion</th>
								<th class="col-lg-2">Initié par</th>
								<th class="col-lg-2">Messages</th>
								<th class="col-lg-2">Dernier message</th>
							</tr>
						</thead>
						<tbody>
							<!--Partie bouclé en php)-->
							<tr>
								<td class="fo">Mot de l'admin</td>
								<td class="fo text-center">Admin01</td>
								<td class="fo text-center">01</td>
								<td class="text-center">
									<p>Admin01</p>
									<p>31/10/2016 22:21</p>
								</td>
							</tr>
						</tbody>
					</table>
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