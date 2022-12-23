<?php

require "test-func.php";

$email=filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$nam=filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

$db = new PDO ("mysql:host=sale-games;dbname=php-sale-games","root","/4OCW2OBH.liZ6.F" );


$post=[
        'email' =>$email,
        'pass' => $pass,
        'nam' => $nam
    ];
$id=insert('users', $post);
$user = selectOne('users', ['id' => $id]);

session_start();

$_SESSION['id'] = $user['id'];
$_SESSION['login'] = $user['email'];
$_SESSION['pass'] = $user['pass'];
$_SESSION['name'] = $user['nam'];

echo $_SESSION['id'] ;
echo $_SESSION['login'] ;
echo $_SESSION['pass'];
echo $_SESSION['name'];

setcookie('user', $_SESSION['name'], time() + 3600, "/");

header('Location: /php/index.php');

// tt($_SESSION);
// exit();




// $war;
// $war = inserter('users', $post);
// $user = selectOne('users', ['id' => $war]);

























// $db->query("INSERT INTO `users` (`email`,`pass`, `nam`) 
// VALUES ('$email', '$pass', '$nam')");

// header('Location: /php/index.php');

// $user = selectOne('users', ['id' =>$id]);
// tt($user);

// $params=[
//     'nam' =>'mam',
//     'email' => 'semenpuplin'
// ];


?>