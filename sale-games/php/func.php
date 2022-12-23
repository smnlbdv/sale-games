
<?php

function get_product(int $id)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM games WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function add_to_cart($product):void
{
    if (isset($_SESSION['cart'][$product['id']]))
    {
        $_SESSION['cart'][$product['id']]['qty'] += 1;
    }else
    {
        $_SESSION['cart'][$product['id']] = [

           'title' => $product['nazvanie'],
           'img' => $product['image-one'],
           'price'=>$product['price'],
           'opisanie'=>$product['opisanie'],
           'sistem-min'=>$product['sistem-min'],
           'sistem-recomend'=>$product['sistem-recomend'],
           'catecory'=>$product['catecory'],
           'status'=>$product['status'],



        ];
    }

    $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
    $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['price'] : $product['price'];

}