<?php 

error_reporting(-1);
$db = new PDO ("mysql:host=sale-games;dbname=php-sale-games","root","/4OCW2OBH.liZ6.F" ); 
session_start();
require "func.php";

if(isset($_GET['cart']))
{
    switch($_GET['cart'])
    {
        case 'add':
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            $product = get_product($id);
            if (!$product)
            {
                echo json_encode(['code' => 'error', 'answer' => 'errror']);
            }else{
                add_to_cart($product);
                echo json_encode(['code' => 'ok', 'answer' => $product]); 
            }
            break;

        case 'clear':
            if (!empty($_SESSION['cart']))
            {
                unset($_SESSION['cart']);
            }
        break;
    }   
}