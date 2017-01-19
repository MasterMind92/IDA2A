<?php 
session_start();
$host="localhost";
$base="ordurebdd";
$user="root";
$pass="";


$idcom = new PDO("mysql:host=".$host.";dbname=".$base,$user,$pass);	


//var_dump($_POST);exit();
if (  (isset($_POST['Commentaire'])) AND (isset($_POST['Lat']))  AND  (isset($_POST['Lng'])) AND (isset($_POST['commune'])) AND (isset($_POST['zone']))  ){
		
		if(!empty($_FILES)){

			//stockage du fichier 
			$media=$_FILES['photo'];

			//mise en memoire de l'extension de l'image 
			$ext = strtolower(substr($media['name'],-3));
			
			$allow_ext= array("jpg","png","gif");

			//mise en memoire de l'url de destination du fichier 
			$url= "../dist/img/projet/imgInc/".$media['name'];


			//verification de l'extension du fichier 

			if(in_array($ext, $allow_ext)){
			
				move_uploaded_file($media['tmp_name'], "../../dist/img/projet/imgInc/".$media['name']);
				
				echo "L'image a ete enregistree";
			}
		}

		//reception des donnees via le formulaire 
		$cpt=(int) $_SESSION['cpt_e'];
		/*$libInc= $idcom->quote($_POST['catincInt']);*/
		$incid= "Depot d'ordure";
		$com= $idcom->quote($_POST['Commentaire']);
		$latMark = (double) $_POST['Lat'];
		$lngMark = (double) $_POST['Lng'];
		$zone= (int)$_POST['zone'];
		$pre= $idcom->quote($_POST['precision']);
		//var_dump($libInc);exit();
		//requete a executer
		$infos="INSERT INTO  incident(lib_inc,date_inc,longitude,lattitude,descr_incident,sup_inc,image_inc,id_zone,id_eco,statut_inc) VALUES ($incid,CURDATE(),$lngMark,$latMark,$com,$pre,$url,$zone,$cpt,0)";
		//var_dump($infos);exit();

		$requete = $idcom->query($infos);
		//var_dump($requete);exit();
		
		// notification de l'etat de l'operation
		if ($requete) {
			$year="";
			$com="";
			$id="";
			$z="";
			$req =$idcom->query("SELECT i.id_inc as id, YEAR(i.date_inc) as y, z.id_zone as zone, c.nom_commune as com FROM incident i, zone z, commune c WHERE i.id_zone=z.id_zone AND z.id_commune=c.id_commune ORDER BY i.id_inc DESC LIMIT 1");
			$d=$req->fetch();
			$id=$d['id'];
			$year=$d['y'];
			$z=$d['zone'];
			$com=$d['com'];
			$y= substr($year,2);
			$c= substr($com,0,3);
			$str=$y."/".$id."/".$z."/".$c;
			$i=(int) $id;
			$req=$idcom->query("UPDATE incident SET num_inc='$str' where id_inc=$i");
			echo 'Votre plainte a bien &eacute;t&eacute; prise en compte';

		if (empty($requete)) {

			$msg_err= $idcom->errorInfo();

			echo "sa marche pas".$msg_err[2] ;
		}else{
			echo 'Incident enregistre avec succes';
		}
	}
}else
{
	echo"sa rentre pas";

}

/*if (isset($_POST['nom'])  AND isset($_POST['Lat'])  AND isset($_POST['Lng'])) {
	
	$numMark = "\N";
	$nomMark = $idcom->quote($_POST['nom']);
	$latMark = $_POST['Lat'];
	$lngMark = $_POST['Lng'];
	$requete = "INSERT INTO incident() VALUES ($numMark,$nomMark,$latMark,$lngMark)";

	$nbLignes = $idcom->exec($requete);

	if ($nbLignes!=1) {
		
		echo "Insertion impossible";
		
	} else {

		echo "Insertion effectuee avec succes !";
		
	}
}else{
	echo "il manque des valeurs";
	var_dump($_POST);
}*/
?>