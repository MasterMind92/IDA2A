<?php 
	$query= 'SELECT count(id_incident) from incident';
	$rs=$idcom->query($query);
	$req='SELECT lib_incident, date_incident from incident';
	$res=$idcom->query($req);	
	for ($i=0; $i <$rs ; $i++) { 
		echo "<div class=\" col-md-3 col-lg-3\">";
		echo "Date: <br/>";
		echo "Pseudo: <br/>";
		echo "Incident: <br/>";
		echo "Zone: <br/>"
		echo"</div>";

	}

 ?>
<div class="Start col-md-12 col-lg-12">
	<div class="col-md-6 col-lg-6">
		<div class="col-md-12 col-lg-12">
			<div class="col-md-3 col-lg-3">
				<img src="#" class="img-responsive" alt="Image">
			</div>
			<div class="col-md-9 col-lg-9">
				Date: <br>
				Pseudo: <br>
				Zone: <br>
				Incident: <br>
								
			</div>
		</div>
		<div class="col-md-12 col-lg-12">
			<div class="col-md-3 col-lg-3">
				<img src="#" class="img-responsive" alt="Image">
			</div>
			<div class="col-md-9 col-lg-9">
				Date: <br>
				Pseudo: <br>
				Zone: <br>
				Incident: <br>
									
			</div>
		</div>
		<div class="col-md-12 col-lg-12">
			<div class="col-md-3 col-lg-3">
				<img src="#" class="img-responsive" alt="Image">
			</div>
			<div class="col-md-9 col-lg-9">
				Date: <br>
				Pseudo: <br>
				Zone: <br>
				Incident: <br>
								
			</div>
		</div>
		<div class="col-md-12 col-lg-12">
			<div class="col-md-3 col-lg-3">
				<img src="#" class="img-responsive" alt="Image">
			</div>
			<div class="col-md-9 col-lg-9">
				Date: <br>
				Pseudo: <br>
				Zone: <br>
				Incident: <br>
									
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-6">
		<div class="col-md-12 col-lg-12">
			<div class="col-md-3 col-lg-3">
				<img src="#" class="img-responsive" alt="Image">
			</div>
			<div class="col-md-9 col-lg-9">
				Date: <br>
				Pseudo: <br>
				Zone: <br>
				Incident: <br>
								
			</div>
		</div>
		<div class="col-md-12 col-lg-12">
			<div class="col-md-3 col-lg-3">
				<img src="#" class="img-responsive" alt="Image">
			</div>
			<div class="col-md-9 col-lg-9">
				Date: <br>
				Pseudo: <br>
				Zone: <br>
				Incident: <br>
								
			</div>
		</div>
		<div class="col-md-12 col-lg-12">
			<div class="col-md-3 col-lg-3">
				<img src="#" class="img-responsive" alt="Image">
			</div>
			<div class="col-md-9 col-lg-9">
				Date: <br>
				Pseudo: <br>
				Zone: <br>
				Incident: <br>
								
			</div>
		</div>
		<div class="col-md-12 col-lg-12">
			<div class="col-md-3 col-lg-3">
				<img src="#" class="img-responsive" alt="Image">
			</div>
			<div class="col-md-9 col-lg-9">
				Date: <br>
				Pseudo: <br>
				Zone: <br>
				Incident: <br>
								
			</div>
		</div>
	</div>
</div>