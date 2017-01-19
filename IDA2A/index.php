<?php 
session_start();

/*CODE DE NOMBRE D'ERREURS*/
if (!isset($_SESSION['erreur'])) {
  $erreur=0;
  $_SESSION['erreur']=$erreur;
}

if (isset($_GET['p'])) {
		$page = $_GET['p'];
	}else{
		$page = 'accueil';
	}

ob_start();
if ($page === 'accueil') {
	require 'page/accueil.php';
} elseif ($page === 'problemes') {
	require 'page/Frmproblemes.php';
} elseif ($page === 'intervention') {
	require 'page/FrmInterv.php';
} elseif ($page === 'geolocalisation') {
	require 'page/Carte.php';
} elseif ($page === 'contact') {
	require 'page/Contact.php';
} elseif ($page === 'enquete') {
	require 'page/relance.php';
}


$content = ob_get_clean();

if((isset($_SESSION['cpt_e'])) AND ($_SESSION['etat']==1))
{
	require 'page/template/template2.php';
}
else if ((isset($_SESSION['cpt_a'])) AND ($_SESSION['etat']==1) AND ($_SESSION['post']==0)) {

	require 'page/template/template.php';	

}else if ((isset($_SESSION['cpt_r'])) AND ($_SESSION['etat']==1)) {
	header("location: ../../used/index.php");

}else if ((isset($_SESSION['cpt_a'])) AND ($_SESSION['etat']==1) AND ($_SESSION['post']==1)) {
	header("location: ../../used/prestataire/index.php");

}else if ($_SESSION['etat']!=1) {

    echo "<h4 class=\"text-center\"> Vous n'avez pas le droit d'être ici. Vous avez été bloqué. <a href=\"../test/index.php\">Retour au portail de connexion</a></h4>";  
    var_dump($_SESSION); 
}else
{
	echo "<h4 class=\"text-center\"> Connexion impossible. <a href=\"../test/index.php\"> Retour au portail de connexion </a> </h4>";
}



