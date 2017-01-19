

<?php
	
	require_once ('src/jpgraph.php');
	require_once ('src/jpgraph_pie.php');  
	//include ('../../app/connexpdo.php');

	//$idcom=connexpdo();
	/*$legend= array();
	$valeur=array();

	$query='select count(a.id_incident) as nb_inc,d.nom_commune as lib
	from incident a,catincident b,zone c, commune d 
	where a.id_catincident=b.id_catincident
	and b.id_catincident=5 
	and a.id_zone=c.id_zone 
	and c.id_commune=d.id_commune
	and c.id_commune=5
	group by c.id_commune';
	
	$rs= $idcom->query($query);
	while ($row= $rs->fetch(PDO::FETCH_ASSOC)) {
		$legend[]="commune".$row['lib'];
		$valeur[]=$row['nb_inc'];		
	}*/
	//var_dump($valeur);

	$graph = new PieGraph();
	$data = array(5,9,2,11);
	$leg= array('pomme','pain','sucre','miel');
	//  $graph->title->Set("Volume des incidents par années");
	$oPie = new PiePlot($data);
	//$oPie->SetLegends($leg);
	//$oPie->SetCenter(0.4);
	//$oPie->SetValueType(PIE_VALUE_ABS);
	//$oPie->value->SetFormat('%d');
	//$graph->SetScale('textint');
	$graph->Add($oPie);
	//$graph->img->SetImgFormat("png");
	$graph->Stroke();

?>
   
