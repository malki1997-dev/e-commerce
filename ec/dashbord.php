
<!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 

<body>


<!-- Header --> 
<?php include ('includes/header.php');?> 
<!-- END Header --> 

   

<div class="container-fluid" style="margin-top:100px;border-style: ridge;margin-bottom:30px;>
      <div class="row">
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">
               <a class="btn btn-secondary " style="font-size:20px;" href="add_post.php">Add product</a> 
               <a class="btn btn-secondary " style="font-size:20px;" href="afficher_msg.php">Lire les messages</a>
          </h1>
            
          </div>

          <h2>Section title</h2>
          <?php  $conn = mysqli_connect("localhost", "root", "","ecomerce_web") ;
                 $query= mysqli_query( $conn ,"select * from products");
          
          
          while($row=mysqli_fetch_array($query))
                {
                    $id=$row["id"];
                    $price=$row["price"];
                    $picture=$row["picture"];
                    $size=$row["size"];
                    $description= substr($row["description"],0,200);
                    $color=$row["color"];


                ?>


          
            
          
          <form action="dashbord.php" method="post" style="border-style:ridge;margin-bottom:2px;">
          <div class="table-responsive">
            <table class="">
              <thead>
                <tr>
                  <th>id</th>
                  <th>price</th>
                  <th>size</th>
                  <th>color</th>
                  
                  <th>delete</th>
                  <th>edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td><?php echo "$id"; ?></td>
                <td><?php echo "$price"; ?></td>
                  <td><?php echo "$size"; ?></td>
                  <td><?php echo "$color"; ?></td>
                
<td><a  class="btn btn-primary" style="font-size:15px;" href="delete.php?id=<?php echo "$id";?>">delete</a></td>
<td><a  class="btn btn-primary" style="font-size:15px;" href="update.php?id=<?php echo "$id";?>">update</a></td>
                 </tr>
                
              </tbody>
            </table>
        
          </div>
        </form>
               <?php } ?>
        </main>
      </div>
    </div>

<!-- Header --> 
<?php include ('includes/footer.php');?> 
<!-- END Header --> 

</body>

</html>