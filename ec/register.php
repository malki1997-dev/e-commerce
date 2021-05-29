


<!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 

  <body>

<!-- Head --> 
<?php include ('includes/header.php');?> 
<!-- END Head --> 

<link rel="stylesheet" href="sty.css" />

  <div  class="titre_upd">Sign Up</div>
  
  <form  class="formedit"  method="post" enctype ="multipart/form-data" id="formedite">
<div class="form-group">

    <label for="exampleInputEmail1" class="lab_upd">Name: </label>
    <input type="text" name="username"  class="form-control inp_upd" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Password: </label>
    <input type="password" name="password"  class="form-control inp_upd" id="exampleInputPassword1" placeholder="...">
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
if($_POST['username']=='' or $_POST['password']=='' )
{
echo("<script>alert ('il faut saisir tous les champs!! ')</script>");
exit();
}

else
{

$username=$_POST['username'];
$password=$_POST['password'];


       $query ="INSERT into customers(username,password) values('$username','$password')";

if(mysqli_query($conn,$query))
{
  echo("<script>alert ('Bien Ajouter ')</script>");
}
else
{
  echo("<script>alert ('ereur le client n'a pas ajouté!! ')</script>");}
}
}
?>
 