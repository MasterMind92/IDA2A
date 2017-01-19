<?php 

// Fonction de connexion 
include_once('BDConx.php');
function connexpdo(){
	

	
	$dsn = "mysql:host=".MYHOST."; dbname=".BASE."";
	
	try {
		
		$idcom = new PDO($dsn,MYUSER,MYPASS);
		$idcom->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$idcom->query("SET NAMES UTF8");
		return $idcom;
		

	} catch (PDOexception $e) {
		echo"Echec de la connexion ".$except-> getMessage();
		return FALSE;
		
	}
	
}

	
 ?>