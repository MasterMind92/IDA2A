<?php 
	require_once '../../../dist/jpgraph/src/jpgraph.php';
	require_once '../../../dist/jpgraph/src/jpgraph_pie.php';
	require_once '../../../app/connexpdo.php';

	$data= array();
	$leg= array();

	$idcom= connexpdo();

	$sql='select count(a.id_incident) as nb_inc,d.nom_commune as lib
	from incident a,catincident b,zone c, commune d 
	where a.id_catincident=b.id_catincident
	and b.id_catincident=5 
	and a.id_zone=c.id_zone 
	and c.id_commune=d.id_commune
	group by c.id_commune';
$quer='select nom_commune as lib from commune';
	$query=$idcom->query($quer);
	$commune=array();
	while ($rep=$query->fetch()) {
		$commune[]=$rep['lib'];
	}

	$rs=$idcom->query($sql);

	while ($req=$rs->fetch()) {
		$data[]=$req['nb_inc'];
		$leg[]=$req['lib'];

	}
	$nb=count($leg);
	$new=array();
	$k=$nb;
	for ($i=0; $i <count($commune) ; $i++) { 
	 	for ($j=0; $j <$nb ; $j++) {
	 		$t=$leg[$j]; 
	 		if(!in_array($commune[$i],$leg)){
	 			$new[]=$commune[$i];
	 			
	 			$leg[$k]=$commune[$i];
	 			$k++;
	 		}
	 	}
	 	
	 }

	$res=count($data);
	if ($res<11) {
		for ($i=$res; $i <11 ; $i++) { 
			$data[$i]=0;
		} 
		
	}
	$graph= new PieGraph(500,500);
	$graph->title->Set('Nombre d\'incidents sur regard par commune');
	$Pie= new PiePlot($data);
	$Pie->SetLegends($leg);
	$Pie->SetValueType(PIE_VALUE_ABS);
	$Pie->value->SetFormat('%d');
	$graph->Add($Pie);
	$graph->Stroke();

 ?>