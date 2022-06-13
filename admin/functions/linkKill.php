<?php

	define("access", "yes");
	require_once '../connection.php';
	// require_once 'config.php';
	R::exec( 'DELETE FROM `path` ');
	// -- $gen = R::getAll( 'SELECT `id` FROM `path`');
	// print_r($gen);

	// $rand = mt_rand(0, 80000000);
	// $a =  md5($rand);
	// $link = '';
	// echo substr($a, 0,7) . '-' . substr($a, 6,4) .'-'.substr($a, 10,4) .'-'.substr($a, -7);



// https://securepayments.sberbank.ru/payment/merchants/sbersafe_sberid/payment_ru.html?mdOrder=5ae54ee7-2528-7611-b04e-aa7801bed1b9



	// if(!$gen){
	// 	$newLink = R::dispense('path');
	// 	$newLink->link = $link;
	// 	// $newLink->data = '';
	// 	R::store($newLink);

	// 	// return $link;
	// }
	// else{
	// 	$updLink = R::load('path', '1');
	// 	$updLink->link = $link;
	// 	// $newLink->data = '';
	// 	R::store($updLink);
	// 	// return $link;
	// }

?>