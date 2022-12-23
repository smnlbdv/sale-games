
<?php
$db = new PDO ("mysql:host=sale-games;dbname=php-sale-games","root","/4OCW2OBH.liZ6.F" ); 

session_start();


$info=[];
if ($query = $db->query("SELECT * FROM sales_game")){
    echo "<pre>";
    $info=$query->fetchAll(PDO::FETCH_ASSOC);
    echo "</pre>";
}
else
{
print_r($db->errorInfo());
}

$game=[];
if ($query = $db->query("SELECT * FROM games")){
    echo "<pre>";
    $game=$query->fetchAll(PDO::FETCH_ASSOC);
    echo "</pre>";
}
else
{
print_r($db->errorInfo());
}

$novoe=[];

foreach($game as $i)
{
    if($i["status"] == 'новые')
    {
        array_push($novoe, $i);
    }
}

$lider=[];

foreach($game as $i)
{
    if($i["status"] == 'лидеры продаж')
    {
        array_push($lider, $i);
    }
}

$predzakaz=[];

foreach($game as $i)
{
    if($i["status"] == 'предзаказ')
    {
        array_push($predzakaz, $i);
    }
}


$sim=[];

foreach($game as $i)
{
    if($i["catecory"] == 'симулятор')
    {
        array_push($sim, $i);
    }
}

$prikl=[];

foreach($game as $i)
{
    if($i["catecory"] == 'приключения')
    {
        array_push($prikl, $i);
    }
}

$rolev=[];

foreach($game as $i)
{
    if($i["catecory"] == 'ролевая игра')
    {
        array_push($rolev, $i);
    }
}

$rpg=[];

foreach($game as $i)
{
    if($i["catecory"] == 'фэнтези')
    {
        array_push($rpg, $i);
    }
}

$strat=[];

foreach($game as $i)
{
    if($i["catecory"] == 'стратегия')
    {
        array_push($strat, $i);
    }
}

$logic=[];

foreach($game as $i)
{
    if($i["catecory"] == 'логическая')
    {
        array_push($logic, $i);
    }
}

$ark=[];

foreach($game as $i)
{
    if($i["catecory"] == 'аркада')
    {
        array_push($ark, $i);
    }
}


$otsivi=[];
if ($query = $db->query("SELECT * FROM otsivi")){
    echo "<pre>";
    $otsivi=$query->fetchAll(PDO::FETCH_ASSOC);
    echo "</pre>";
}
else
{
print_r($db->errorInfo());
}


$info_games =[];

foreach($game as $i)
{
    if($i["id"] == $_COOKIE['info'])
    {
        array_push($info_games, $i);
    }
}


// $user=[];
// if ($query = $db->query("SELECT * FROM users")){
//     echo "<pre>";
//     $user=$query->fetchAll(PDO::FETCH_ASSOC);
//     echo "</pre>";
// }
// else
// {
// print_r($db->errorInfo());
// }

if ($user['id']===$_SESSION['id'])
{
    $user_id = $user['nam'];
}