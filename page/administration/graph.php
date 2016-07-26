<div class="Stat col-md-12 col-lg-12">
<?php
	include ('../../dist/jpgraph-4.0.0/src/jpgraph.php');
	include ('../../dist/jpgraph-4.0.0/src/jpgraph_pie.php');  
	
	$BD= new PDO('mysql::host=localhost;dbname=projetbdd','root','');

	$query='select count(incident.id_incident) from incident, catincident where incident.id_catincident=catincident.id_catincident and incident.id_catincident=2 and lib_incident=\'bouche\'';
	
	
	$rs= $BD->query($query);

	$legend= array(0=>'regard bouché',1=>'regard cassé',2=>'canalisation bouchée',3=>'canalisation cassée');
	$valeur=array(0=>57,1=>2,2=>10,3=>70 );
	$graph = new PieGraph(400,300);

	
	$graph->title->Set("Volume des incidents par années");
	$oPie = new PiePlot($valeur);
	$oPie->SetLegends($legend);
	$oPie->SetCenter(0.4);
	$oPie->SetValueType(PIE_VALUE_ABS);
	$graph->Add($oPie);
	$graph->Stroke();
?>
</div>
