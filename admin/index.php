<?php
session_start();
ob_start();
define("access", "yes");
require_once 'connection.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/config.php';




$us = R::load('users', 1);


if ($us->id== 0) {								//ЧЕК!!!
	header('Location: /admin/install/');
}


if ($_SESSION['token'] == $us->password){   

		require "admin.php";
	}

	else{
			echo '<form method="POST" id="install" action="login/login.php" autocomplete="off">

				  <h5>Вход в админ-панель</h5>
				  <input type="text" name="login" id="login" placeholder="Имя пользователя" required>
				  <input type="password" name="password" id="password" placeholder="Пароль" required>
				  <button type="submit" id="sublogin" name="sublogin">Вход</button>

			</form>';
	}


?>