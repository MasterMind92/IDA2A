
		
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
		<form name="form1" onsubmit="return verification();">
			<table cellspacing="10" id="FormUI">
				<script type="text/javascript">
					function verification (){
						
						var divCom = document.getElementById('divCom');  


						if (document.form1.Commentaire.value== "") {
							
							alert("Impossible d'envoyer un commentaire vide");
							document.form1.Commentaire.style.border= " 5px solid rgba(231, 76, 60,1.0)";
							return false;
						}
					}
				</script>
				
				<tr>
					<td > <textarea  placeholder="Vos commentaires..." name="Commentaire" id="Commentaire" rows="10" cols="90"></textarea></td>
					<td> <div > <span id="divCom"> </span></div> </td>
				</tr>
				<tr>
					<td > <input type="submit" id="Submit" value="Envoyer"></td>
				</tr>
			</table>
		</form>
	</div>
	
</div>
