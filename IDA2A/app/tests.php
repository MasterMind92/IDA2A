<?php  
	include ('Class.php');	
//connexion a la base de donnees  
	include('connexpdo.php');
	$idcom= connexpdo("ProjetIDA2A");

	//initialisation de la requete 

	$requete="SELECT * FROM Compte LIMIT 4";

	$result = $idcom->query($requete);

	$valeurs = array();
	$users = array(''=>'',''=>'',''=>'',);

$i=0;
while ($ligne=$result->fetch(PDO::FETCH_NUM)) {

		$num   = $ligne[0];	
		$lib   = $ligne[1];	
		$login = $ligne[2];	
		$mdp   = $ligne[3];	

		$utilisateur = new User($num,$lib,$login,$mdp);

		$users[$i] = $utilisateur;						
		$i++; 	
}

$log= "MasterMind92" ;
$login="";

$i=0;

foreach ($users as  $value) {

	$res = strcmp($log,$users[$i]->getLog());
	if ($res==1) {
		echo "c'est bon ";
	}
}
	
echo $res;
echo $login;
print_r($users);

?>