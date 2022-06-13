<?php

ob_start();
define("access", "yes"); 
require_once '../connection.php';





$login = $_POST['login'];
$pass = $_POST['password'];

	$sn = R::dispense('users');
	$sn->login = $login;
	$sn->password = md5(md5($pass));
    $sn->isadmin = 1;
	R::store($sn);


	$newLink = R::dispense('settings');
	$newLink->pay_domain = $_SERVER[HTTP_HOST];
	$newLink->landing_work = 1;
	R::store($newLink);
	

echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<form action="/admin/">
	<input type="submit" name="submit" id="sub" value="успех">
</form>
<script type="text/javascript">
	$(document).ready(function() {
		$("#sub").click();
	});
</script>';