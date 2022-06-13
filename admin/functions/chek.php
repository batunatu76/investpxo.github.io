<?php

	define("access", "yes");
	require_once '../connection.php';

	$gen = R::getAll( 'SELECT `id` FROM `link`')[0]['id'];
	
	isset($_POST['switch']) ? $chek = $_POST['switch'] : $chek = 0;







	// print_r($gen);


	// $rand = mt_rand(0, 80000000);



	if(!$gen){
		$newLink = R::dispense('link');
		$newLink->cheker = $chek;
		R::store($newLink);
		// echo "new string";
	}
	else{
		$updLink = R::load('link', $gen);
		$updLink->cheker = $chek;
		R::store($updLink);
		// echo "update string";
	}

?>