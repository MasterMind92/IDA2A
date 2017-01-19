<?php 
session_start();
	 	
 ?>
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
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
				<?php 
					include 'menu.php';
				 ?>
				 <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
				 	<form action="app/traitforum.php" method="POST" role="form">
				 		<legend>Nouveau sujet</legend>
				 	
				 		<div class="form-group">
				 			<label for="">Titre du sujet:</label>
				 			<input type="text" name="titre" class="form-control" id="" required="required" placeholder="&eacute;crivez ici...">
				 		</div>
				 		<div class="form-group">
				 			<label for="">Objet du sujet:</label>
				 			<input type="text" name="obj" class="form-control" id="" required="required" placeholder="&eacute;crivez ici...">
				 		</div>
				 		<div class="form-group">
				 			<textarea name="content" id="input" class="form-control" rows="6" required="required" placeholder="Message..."></textarea>
				 		</div>
				 		
				 		<div class="form-group">
				 			<button type="submit" class="btn btn-primary">Envoyer</button>
				 			<button type="reset" class="btn btn-danger">Effacer</button>
				 		</div>
				 	</form>
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