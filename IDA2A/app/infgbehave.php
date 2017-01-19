<?php 	
	$host="localhost";
	$base="projetbdd";
	$user="root";
	$pass="";

	$idcom = new PDO("mysql:host=".$host.";dbname=".$base,$user,$pass);

	$res=array();
	$date=array();
	$inc=array();
	$catinc=array();
	$zone=array();

	$query= "SELECT count(id_inc) as n from incident";
	$req= "SELECT i.date_inc as d, i.lib_inc as l, z.libelle_zone as nz,c.libelle as lc
	from incident i, zone z, catincident c 
	where i.id_catincident=c.id_catincident
	and i.id_zone=z.id_zone";
	$rs=$idcom->query($query);
	//var_dump($rs);exit();
	$st=$idcom->query($req);
	
	while ($rep=$rs->fetch()) {
		$res[]=$rep['n'];
	}

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

 ?>