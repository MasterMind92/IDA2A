<?php 
	
	session_start();

	//connexion a la base de donnees  
	include('connexpdo.php');
	$idcom= connexpdo();
	
	$req=$idcom->query("SELECT * FROM utilisateur");

		
		$result= $req->fetchAll(PDO::FETCH_ASSOC);

		for ($i=0; $i < count($result) ; $i++) { 
			if (in_array($_POST['login'], $result[$i]['login'])) {
				echo "ok";
			}
			

		}
		var_dump($result); exit();

	/*if (isset($_POST['login']) AND isset($_POST['mdp'])) {

		$req=$idcom->query("SELECT * FROM utilisateur");

		$result= $req->fetchAll();
		var_dump($result); exit();

		in_array($_POST['login'], result);

		if ( $_POST['login']==$login AND $_POST['mdp']==$mdp ) {
			echo "ok";
		}else {
			echo "no";
		}
	}*/

	if (isset($_POST['Commentaire'])){
		
		//reception des donnees via le formulaire 

		$suggestion= $idcom->quote($_POST['Commentaire']);
		
		$requete=$idcom->query("INSERT INTO  suggestion (id_utilisateur,lib_suggestion) VALUES (3,$suggestion)");
		echo 'ok';
	}else{

		$erreur=$idcom->errorinfo();
		echo "erreur".$idcom->errorCode().$erreur[2];
		
	}

	if (isset($_POST['catincInt'])  AND isset($_POST['incidentInt']) AND isset($_POST['CommuneInt']) AND isset($_POST['ZoneInt'])AND isset($_POST['precisionInt']) AND isset($_POST['Commentaire'])){
		
		//reception des donnees via le formulaire 

		$libInc= $idcom->quote($_POST['catincInt']);
		$incid= $idcom->quote($_POST['incidentInt']);
		$zone= $idcom->quote($_POST['ZoneInt']);
		$pres= $idcom->quote($_POST['precisionInt']);
		$com= $idcom->quote($_POST['Commentaire']);
		
		$requete = $idcom->query("INSERT INTO  incident(num_incident,lib_incident,date_incident,descr_incident,pre_sup,id_catincident,id_zone,id_utilisateur) VALUES ('0',$libInc,CURDATE(),$com,$pres,1,1,1)");
		if ($requete) {
			echo 'ok';
		}else{
			echo " sa marche pas ";
		}
		

	}else{

		$erreur=$idcom->errorinfo();
		echo "erreur".$idcom->errorCode().$erreur[2];
		var_dump($_POST);
	}
		
		


 ?>