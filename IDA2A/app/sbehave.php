<?php 
	$res=array();
	//$date=array();
	$sug=array();
	$login=array();
	$cat=array();

	$query= "SELECT count(s.id_suggestion) as n
	from suggestion s, utilisateur u, categorieutilisateur cu
	where s.id_utilisateur=u.id_utilisateur
	and u.id_catutilisateur=cu.id_catutilisateur";

	$req= "SELECT s.lib_suggestion as sug,u.login as log,cu.libelle as cut
	from suggestion s,utilisateur u,categorieutilisateur cu
	where s.id_utilisateur=u.id_utilisateur
	and u.id_catutilisateur=cu.id_catutilisateur";
	
	$rs=$idcom->query($query);
	$st=$idcom->query($req);
	
	while ($rep=$rs->fetch()) {
		$res[]=$rep['n'];
	}

	if ($res[0]==0) {
		echo "<tr> <td> <h4 class=\"text-center\">Aucune suggestion soumise</h4> </td> </tr>";
	
	}else {
		while ($stm=$st->fetch()) {
			//$date[]=$stm['d'];
			$sug[]=$stm['sug'];
			$login[]=$stm['log'];
			$cat[]=$stm['cut'];
		}

		for ($i=0; $i <$res[0] ; $i++) { 
			echo "<tr>";
			echo "<td>";
			//echo "Date: ".$date[$i]."<br/>";
			echo "Pseudo: ".$login[$i]."<br/>";
			echo "categorie: ".$cat[$i]."<br/>";
			echo"</td>";
			echo "<td>";
			echo $sug[$i];
			echo"</td>";
			echo"</tr>";	
		}

	}
 ?>