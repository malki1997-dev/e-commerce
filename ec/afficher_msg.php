<!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 

  <body>

<!-- Head --> 
<?php include ('includes/header.php');?> 
<!-- END Head -->




<div class="row">
    
  <div class="col-sm-3">
  <?php 
                include ("includes/connect.php");
                $conn = mysqli_connect("localhost", "root", "","ecomerce_web") ;
                $query= mysqli_query( $conn ,"select *from contact");
                while($row=mysqli_fetch_array($query))
                {
                    $email=$row["email"];
                    $msg=$row["msg"];
                   
                
                ?>
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title"><?php  echo "$email"; ?></h5>
        <p class="card-text"><?php  echo "$msg"; ?>.</p>
        
      </div>
      
       </div>
       
                
              <?php } ?>
              </div>
     
   
  
  
</div>

               







 <!-- *** Footer -->
 <?php include ('includes/footer.php');?>
        <!-- End Footer -->
       
  </body>




