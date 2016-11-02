<?php  
//parametres de connexion

$host="localhost";
$base="gestcompte";
$user="root";
$pass="";

// variable de connexion 

$idcom= new PDO("mysql:host=$host;dbname=$base,$user,$pass");

$bloc="UPDATE Compte set etat=0 Where pseudo='AndyPandy'";
$valid="UPDATE Compte set etat=1 Where pseudo='AndyPandy'";
$sup="DELETE Compte WHERE pseudo='AndyPandy'";
$creer="INSERT INTO Compte(pseudo,mdp,lib_cpt,etat_cpt,id_user) VALUES ('AndyPandy','motdepasse','standard',1,1)";

//requete a executer

$result= $idcom->exec($bloc);


?>

