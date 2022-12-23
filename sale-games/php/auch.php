<?php
require "test-func.php";
$email=filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$db = new PDO ("mysql:host=sale-games;dbname=php-sale-games","root","/4OCW2OBH.liZ6.F" );






$post=[
    'email' =>$email,
    'pass' => $pass,
];


$user = selectOne('users', $post);

setcookie('user', $_SESSION['name'], time() + 3600, "/");

$_SESSION['id'] = $user['id'];
$_SESSION['login'] = $user['email'];
$_SESSION['pass'] = $user['pass'];

header('Location: /php/index.php'); 

          
?>