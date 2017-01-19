<?php 
	session_start();
	try {
		$conx= new PDO('mysql:host=localhost;dbname=ordurebdd','root','');
		
		if (isset($_POST['login']) AND isset($_POST['mod'])) {
			$log=$_POST['login'];
			$mdp=$_POST['mod'];

		
			//Verification chez les agents
			$req=$conx->prepare("SELECT id_agent as cpt, login_agent as psd, mdp_agent as mdp, etat_agent as etat, post_agent as post, nom_agent as nm, prenom_agent as pn, email_agent as mail, cont_agent as cont, id_prest as prest FROM agent  WHERE  login_agent=? AND mdp_agent=?");
			$req->execute(array($log,$mdp));
			$re=$req->fetch();

			

			//Verification chez les ecocitoyens
			$req=$conx->prepare("SELECT id_eco as cpt_e, login_eco as psd, mdp_eco as mdp, etat_eco as etat, nom_eco as nm, prenom_eco as pn, email_eco as mail, cont_eco as cont FROM ecocitoyen WHERE login_eco=? AND mdp_eco=?");
			$req->execute(array($log,$mdp));
			$ri=$req->fetch();
			//var_dump($ri);exit();
			
			
			//Verification chez les regulateurs
			$req=$conx->prepare("SELECT id_reg as cpt, login_reg as psd, mdp_reg as mdp, post_reg as post ,etat_reg as etat, nom_reg as nm, prenom_reg as pn, email_reg as mail, cont_reg as cont FROM regulateur WHERE login_reg=? AND mdp_reg=?");
			$req->execute(array($log,$mdp));
			$req->execute();
			$ra=$req->fetch();
			
						
			/*var_dump($ra);exit();*/
			
			if ($re) {
				$_SESSION['cpt_a']=(int) $re['cpt'];
				$_SESSION['psd']=$re['psd'];
				$_SESSION['mdp']=$re['mdp'];
				$_SESSION['etat']=(int) $re['etat'];
				$_SESSION['post']=$re['post'];
				$_SESSION['nom']=$re['nm'];
				$_SESSION['pn']=$re['pn'];
				$_SESSION['mail']=$re['mail'];
				$_SESSION['cont']=$re['cont'];
				$_SESSION['prest']=$re['prest'];
				//var_dump($_SESSION);exit();
				header("location:../index.php");

			}else if ($ri) {
				$_SESSION['cpt_e']=(int) $ri['cpt_e'];
				$_SESSION['psd']=$ri['psd'];
				$_SESSION['mdp']=$ri['mdp'];
				$_SESSION['etat']=(int) $ri['etat'];
				$_SESSION['nm']=$ri['nm'];
				$_SESSION['pn']=$ri['pn'];
				$_SESSION['mail']=$ri['mail'];
				$_SESSION['cont']=$ri['cont'];
				//var_dump($_SESSION);exit();
				header("location:../index.php");

			}else if ($ra) {
				
				$_SESSION['cpt_r']=(int) $ra['cpt'];
				$_SESSION['psd']=$ra['psd'];
				$_SESSION['mdp']=$ra['mdp'];
				$_SESSION['etat']=(int) $ra['etat'];
				$_SESSION['post']=(int) $ra['post'];
				$_SESSION['nm']=$ra['nm'];
				$_SESSION['pn']=$ra['pn'];
				$_SESSION['mail']=$ra['mail'];
				$_SESSION['cont']=$ra['cont'];
				//var_dump($_SESSION);exit();
				header("location:../index.php");

			}else{
				echo "mauvais login ou mot de passe saisi";
				header("location:../../index.php");
			}
		}													
	} catch (Exception $e) {
		echo $e;
	}
 ?>

