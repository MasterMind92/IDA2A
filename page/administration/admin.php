<?php  
	session_start();

	//connexion a la base de donnees  
	include('../../app/connexpdo.php');
	$idcom= connexpdo("ProjetIDA2A");

	//initialisation de la requete 

	$requete="SELECT * FROM Compte LIMIT 4";

	$result = $idcom->query($requete);



	$valeurs = array();
	$users = array(''=>'',''=>'',''=>'',);

	

	//Importation des classes 

	include('../../app/Class.php');

	$i=0;
		while ($ligne=$result->fetch(PDO::FETCH_NUM)) {
			
			foreach ($ligne as  $value) {

				$num=$ligne[0];	
				$lib=$ligne[1];	
				$login=$ligne[2];	
				$mdp=$ligne[3];	

				$utilisateur= new User($num,$lib,$login,$mdp);

				$users[$i]=$utilisateur;						
				$i++; 
			}
			
		}
?>


<!DOCTYPE html>
<html lang="FR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTC8cIfqIXdxrPWK5qo8NzAlfINAVaOyo"></script>
		<script>
		
		function initialize() {

		  var mapProp = {
		    center: new google.maps.LatLng(5.3096600,-4.0126600),
		    zoom:10,
		    mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		
		}
		google.maps.event.addDomListener(window, 'load', initialize);

		</script>
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="../IDA2A/dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../IDA2A/dist//css/flat-ui.min.css">
    	<link rel="shortcut icon" href="../IDA2A/page/administration/images/favicon.ico">
    	<link rel="stylesheet" type="text/css" href="../IDA2A/dist/css/obv.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			 

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
  					<div class="form-group">
  					<a href="" id="theme"><img src="../IDA2A/page/administration/images/theme.png"></a> 
    				<input type="text" placeholder="Search" class="form-control">
  					</div>
  					<button class="btn btn-orange" type="submit">Valider</button>
				</form>
			</nav>
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<nav class="navbar navbar-orange">
						<a class="navbar-brand" href="accueil"><img id="ita" src="../IDA2A/page/administration/images/ita.png"></a>
						<a class="navbar-brand txt-bv" >ACCUEIL</a>
						<div class="btn-group col-md-2 col-lg-2">
  							<button class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							INFORMATION<span class="caret"></span>
  							</button>
  							<ul class="dropdown-menu" role="menu">
    							<li><a>Informations g&eacute;n&eacute;rales</a></li>
    							<li><a>Informations par zone</a></li>
  							</ul>
						</div>
						<div class="btn-group col-md-2 col-lg-2">
  							<button class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							SUGGESTION<span class="caret"></span>
  							</button>
  							<ul class="dropdown-menu" role="menu">
    							<li><a >Suggestions publiques</a></li>
  							</ul>
						</div>
						<div class="btn-group col-md-2 col-lg-2">
  							<button class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							STATISTIQUE<span class="caret"></span>
  							</button>
  							<ul class="dropdown-menu" role="menu">
    							<li><a >Statistiques g&eacute;n&eacute;rales</a></li>
    							<li><a >Statistiques par zone</a></li>
  							</ul>
						</div>
						<a class="navbar-brand txt-bv" >HISTORIQUE</a>
					</nav>

				<!-- Structure du contenu-->
					<div class="contenu col-md-12 col-lg-12">
					<!--div contenant les contenu de tous les onglets-->
					<!--contenu de la page d'accueil-->
						<!--au lancement de la page d'accueil-->
						
	 				<div id="googleMap"  style="height:700px;" class="col-md-12 col-lg-12">
						
					</div>
				
					<div class="Start col-md-12 col-lg-12">
						<div class="col-md-6 col-lg-6">
							<div class="col-md-12 col-lg-12">
								<div class="col-md-3 col-lg-3">
									<img src="#" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-9 col-lg-9">
									Date: <br>
									Pseudo: <br>
									Zone: <br>
									Incident: <br>
								
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="col-md-3 col-lg-3">
									<img src="#" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-9 col-lg-9">
									Date: <br>
									Pseudo: <br>
									Zone: <br>
									Incident: <br>
									
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="col-md-3 col-lg-3">
									<img src="#" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-9 col-lg-9">
									Date: <br>
									Pseudo: <br>
									Zone: <br>
									Incident: <br>
								
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="col-md-3 col-lg-3">
									<img src="#" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-9 col-lg-9">
									Date: <br>
									Pseudo: <br>
									Zone: <br>
									Incident: <br>
									
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="col-md-12 col-lg-12">
								<div class="col-md-3 col-lg-3">
									<img src="#" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-9 col-lg-9">
									Date: <br>
									Pseudo: <br>
									Zone: <br>
									Incident: <br>
								
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="col-md-3 col-lg-3">
									<img src="#" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-9 col-lg-9">
									Date: <br>
									Pseudo: <br>
									Zone: <br>
									Incident: <br>
								
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="col-md-3 col-lg-3">
									<img src="#" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-9 col-lg-9">
									Date: <br>
									Pseudo: <br>
									Zone: <br>
									Incident: <br>
								
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="col-md-3 col-lg-3">
									<img src="#" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-9 col-lg-9">
									Date: <br>
									Pseudo: <br>
									Zone: <br>
									Incident: <br>
								
								</div>
							</div>
						</div>
					</div>
						
					<!--contenu de la page d'info zone -->
					<div class="Zone col-md-12 col-lg-12">
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">ABOBO</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">ADJAME</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">AYAMA</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">COCODY</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">KOUMASSI</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">MARCORY</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">PLATEAU</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">PORT-BOUET</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">TREICHVILLE</a></h2>
						</div>
						<div class="col-md-6 col-lg-6">
							<h2 class="text-center"><a href="">YOPOUGON</a></h2>
						</div>
					</div>
					
					<!--contenu de la page des solutions public -->
						<div class="Suggestion col-md-12 col-lg-12">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th></th>
										<th class="text-center">SUGGESTIONS DU PUBLIQUE</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											Date:02/08/93<br>
											Pseudo:GENIE Civil<br>
											Zone:Marcory<br>
										</td>
										<td>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</td>
									</tr>
									<tr>
										<td>
											Date:15/12/16<br>
											Pseudo:Lola-bb<br>
											Zone:Yopougon<br>
										</td>
										<td>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</td>
									</tr>
									<tr>
										<td>
											Date:30/03/16<br>
											Pseudo:Pakinou<br>
											Zone:Abobo<br>
										</td>
										<td>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</td>
									</tr>
									<tr>
										<td>
											Date:27/05/16<br>
											Pseudo:maitre-aniv<br>
											Zone:Koumassi<br>
										</td>
										<td>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</td>
									</tr>
									<tr>
										<td>
											Date:31/12/16<br>
											Pseudo:Rosa La Rosière<br>
											Zone:Plateau<br>
										</td>
										<td>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</td>
									</tr>
									<tr>
										<td>
											Date:06/01/16<br>
											Pseudo:Kevko banana<br>
											Zone:Port-bouet<br>
										</td>
										<td>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="row">
		<div class="col-md-offset-1 col-lg-offset-1 col-md-10 col-lg-10 navbar-orange">
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

	
		<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="../IDA2A/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../IDA2A/dist/js/vendor/video.js"></script>
    <script src="../IDA2A/dist/js/flat-ui.min.js"></script>
    <script src="../IDA2A/dist/js/AdminBehave.js"></script>
    

	</body>
</html>