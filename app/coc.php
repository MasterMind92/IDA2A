<?php 

	$res=array();
	$date=array();
	$inc=array();
	$catinc=array();
	$zone=array();

	$query= "SELECT count(i.id_incident) as n 
	from incident i,zone z,commune c
	where i.id_zone=z.id_zone
	and z.id_commune=c.id_commune
	and c.id_commune=5";
	
	$req= "SELECT i.date_incident as d, i.lib_incident as l, z.libelle_zone as nz,ct.libelle as lc
	from incident i, zone z, catincident ct, commune c  
	where i.id_catincident=ct.id_catincident
	and i.id_zone=z.id_zone
	and z.id_commune=c.id_commune
	and c.id_commune=5";
	$rs=$idcom->query($query);
	$st=$idcom->query($req);
	
	while ($rep=$rs->fetch()) {
		$res[]=$rep['n'];
	}
	
	if ($res[0]==0) {
		echo "<h3 class=\"text-center\"> Aucun probleme a signaler! </h3>";
	
	}else {
		while ($stm=$st->fetch()) {
			$date[]=$stm['d'];
			$inc[]=$stm['l'];
			$catinc[]=$stm['lc'];
			$zone[]=$stm['nz'];
		}

		for ($i=0; $i <$res[0] ; $i++) { 
			echo "<div class=\" col-md-4 col-lg-4\">";
			echo "<div class=\" col-md-2 col-lg-2\">";
			echo "<img src=\"#\">";
			echo"</div>";
			echo "<div class=\" col-md-10 col-lg-10\">";
			echo "Date: ".$date[$i]."<br/>";
			echo "Pseudo: <br/>";
			echo "Incident:".$catinc[$i]." ".$inc[$i]."<br/>";
			echo "Zone: ".$zone[$i]."<br/>";
			echo"</div>";
			echo"</div>";	
		}

	}
 ?>