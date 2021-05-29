


<!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 

  <body>

  <link rel="stylesheet" href="styles2.css" />


<!-- Head --> 
<?php include ('includes/header.php');?> 
<!-- END Head --> 



  <div class="titre_upd">Modifier des produits</div>
  

  <?php
@$edit_id=$_GET['id'];

$query= "SELECT * from products where id='$edit_id'";
$show = $db->query($query);

$display=$show->fetch_assoc()
?>

<form  class="formedit"action="update.php?edit_form=<?php echo $edit_id?>"  method="post" enctype ="multipart/form-data" id="formedite">
<div class="form-group">

    <label for="exampleInputEmail1" class="lab_upd">Name: </label>
    <input type="text" name="name" value="<?php echo @$display['name']; ?>" class="form-control inp_upd" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Price: </label>
    <input type="text" name="price" value="<?php echo @$display['price']; ?>" class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Size: </label>
    <input type="text" value="<?php echo @$display['size']; ?>" name="size" class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
  </div><br>
  <input type="file" class="file_upd " value="<?php echo @$display['picture']; ?>" name="image" class="btn btn-primary" size="40"/>  <br><br>
  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Color: </label>
    <input type="text"  name="color" value="<?php echo @$display['color']; ?>" class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Description: </label>
    <textarea class="form-control inp_upd" value="<?php echo @$display['description']; ?>"  name="description" id="exampleFormControlTextarea1" rows="3" placeholder="..."></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">ID_Categ: </label>
    <input type="text" value="<?php echo @$display['category_id']; ?>" name="id_cat" class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
  </div>

  <button type="submit" name="send" class="btn btn-dark sub">Submit</button>
      
</form>
  

        <!-- *** Footer -->
        <?php include ('includes/footer.php');?>
        <!-- End Footer -->
       
  </body>
  
</html>
<?php
if(isset($_POST['send']))
{
$edit_id=$_GET['edit_form'];
$name=$_POST['name'];

$price=$_POST['price'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
$size=$_POST['size'];
$color=$_POST['color'];
$description=$_POST['description'];
$id_cat=$_POST['id_cat'];
move_uploaded_file($image_tmp,"/images/$image_name");
$query="UPDATE products set name='$name',price='$price',description='$description',
picture='$image_name',color='$color',size='$size',category_id='$id_cat' where id='$edit_id'";

if (mysqli_query($db,$query))
 {
  echo("<script> alert('updeted !!!!!' )</script>");

}
else{
  echo "Not Updated";
}

}
?>
 