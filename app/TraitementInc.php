		<?php 
	
	session_start();

	//connexion a la base de donnees  
	include('connexpdo.php');
	$idcom= connexpdo("projetbdd");

	//initialisation de la requete 
/*
	$requete="SELECT * FROM Compte LIMIT 4";

	$result = $idcom->query($requete);

	$users = array(''=>'',''=>'',''=>'',);

	//Importation des classes 

	include('Class.php');

	$users= $result->fetchAll(PDO::FETCH_ASSOC);
	
	$trouve = FALSE;

	for ($i = 0; $i < 4; $i++) {

		if ($_POST['login'] == $users[$i]['Login_compte'] AND  $_POST['mdp']== $users[$i]['Mdp_compte']) {
			$trouve=TRUE;
		}
	}
	
	if ($trouve==TRUE) {
		echo "ok";
	}

	*/

	
		

	if (isset($_POST['catincInt'])  AND isset($_POST['incidentInt']) AND isset($_POST['CommuneInt']) AND isset($_POST['ZoneInt'])AND isset($_POST['precisionInt']) AND isset($_POST['Commentaire'])){
		
		//reception des donnees via le formulaire 

		$libInc= $idcom->quote($_POST['catincInt']);
		$incid= $idcom->quote($_POST['incidentInt']);
		$zone= $idcom->quote($_POST['ZoneInt']);
		$pres= $idcom->quote($_POST['precisionInt']);
		$com= $idcom->quote($_POST['Commentaire']);
		
		$requete = $idcom->query("INSERT INTO  incident(num_incident,lib_incident,date_incident,longitude,lattitude,descr_incident,pre_sup,id_catincident,id_zone,id_utilisateur) VALUES ('0',$libInc,CURDATE(),0,0,$com,$pres,1,1,1)");
		if ($requete) {
			echo 'ok';
		}else{
			echo " sa marche pas ";
		}

	}else{
		echo "erreur";
		var_dump($_POST);
	}

 ?>