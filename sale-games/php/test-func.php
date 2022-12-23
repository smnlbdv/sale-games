<?php
require("db.php");








function tt($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

//Проверка выполнения запроса к БД
function db_erorr($query)
{
    $error_info = $query->errorInfo();
    if ($error_info[0] !== PDO::ERR_NONE )
    {
        echo $error_info[2];
        exit();
    }
    return true;
}


//Зпрос на получение данных одной таблицы
function selectAll($table, $params=[])
{
    global $db;
    $sql = "SELECT * FROM  $table";
    if (!empty($params)) {
        $i = 0;
        foreach($params as $key =>$value)
        {
            if (!is_numeric($value))
            {
                $value = "'".$value."'";
            }
            if ($i === 0)
            {
                $sql = $sql ." WHERE $key=$value";
            }else
            {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $query = $db->prepare($sql);
    $query->execute();
    return  $query->fetchAll();
}


function selectOne($table, $params=[])
{
    global $db;
    $sql = "SELECT * FROM  $table";
    if (!empty($params)) {
        $i = 0;
        foreach($params as $key =>$value)
        {
            if (!is_numeric($value))
            {
                $value = "'".$value."'";
            }
            if ($i === 0)
            {
                $sql = $sql ." WHERE $key=$value";
            }else
            {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }

    $sql = $sql . " LIMIT 1";
    $query = $db->prepare($sql);
    $query->execute();
    return  $query->fetch(PDO::FETCH_ASSOC);
}

function insert($table, $params)
{
    global $db;
    $i = 0;
    
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value) {
        if ($i === 0)
        {
            $coll = $coll . "$key";
            $mask = $mask ."'". "$value". "'";
        } else {
            $coll = $coll . ", $key";
            $mask = $mask  .", '"."$value"."'";
            
        }
        $i++;
    }

    $sql="INSERT INTO $table ($coll) VALUES ($mask)";
    $query = $db->prepare($sql);
    $query->execute($params);
    db_erorr($query);
    return $db->lastInsertId();
}





// // tt(selectAll('users', $params));
// tt(selectOne('users'));

