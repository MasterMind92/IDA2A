<?php 

	$login="Andy";
	$mdp= "Bonjour";

	if (isset($_POST)) {
		if ( $_POST['login']==$login AND $_POST['mdp']==$mdp ) {
			echo "ok";
		}else {
			echo "no";
		}
	}

 ?>