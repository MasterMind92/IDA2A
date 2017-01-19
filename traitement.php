<?php 
$host="localhost";
$base="coordonnees";
$user="MasterMind";
$pass="youngmoney1992";


$idcom = new PDO("mysql:host=".$host.";dbname=".$base,$user,$pass);	

if (isset($_POST['nom'])  AND isset($_POST['Lat'])  AND isset($_POST['Lng'])) {
	
	$numMark = "\N";
	$nomMark = $idcom->quote($_POST['nom']);
	$latMark = $_POST['Lat'];
	$lngMark = $_POST['Lng'];
	$requete = "INSERT INTO marker VALUES ($numMark,$nomMark,$latMark,$lngMark)";

	$nbLignes = $idcom->exec($requete);

	if ($nbLignes!=1) {
		
		echo "Insertion impossible";
		
	} else {

		echo "Insertion effectuee avec succes !";
		
	}
}else{
	echo "il manque des valeurs";
	var_dump($_POST);
}
