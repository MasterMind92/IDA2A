<?php 
header("Location: ../Administration1.php");

$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');



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
	
		move_uploaded_file($media['tmp_name'], "../../public/media/".$media['name']);

		//requete preparee a executer	
		$req= $connexion->prepare('INSERT INTO Media(titre_media, desc_media, location_media) VALUES(:titre_media, :desc_media, :location_media)');

		$req-> execute(array(
			'titre_media'=>$_POST['Titre'],
			'desc_media'=>$_POST['desc'],
			'location_media'=>$url,
		));
	
	}else{
		//instrucions a executer en cas d'erreur 
		$erreur="le fichier uploader n'est pas un image ni une video";
	}
}

?>