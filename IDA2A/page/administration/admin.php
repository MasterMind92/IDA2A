<?php  
	session_start();

	include_once('../../app/connexpdo.php');
	$idcom= connexpdo();

	$MARKERS = array();
	/*$marker = array('numMark' => 0,'nomMark' => "",'latMark' => 0,'lngMark' => 0 );*/


	$requete="SELECT * FROM incident WHERE longitude=0 AND lattitude=0"; 

	$resIncident=$idcom->query($requete);

	/* 
	$i=0;

	//extraction des infos sur tous la localisation des marqueurs sur la carte 

	while ($ligne=$result->fetch(PDO::FETCH_ASSOC)) {
		
		foreach ($ligne as $key => $value) {
			$marker[$key]=$value;	
		}

		$MARKERS[$i]= $marker;
		$i++;

	}*/

	//processus d'authentification des utilisateurs

	//connexion a la base de donnees  
	
	
	

	/*if (isset($_POST['login']) AND isset($_POST['mdp'])) {
		$ok;

		for ($i=0; $i < count($user) ; $i++) { 

			if (in_array($_POST['login'], $user[$i]) AND in_array($_POST['mdp'], $user[$i])) {
				$ok=true;	
			}else{

				echo "ouais c pa bon ";
				/*header("Location:identification");
			}

		}	
		
	}*/



?>

<!DOCTYPE html>
<html lang="FR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <script  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTC8cIfqIXdxrPWK5qo8NzAlfINAVaOyo&signed_in=true&callback=initMap" async defer></script>
		<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    	<script src="../IDA2A/dist/js/vendor/jquery.min.js"></script>
		

		<!-- Bootstrap CSS -->
		<title>Administration </title>
		<link rel="stylesheet" type="text/css" href="../IDA2A/dist/css/vendor/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="../IDA2A/dist//css/flat-ui.min.css">
       	<link rel="stylesheet" type="text/css" href="../IDA2A/dist/css/obv.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			 
			.clickable{
				cursor: pointer;
			}
			.row
			{
				margin-top: 5px;
			}
			#ita
			{
				height: 35px;
				width: 55px;
			}
			#foot
			{
				height: 100px;
				width: 120px;	
			}




		</style>
	</head>
	<body>
	<div class="row">
		<div class="col-md-offset-1 col-lg-offset-1 col-md-10 col-lg-10">
			<nav class="navbar navbar-orange navbar-embossed">
				<form role="search" class="navbar-form navbar-right">
  					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
  						<?php 
  							echo $_SESSION['nm']." ".$_SESSION['pn'];
  						 ?>
  					</div>
  					<div class="form-group">
  					<a href="" id="theme"><img src="../IDA2A/page/administration/images/theme.png"></a> 
    				<input type="text" placeholder="Search" class="form-control">
  					</div>
  					<button class="btn btn-orange" type="submit">Valider</button>
  					<a class="btn btn-orange" data-toggle="modal" href='#Aide'>Aide</a>
				</form>
			</nav>
			
			<div class="modal fade" id="Aide">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Administration: Mode d'emploi</h4>
							</div>
							<div class="modal-body">
								La premiere page de l'administration sert renseigner les coordonnees geographique des differents incident signales sur le site. <br>A part &ccedil;a les autres onglets servent a consulter les informations.
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

			<div class="row">
				<div class="col-md-12 col-lg-12">
					<nav class="navbar navbar-orange">
						<a class="navbar-brand" href="accueil"><img id="ita" src="../IDA2A/page/administration/images/ita.png"></a>
						
						<a data-page="Google" class="navbar-brand txt-bv" >ACCUEIL</a>

						<div class="btn-group">
  							
  							<div class="btn-group">
  							<a class="btn btn-orange dropdown-toggle " type="button" data-toggle="dropdown">
    							INFORMATION<span class="caret"></span>
  							</a>
  							<ul class="dropdown-menu" role="menu">
    							<li><a data-page="infgene">Informations g&eacute;n&eacute;rales</a></li>
    							<li><a data-page="infzone">Informations par zone</a></li>
  							</ul>
  							</div>

  							<div class="btn-group">
							
  							<a class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							FAQ<span class="caret"></span>
  							</a>
  							<ul class="dropdown-menu" role="menu">
    							<li><a ></a></li>
    							<li><a ></a></li>
  							</ul>
  							</div>

						
  							<div class="btn-group">
							
  							<a class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							STATISTIQUE<span class="caret"></span>
  							</a>
  							<ul class="dropdown-menu" role="menu">
    							<li><a data-page="statg">Statistiques g&eacute;n&eacute;rales</a></li>
    							<li><a data-page="statz">Statistiques par zone</a></li>
  							</ul>
  							</div>

  							<div class="btn-group">

  							<a class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							COMPTES<span class="caret"></span>
  							</a>
  							<ul class="dropdown-menu" role="menu">
    							<li><a data-page="lcompte">Gestion des comptes</a></li>
    							<li><a>Liste des compte</a></li>
  							</ul>
  							</div>
  							<div class="btn-group">
  								<a class="btn btn-orange navbar-btn" type="button"  href="../index.php">DECONNEXION</a>
  							</div>
						</div>
					</nav>
				</div>

			<!-- Structure du contenu-->
				<div id="conteneur" class="col-md-12 col-lg-12">
				<!--div contenant les contenu de tous les onglets-->
				<!--contenu de la page d'accueil-->
					<!--au lancement de la page d'accueil-->
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h3 class="alike text-center">Bonjour et bienvenue su la page d'Administration de l'application de gestion des eaux usees. <br/>Ici Vous serez capable entre autres d'acceder a la totalite des informations vehiculees au sein du site 

							</h3>
						</div>
					</div>


				</div>		
			</div>
					

	<footer class="row">
		<div class=" col-md-12 col-lg-12 navbar-orange">
			<div class="row">
				<div class="col-md-offset-5 col-lg-offset-5 col-md-4 col-lg-4">
					<img id="foot" src="../IDA2A/page/administration/images/ita.png" class="img-responsive" alt="Image">
				</div>	   	
			</div>
			<div class="row">
			 	<div class="col-md-offset-4 col-lg-offset-4 col-md-5 col-lg-5">
			 		Tous Droits r&eacute;serv&eacute;s &agrave; 2A/IDA ITA-Marcory <sup>&copy;</sup>
			 	</div>
			 </div> 
		</div>
	</footer>

	
		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../IDA2A/dist/js/vendor/video.js"></script>
    <script src="../IDA2A/dist/js/flat-ui.min.js"></script>
    <script src="../IDA2A/dist/js/AdminBehave.js"></script>
    

	</body>
</html>