
		
<div class="formulaires">
	<div>
		<h2 align="center"> Indications </h2>
		<p> 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

	<div>
		<h2 align="center"> Indiquez votre solution ici </h2>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<fieldset >
					<legend>Profil</legend>
				
					
					<label>
						<input type="radio" name="profil" id="input" value="Exploitant">
						Exploitant
					</label>

					<label>
						<input type="radio" name="profil" id="input" value="Internaute">
						Internaute
					</label>

					<label>
						<input type="radio" name="profil" id="input" value="Admin">
						Administrateur
					</label>
				</fieldset>
			</div>
		</div>		
	</div>
	<div id="internaute">
		<form action="" method="POST" class="form-horizontal formInput" role="form">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						
						<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>
						
					</div>
				</div>		
			</div>
	
			<div class="form-group">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<button type="submit" class="btn btn-block btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
			
	<div id="exploit">
		<div class="authentification">
			<form id="FrmID" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="administration" method="POST" role="form">
				<legend> Veuillez vous identifier</legend>
			
				<div class="form-group">
					<input type="text" class="form-control input-lg" name="login" placeholder="votre login">
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" name="mdp" placeholder="Votre mot de passe">
				</div>
			
				<button type="submit" class="btn btn-danger btn-block ">Submit</button>
			</form>
		</div>
		<div class="formInput">
			<form action="" name="form" method="POST" onsubmit="return verification();" role="form" >
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>
							
						</div>
					</div>		
				</div>
		
				<div class="form-group">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<button type="submit" class="btn btn-block btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>	
	</div>	

	<div id="admin">
		<div class="authentification">
			<form id="FrmID" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="administration" method="POST" role="form">
				<legend> Veuillez vous identifier</legend>
			
				<div class="form-group">
					<input type="text" class="form-control input-lg" name="login" placeholder="votre login">
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" name="mdp" placeholder="Votre mot de passe">
				</div>
			
				<button type="submit" class="btn btn-warning btn-block ">Submit</button>
			</form>
		</div>
		<div class="formInput">
			<form action="" method="POST" class="form-horizontal" role="form">
					
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="text" class="form-control" name="Lieu" placeholder=" Indiquez lieu ici... Commune,Quartier, Precision supplementaires">
						</div>
					</div>		
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="file" class="form-control" name="photo" >
						</div>
					</div>		
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>
							
						</div>
					</div>		
				</div>
		
				<div class="form-group">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<button type="submit" class="btn btn-block btn-success">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>				
</div>
			
<script src="dist/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="dist/js/form.js"></script>
