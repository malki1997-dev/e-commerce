
<!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 

<body>

<!-- Header --> 
<?php include ('includes/header.php');?> 
<!-- END Header --> 

  <form class="container" method="POST"  id="form_login"  >
    <div class="form-group">
      <label for="LoginUsername">Username : </label>
      <input type="text" class="form-control" id="LoginUsername" name="LoginUsername" placeholder="Enter your Username">
    </div>
    <div class="form-group">
      <label for="LoginPassword">Password</label>
      <input type="password" class="form-control" id="LoginPassword" name="LoginPassword" placeholder="Enter your Password">
    </div>
    <button type="submit" class="btn btn-primary button">Submit</button>
  </form>


  <?php

  if (isset($_POST['LoginUsername'], $_POST['LoginPassword'])) {
    $user=$_POST['LoginUsername'];
    $LoginPassword = $_POST['LoginPassword'];
    if (isset($user, $LoginPassword)) 
    {
      $conn = new mysqli("localhost", "root", "", "ecomerce_web");
      $sql = "SELECT username , password FROM admins WHERE username = '$user' && password ='$LoginPassword'";
      $result = $conn->query($sql);
     
      if (mysqli_num_rows($result) == 0) {
        echo "Username Not Found or Password is incorrect";
      } else {
        echo "Welcome";
        header("Location:dashbord.php");
        }
      }
    }

  ?> 

 <!-- Head --> 
<?php include ('includes/footer.php');?> 
<!-- END Head --> 
   
</body>

</html>