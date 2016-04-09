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

<!DOCTYPE HTML>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../../js/jquery-ui.css">
	<script scr="../../js/jquery-ui.js"></script>
	<script src="../../js/external/jquery/jquery.js"></script>
</head>
<body>

	<?php 
		$login="Andy";
		$mdp="Bonjour";


		

		if (isset($_POST['login']) && isset($_POST['mdp'])) {
			if ($_POST['login']==$login && $_POST['mdp']==$mdp) {
			?>
<!--Structure du menu -->
	<nav id="menu">
	<!--Structure des éléments du menu-->
		<!--Debut Logo-->
		<div class="item">
			<a href=""><div id="logo"><img src="#" alt="logo" title="retour &agrave; la page d'accueil"></div></a>
		</div>
		<!-- Fin Logo-->
		<!--************************** -->
		<!--Info-->
		<div class="item">
			<div id="info"><p>Informations</p></div>
			<div id="sider1">
				<div class="sub">Informations G&eacute;n&eacute;rales</div>
				<div class="sub">Informations par zone</div>
			</div>
		</div>
		<!--Fin Info-->
		<!--Solution-->
		<div class="item">
			<div id="solu"><p>Solutions</p></div>
			<div id="sider2">
				<div class="sub">Solutions public</div>
				<div class="sub">Solutions Administrateur</div>
			</div>
		</div>
		<!--Fin solution-->
		<!--Statistique-->
		<div class="item">
			<div id="stat"><p>Statistiques</p></div>
			<div id="sider3">
				<div class="sub">Statistiques G&eacute;n&eacute;rales</div>
				<div class="sub">Statistiques par zone</div>
			</div>
		</div>
		<!--Fin Statistique-->
		<!--Historique-->
		<div class="item">
			<div id="hist"><p>Historique</p></div>
			<div id="sider4">
				<div class="sub">Informations G&eacute;n&eacute;rales</div>
				<div class="sub">Informations par zone</div>
			</div>
		</div>
		<!--Fin Historique-->
	</nav>
<!-- Fin de la Structure du menu-->

<!-- Structure du contenu-->
	<div id="container">
	<!--barre de recherche-->	
		<div id="navbar">
			<form>
				<input id="txt_rech" type="text" placeholder="Recherche"/>
				<input id="btn_val" type="submit" value="valider"/>
			</form>
		</div>
	<!--div contenant les contenu de tous les onglets-->
		<div id="contenu">
			<!--contenu de la page d'accueil-->
			<div id="ac">
				<img src="images/abd.jpg">
			</div>
		</div>
	</div>

<!-- Fin de la Structure du contenu-->
<!--******************************************************************************-->


<?php 


	}elseif ($_SESSION['erreur']==3) {
		
		#effacer le compte administrateur correspondant 

		session_unset();
		session_destroy();

		header("Location: ../../index.php");
	}else{
		$_SESSION['erreur']++;
		header("Location: Login.php");
	}

}	

 ?>
 <!--partie Jquery-->
<script>


//masquage des sous-elements
	
	$('.sub').css("visibility","hidden");
	$('#sider1').css("visibility","hidden");
	$('#sider2').css("visibility","hidden");
	$('#sider3').css("visibility","hidden");
	$('#sider4').css("visibility","hidden");
//affichage des elements d'une tête de liste
	//pour info
	$('#info').click(function(){
		$('#sider1').css("visibility","visible");
		$('#sider1 .sub').css("visibility","visible");
		//masquage des autres elements
		$('#sider2').css("visibility","hidden");
		$('#sider2 .sub').css("visibility","hidden");
		$('#sider3').css("visibility","hidden");
		$('#sider3 .sub').css("visibility","hidden");
		$('#sider4').css("visibility","hidden");
		$('#sider4 .sub').css("visibility","hidden");
	});
	
	//pour solu
	$('#solu').click(function(){
		$('#sider2').css("visibility","visible");
		$('#sider2 .sub').css("visibility","visible");
		//masquage des autres elements
		$('#sider1').css("visibility","hidden");
		$('#sider1 .sub').css("visibility","hidden");
		$('#sider3').css("visibility","hidden");
		$('#sider3 .sub').css("visibility","hidden");
		$('#sider4').css("visibility","hidden");
		$('#sider4 .sub').css("visibility","hidden");

	});
	
	//pour stat
	$('#stat').click(function(){
		$('#sider3').css("visibility","visible");
		$('#sider3 .sub').css("visibility","visible");
		//masquage des autres elements
		$('#sider1').css("visibility","hidden");
		$('#sider1 .sub').css("visibility","hidden");
		$('#sider2').css("visibility","hidden");
		$('#sider2 .sub').css("visibility","hidden");
		$('#sider4').css("visibility","hidden");
		$('#sider4 .sub').css("visibility","hidden");
	});
	
	//pour hist
	$('#hist').click(function(){
		$('#sider4').css("visibility","visible");
		$('#sider4 .sub').css("visibility","visible");
		//masquage des autres elements
		$('#sider1').css("visibility","hidden");
		$('#sider1 .sub').css("visibility","hidden");
		$('#sider2').css("visibility","hidden");
		$('#sider2 .sub').css("visibility","hidden");
		$('#sider3').css("visibility","hidden");
		$('#sider3 .sub').css("visibility","hidden");
	});

</script>
</body>
</html>