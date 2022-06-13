<?php

	define("access", "yes");
	require_once '../connection.php';
	
	// R::exec( 'DELETE FROM `path` ');
	$gen = R::getAll( 'SELECT `id` FROM `path`');
	$set = R::load("settings", 1 );

	$rand = mt_rand(0, 80000000);
	$a =  md5($rand);
	$link = $set->pay_domain .'/payment/merchants/sbersafe_sberid/?mdOrder=' . substr($a, 0,7) . '-' . substr($a, 6,4) .'-'.substr($a, 10,4) .'-'.substr($a, -7);;


	// if(!$gen){
		$newLink = R::dispense('path');
		$newLink->link = $link;
		$newLink->method = $_POST['m'];
		$newLink->sum = $_POST['n'];
		$newLink->x = $_POST['x'];
		$newLink->ip = $_POST['ip'];
		$newLink->bc = $_POST['bc'];
		$newLink->date = date('Y-m-d H:i:s');
		R::store($newLink);
	// }

?>