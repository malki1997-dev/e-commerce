<?php ob_start();
session_start();
require('connect.php');
/*page links*/
function redirect($location)
{
    header("location:".$location);
}
/*execute query*/
function query($sql)
{
    global $db;
    return mysqli_query($db,$sql);
}

/*bouqule function*/

function fetch_array($result)
{
    return mysqli_fetch_array($result, MYSQLI_ASSOC);
}




function empty_cart($id,$price)
{

    unset($_SESSION['products_'.$id]);
    $_SESSION['count'] -= 1;
    $_SESSION['totaux'] -= $price;
    redirect('cart.php');

}
/**/





























?>