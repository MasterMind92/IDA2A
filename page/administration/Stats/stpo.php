<?php 
	require_once '../../../dist/jpgraph/src/jpgraph.php';
	require_once '../../../dist/jpgraph/src/jpgraph_pie.php';
	require_once '../../../app/connexpdo.php';

	$data= array();
	$leg= array();

	$idcom= connexpdo();

	$sql='select count(a.id_incident) as nb_inc,b.libelle as lib
	from incident a,catincident b,zone c, commune d 
	where a.id_catincident=b.id_catincident 
	and a.id_zone=c.id_zone 
	and c.id_commune=d.id_commune
	and d.id_commune=10
	group by b.id_catincident';

	$quer='select libelle as lib from catincident';
	$query=$idcom->query($quer);
	$cat=array();
	while ($rep=$query->fetch()) {
		$cat[]=$rep['lib'];
	}

	$rs=$idcom->query($sql);

	while ($req=$rs->fetch()) {
		$data[]=$req['nb_inc'];
		$leg[]=$req['lib'];

	}
	$nb=count($leg);
	$new=array();
	$k=$nb;
	for ($i=0; $i <count($cat) ; $i++) { 
	 	for ($j=0; $j <$nb ; $j++) {
	 		$t=$leg[$j]; 
	 		if(!in_array($cat[$i],$leg)){
	 			$new[]=$cat[$i];
	 			
	 			$leg[$k]=$cat[$i];
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
	$graph->title->Set('Nombre d\'incidents concernant Port-Bouet');
	$Pie= new PiePlot($data);
	$Pie->SetLegends($leg);
	$Pie->SetValueType(PIE_VALUE_ABS);
	$Pie->value->SetFormat('%d');
	$graph->Add($Pie);
	$graph->Stroke();

 ?>