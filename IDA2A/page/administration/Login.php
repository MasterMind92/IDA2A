<?php 
	
	//gestion des variables de session 
	


	//connexion a la base de donnees  
	include('../../app/connexpdo.php');
	$idcom= connexpdo();

	//initialisation de la requete 

	$requete="SELECT login,motdepasse FROM utilisateur ";

	$result = $idcom->query($requete);

	$users = array();

 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Connexion </title>
		<link rel="stylesheet" type="text/css" href="../IDA2A/dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../IDA2A/dist/css/flat-ui.min.css">
	</head>
	<body>

		<form id="FrmID" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="administration" method="POST" role="form">
			<legend> Veuillez vous identifier</legend>
		
			<div class="form-group">
				<input type="text" class="form-control input-lg" name="login" placeholder="votre login">
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-lg" name="mdp" placeholder="Votre mot de passe">
			</div>
		
			<button type="submit" class="btn btn-primary btn-block ">Submit</button>
		</form>
		
		
		<div id="debugging">

		<table border='1'>
		<?php 
			$i=0;
			while ($ligne=$result->fetchObject()) {
				
				$users[$i]=$ligne;
				$i++;
			}


		 ?>
		</table>	
		
		</div>
		<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
	    <script src="../IDA2A/dist/js/vendor/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="../IDA2A/dist/js/vendor/video.js"></script>
	    <script src="../IDA2A/dist/js/flat-ui.min.js"></script>

	</body>
</html>