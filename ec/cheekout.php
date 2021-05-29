 <?php 
  require ('includes/function.php');
if(isset($_POST['id']) && isset($_POST['qte'])){
    $id=$_POST['id'];
    $qte=$_POST['qte'];
    $sql ="SELECT * FROM products where id = '$id'";
    $result =query($sql);
    $product =fetch_array($result);
    $_SESSION['products_'.$product['id']] = array(
        'id'=> $product['id'],
        'product'=> $product['name'],
        'price'=> $product['price'],
        'qte'=> $qte,
        'total' => $product['price'] * $qte,
    );
    $_SESSION['totaux'] += $_SESSION['products_'.$product['id']]['total'];
    $_SESSION['count'] += 1;
    redirect("cart.php");
}

?>