<?php
session_start();
ob_start();
define("access", "yes");
require "../connection.php";

$users = R::load('users', 1);



if ($users) {
    $count = count(R::find('users', 'login LIKE :login', array(':login' => $_POST['login'])));
    if ($count !== 0) {
        $us = R::findOne('users',' login = :login', array(':login' => $_POST['login']));
        if (md5(md5($_POST['password'])) == $us['password']) {
            if ($us['isadmin'] == 1) {
                $_SESSION['token'] = md5(md5($_POST['password']));
                $_SESSION['user'] = $_POST['login'];
                // setcookie( "refer" , '' , time()-3600 , '/' , '' , 0 );
                // print_r($_SESSION);

                echo 1;
                
            } else {
                echo 0;
                
            }
        } else {
            echo 0;
            
        }
    } else {
        echo 0;
        
    }
} else {
    echo 0;
    
}
// print_r(  $_SESSION);
header('Location: /admin/');