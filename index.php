
<?php 


if (isset($_GET['p'])) {
		$page = $_GET['p'];
	}else{
		$page = 'accueil';
	}

ob_start();
if ($page === 'accueil') {
	require 'page/accueil.php';
} elseif ($page === 'problemes') {
	require 'page/Frmproblemes.php';
} elseif ($page === 'solutions') {
	require 'page/FrmSolutions.php';
} elseif ($page === 'carte') {
	require 'page/carte.php';
} elseif ($page === 'contact') {
	require 'page/Contact.php';
}


$content = ob_get_clean();

require 'page/template/default.php';

