<?php 

require "test-func.php";

$email=filter_var(trim($_POST['email_email']), FILTER_SANITIZE_STRING);

$db = new PDO ("mysql:host=sale-games;dbname=php-sale-games","root","/4OCW2OBH.liZ6.F" );


$db=$db->query("INSERT INTO podpiska VALUES (email, $email)");

