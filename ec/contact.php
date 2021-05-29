


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

    <label for="exampleInputEmail1" class="lab_upd">Email: </label>
    <input type="email" name="email"  class="form-control inp_upd" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="lab_upd">Message: </label>
    <textarea class="form-control inp_upd"   name="message" id="exampleFormControlTextarea1" rows="3" placeholder="..."></textarea>
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
if($_POST['email']=='' or $_POST['message']=='' )
{
echo("<script>alert ('il faut saisir tous les champs!! ')</script>");
exit();
}

else
{

$email=$_POST['email'];
$message=$_POST['message'];


       $query ="INSERT into contact(email,msg) values('$email','$message')";

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
 