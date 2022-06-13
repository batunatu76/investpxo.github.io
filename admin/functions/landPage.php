<?php

	define("access", "yes");
	require_once '../connection.php';

	$gen = R::getAll( 'SELECT `id` FROM `settings`');

	$landing_work = $_POST['land'];



	if(!$gen){
		$newLink = R::dispense('settings');
		$newLink->landing_work = $landing_work;
		R::store($newLink);
	}
	else{
		$updLink = R::load('settings', '1');
		$updLink->landing_work = $landing_work;
		R::store($updLink);
	}

?>