<?php 
	
	//gestion des variables de session 
	session_start();
	$essais=3-$_SESSION['erreur'];


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


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Connexion </title>
	<script scr="../../js/jquery-ui.js"></script>
	<script src="../../js/external/jquery/jquery.js"></script>
	<style type="text/css">
		#Login input[type="text"], #Login input[type="password"] {
			
			border: none;
			width: 400px;
			height: 40px;
			color: rgb(131,131,131);
			border-radius: 4px;
			background-color: rgb(229,229,229);

		}

		#Login input[type="submit"], #Login input[type="reset"] {
			border: none;
			border-radius: 4px;
			height: 30px;
			width:100px;
			color: white;
			float: right;
			background-color: rgb(79,183,167);
		}

		#Login  h2{
			color: rgb(149,165,166);
		}

		body>div{
			height: 300px;
			width: 405px;
			margin: auto;
		}
	</style>
</head>
	<body>
		<div>
			<form method="POST" action="admin.php">
				<table cellspacing = '10'id="Login">
					<th>
						<h2 align="center">Veuillez vous identifier</h2>
					</th>
					<tr>
						<td> <input type="text" name="login" placeholder="Votre login ici..."> </td>
					</tr>
					<tr>
						<td> <input type="password" name="mdp" placeholder="Votre mot de passe ici..."> </td>
					</tr>
					<tr>
						<td> <input type="reset"><input type="submit"> </td>
					</tr>
					<tr>
						<td> <?php 
							echo "Il vous reste : <span>". $essais. "</span> sur 3 essai(s) <br>";
						?> 
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div id="debugging">

		<table border='1'>
			<?php 
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
		</table>	
		
		</div>
		<script type="text/javascript">
		$(function () {
			 $('form table tr:last > td').css({"font-size":"24px","color":"rgb(149,165,166)"});

			 $('form table tr:last > td span').css({"color":"rgb(231,76,60)"});

		})();

		</script>
	</body>
</html>