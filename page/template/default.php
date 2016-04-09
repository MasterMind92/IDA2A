<?php 
session_start();


if (!isset($_SESSION['erreur'])) {
	
	$erreur=0;
	$_SESSION['erreur']=$erreur;
}


 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.css">
		<script src="js/external/jquery/jquery.js"></script>
		<script src="js/jquery-ui.js"></script>
	</head>
	<body>
		<div id="Superdiv">
			<header>
				<div id="Banniere">
					<div>
						<img src="img/entete.jpg" width="100%">
					</div>
					<div>
						<img src="img/entete2.jpg" width="100%">
					</div>
				</div>
				<nav>
					<div> <a href="index.php?p=accueil"><button>ACCUEIL</button></a> </div>
					<div> <a href="index.php?p=problemes"><button>PROBLEME</button> </a> </div>
					<div> <a href="index.php?p=solutions"> <button>SOLUTIONS</button> </a> </div>
					<div> <a href="#"><button>CARTE</button></a> </div>
					<?php 
						if ($_SESSION['erreur']==3) {
					?>	
					<div> <a href="#"><button>Administration</button></a> </div>
					<?php	
						}else{
						?>
					<div> <a href="page/administration/Login.php"><button>Administration</button></a> </div>	
					<?php	
						}
					 ?>
				</nav>
			</header>
			<div id="Corps">
				<?php echo $content; ?>
			</div>
			<footer>
				<span>Nos Partenaires:</span>
				<table  width='100%'height="170">
					<tr>
						<td> <img src="img/ita.jpg" width="100%" height="100%"> </td>
						<td><img src="img/logo_sodeci.jpg" width="100%" height="100%"></td>
						<td><img src="img/environnement.jpg" width="100%" height="100%"></td>
					</tr>
				</table>
			</footer>
		</div>
		<script>
		
			$(function () {

				 $("#Accueil div:nth(0) #suivant").on('click', function(){
				 	$('#Accueil div:nth(0)').slideUp(200);
				 });

				 $("#Accueil div:nth(1) #suivant").on('click', function(){
				 	$('#Accueil div:nth(1)').slideUp(200);
				 });

				 $("#Accueil div:nth(2) #suivant").on('click', function(){
				 	$('#Accueil div:nth(0)').slideDown(500,function(){
				 		$('#Accueil div:nth(1)').show();
				 		$('#Accueil div:nth(0)').show();
				 	});
				 });

				  $("#Accueil div:nth(0) #precedent").on('click', function(){
				 	$('#Accueil div:nth(0)').show();
				 	$('#Accueil div:nth(1)').show();
				 	$('#Accueil div:nth(2)').show();

				 	$('#Accueil div:nth(0)').slideUp();
				 	$('#Accueil div:nth(1)').slideUp();
				 });

				 $("#Accueil div:nth(1) #precedent").on('click', function(){
				 	$('#Accueil div:nth(1)').slideUp();
				 	$('#Accueil div:nth(0)').slideDown();
				 });

				 $("#Accueil div:nth(2) #precedent").on('click', function(){
				 	$('#Accueil div:nth(2)').slideUp();
				 	$('#Accueil div:nth(1)').slideDown();
				 });
			})()
		</script>
	</body>
</html>
