<?php

$edit_id=@$_GET['id'];

$conn = mysqli_connect("localhost", "root", "","ecomerce_web") ;
$query="DELETE  FROM products where id=$edit_id";


if(mysqli_query($conn,$query))
{
  echo("<script> alert('Deleted ')</script>"<header("Location:dashbord.php"));
}


?>