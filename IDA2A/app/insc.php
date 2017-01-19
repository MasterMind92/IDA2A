<?php 
	//VERIFICATION D'ARRIVEE DE DONNEES POST
	if (isset($_POST)) 
	{
		$conx= new PDO('mysql:host=localhost;dbname=projetbdd','root','');

		$nom=$conx->quote($_POST['nom']);
		$pnm=$conx->quote($_POST['pnom']);
		$em=$conx->quote($_POST['mail']);
		$ps=$conx->quote($_POST['pseudo']);
		$pass=$conx->quote($_POST['pass']);
		$ct=$conx->quote($_POST['cont']);
		//var_dump($_POST);exit();
		//connexion à la base de données
		
		//var_dump($nom, $pnm, $e, $ps,$pass,$ct);exit();
		$res= $conx->query("SELECT login_eco as log from ecocitoyen where login_eco=$ps");
		//var_dump($res);exit();
		$test="";
		
		while ($rs = $res->fetch()) 
		{
			$test=$rs['log'];
		}
		//var_dump($test);exit();
		if ($test=="") 
		{
			$res= $conx->query("SELECT login_agent as log from agent where login_agent=$ps");
			
			while ($rs = $res->fetch()) 
			{
				$test=$rs['log'];
			}
			if ($test=="") 
			{
				$res= $conx->query("SELECT login_reg as log from regulateur where login_reg=$ps");
				while ($rs = $res->fetch()) 
				{
					$test=$rs['log'];
				}

				if ($test=="") 
				{
					//var_dump($nom);exit();
					$res= $conx->query("INSERT INTO ecocitoyen (nom_eco, prenom_eco, cont_eco, email_eco, etat_eco, login_eco, mdp_eco) VALUES ($nom,$pnm,$ct,$em,1,$ps,$pass)");
					//var_dump($res);exit();
					if ($res) 
					{
						echo "Vous avez été enregistré et pouvez maintenant vous connecter";
						//header("location:../../index.php");
					}
					else
					{
						var_dump($_POST);
					}
				}
				else
				{	
					header("location:../../index.php");
				}
		
			}
		}
		
		/*$res= $conx->query("INSERT INTO user (nom,prenom,datenais,num_phone,email) VALUES ('$nom','$pnm','$d','$ct','$e')");
		//var_dump($res);exit();
		*/
		
	}
 ?>