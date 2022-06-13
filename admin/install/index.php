<?php 
ob_start();
define("access", "yes"); 
require_once '..//connection.php';

$us = R::load('users', 1);
// print_r($us);


if ($us->login) {
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
}

?>
<!DOCTYPE html>
<html>
<head>
</head>

<form method="POST" id="install" action="install.php" autocomplete="off">

	  <h5>Регистрация администратора</h5>
	  <input type="text" name="login" id="login" placeholder="Имя пользователя" required>
	  <input type="password" name="password" placeholder="Пароль" required>
	  <button type="submit" id="submitinstall" name="submitinstall">Установить</button>

</form>

<body>
</body>
</html>