<?php 
	//var_dump($_POST['id']);exit();
	if (isset($_POST['id']) AND isset($_POST['num'])) {
			$num=$_POST['num'];
			$conx=new PDO("mysql:host=localhost;dbname=projetbdd","root","");
			if ($_POST['id']==1) {
				$query="UPDATE incident SET sas=1 WHERE num_inc='$num'";
				$rec=$conx->query($query);
				//var_dump($rec);exit();
				echo "Votre opinion a été pris en compte";
			}
			elseif ($_POST['id']==2) {
				$query="UPDATE incident SET sas=0 WHERE num_inc='$num'";
				$rec=$conx->query($query);
				//var_dump($rec);exit();
				echo "Votre opinion a été pris en compte";
			}
			else
			{
				echo "opinion confuse";	
			}
	}else{
		echo "ya rien dedans";
	}

?>