<?php
require "db.php";



$user=[];
if ($query = $db->query("SELECT * FROM users")){
    echo "<pre>";
    $user=$query->fetchAll(PDO::FETCH_ASSOC);
    echo "</pre>";
}
// else
// {
// print_r($db->errorInfo());
// }

// if ($user["id"]===$_SESSION['id'])
// {
//     $user_id = $user["nam"];
// }

// print_r( $user);
// echo "<br>";
// echo $user_id;
foreach ($sim as $i)
{
    print_r ($i['id']);
}

    // print_r($i['id']);

    

