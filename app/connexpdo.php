<?php 

// Fonction de connexion 

function connexpdo($base){
	include_once('BDConx.php');

	$dsn = "mysql:host=".MYHOST."; dbname=".$base;
	$user = MYUSER;
	$pass = MYPASS;


	try {
		
		$idcom = new PDO($dsn,$user,$pass);
		return $idcom;

	} catch (PDOexception $e) {
		echo"Echec de la connexion ".$except-> getMessage();
		return FALSE;
		exit();
	}
}
 ?>