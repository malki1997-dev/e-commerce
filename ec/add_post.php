


<!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 

  <body>

<!-- Head --> 
<?php include ('includes/header.php');?> 
<!-- END Head --> 

<link rel="stylesheet" href="styles2.css" />

  <div  class="titre_upd">inserer des produits</div>
  
  <form  class="formedit"  method="post" enctype ="multipart/form-data" id="formedite">
<div class="form-group">

    <label for="exampleInputEmail1" class="lab_upd">Name: </label>
    <input type="text" name="name"  class="form-control inp_upd" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Price: </label>
    <input type="text" name="price"  class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Size: </label>
    <input type="text"  name="size" class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
  </div><br>
  
  <input type="file" class="file_upd "  name="image" class="btn btn-primary" size="40"/>  <br><br>
  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Color: </label>
    <input type="text"  name="color"  class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Description: </label>
    <textarea class="form-control inp_upd"   name="description" id="exampleFormControlTextarea1" rows="3" placeholder="..."></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">ID_Categ: </label>
    <input type="text"  name="id_cat" class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
  </div>

  <button type="submit" name="send" class="btn btn-dark sub">Submit</button>
      
</form>
  

        <!-- *** Footer -->
        <?php include ('includes/footer.php');?>
        <!-- End Footer -->
       
  </body>
  
</html>
<?php
include("includes/connect.php");
if(isset($_POST['send']))
{
if($_POST['name']=='' or $_POST['price']=='' or $_POST["size"]=='' or $_POST["description"]=='' or $_POST["id_cat"]=='' or $_POST["color"]=='')
{
echo("<script>alert ('fill all the field ')</script>");
exit();
}

else
{
$name=$_POST['name'];
$price=$_POST['price'];
$size=$_POST['size'];
$description=$_POST['description'];
$id_cat=$_POST['id_cat'];
$color=$_POST['color'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
if($image_type == "image/jpeg" or $image_type == "image/jpg" or $image_type == "image/png" or $image_type == "image/gif" )
{
if($image_size<=10000000)
{
move_uploaded_file($image_tmp,"images/$image_name");
}
else
{
echo("<script> alert('larger image only 1 MB file sise is valid' )</script>");
}
}
else
{
echo("<script> alert('invalid file type' )</script>");
}
$conn = mysqli_connect("localhost", "root", "","ecomerce_web") ;

 

       $query ="INSERT into products(name,price,picture,size,color,description,category_id) 
       values('$name','$price','$image_name' ,'$size','$color','$description','$id_cat')";

if(mysqli_query($conn,$query))
{
echo("<h1>post has been submitted</h1>");
}
else
{
    echo("<h1>not inserted dans la base de donnée</h1>");
}
}
}
?>
 