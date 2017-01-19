<?php 
session_start();
	$conx= new PDO ("mysql:host=localhost;dbname=projetbdd","root","");
	$query="SELECT ";
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../../dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../../dist/css/flat-ui.min.css">
    	<link rel="stylesheet" type="text/css" href="../../dist/css/obv.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h4 class="text-center"> Forum</h4>
	<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
			
		<?php 
			include 'menu.php';
		 ?>
		 <table class="table table-hover">
					<thead>
						<tr>
							<th class='text-center' colspan='2'>
								
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class=' fo col-lg-3'>
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="#" alt="Image">
									</a>
									<div class="media-body">
										<h4 class="media-heading">PSeudo</h4>
										<p>status...</p>
									</div>
								</div>
							</td>
							<td class='col-lg-9'>
								<p>the text goes there...</p>
							</td>
						</tr>
						<tr>
							<td class=' fo col-lg-3'>
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="#" alt="Image">
									</a>
									<div class="media-body">
										<h4 class="media-heading">PSeudo</h4>
										<p>status...</p>
									</div>
								</div>
							</td>
							<td class='col-lg-9'>
								<p>the text goes there...</p>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
					<form action="" method="POST" role="form">
				
						<div class="form-group">
							<textarea name="msg" id="inputMsg" class="form-control" rows="3" required="required"></textarea>
						</div>
				
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>	
				</div>
				
		</div>

		 <?php 
		 	include 'footer.php';
		  ?>

		</div>
		<!-- jQuery -->
		<script src="../../dist/js/vendor/jquery.min.js"></script>
    	<script src="../../dist/js/flat-ui.min.js"></script>
    	<script src="../../dist/js/vendor/video.js"></script>
	</body>
</html>