<div class=" col-xs-12  col-sm-12  col-md-12  col-lg-12 ">

		
		<form action="" class="form-horizontal  " method="POST" role="form">
			<legend class="text-center">Formulaire d'insertion de marqueurs </legend>
		
			<!-- -->
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<label for="Lat">Latitude </label>
					</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<input type="text" class="form-control" id="Lat" disabled name="Lat" placeholder="">
					</div>
				</div>
			</div>

			<!-- -->
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<label for="Lng">Longitutde</label>
					</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<input type="text" class="form-control" id="Lng"  disabled name="Lng" placeholder="">
					</div>
				</div>
			</div>

			<!-- -->
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<label for="nom">Nom Ville</label>
					</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<input type="text" class="form-control" id="adresse"   name="nom" placeholder="" value="Abidjan">
					</div>
				</div>
			</div>
			
			<!-- -->
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<button  type="button"  id="affiche" class="btn btn-primary btn-block">Afficher</button>
			</div>

			<!-- -->
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<button  type="button"  id="Marquer" class="btn btn-success btn-block">Marquer</button>
			</div>

			<!-- -->
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<button  type="submit"  id="submit" class="btn btn-danger btn-block">Soumettre</button>
			</div>
			
		</form>
		<div id="google" class="col-lg-12" style="height:450px;"></div>
</div>

