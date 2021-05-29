
<!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 

<body>
 
 <!-- Header --> 
<?php include ('includes/header.php');?> 
<!-- END Header --> 
  

<?php 
                
                $delete_id=$_GET['id'];// recuperer de id de produit
                $conn = mysqli_connect("localhost", "root", "","ecomerce_web") ;
                $query= mysqli_query( $conn ,"select * from products where id='$delete_id'");
                while($row=mysqli_fetch_array($query))
                {
                    $id=$row["id"];
                    $price=$row["price"];
                    $name=$row["name"];
                    $picture=$row["picture"];
                    $size=$row["size"];
                    $description= substr($row["description"],0,200);
                    $color=$row["color"];
                
                
                ?>

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main">
        <img src="images/<?php echo "$picture"; ?>" style="height:400px;width:350px" />
        </div>
        
      </div>
      <div class="right">
        
        <h1 style="color:gray"><span style="color:orange;font-size:30px">Name :&nbsp;</span><?php echo "$name"; ?></h1>
        
        <h2 style="color:gray;font-size:25px"><span style="color:orange;font-size:23px">Size :&nbsp;</span><?php echo "$size"; ?></h2>
        <h2 style="color:gray;font-size:25px"><span style="color:orange;font-size:23px">Color :&nbsp;</span><?php echo "$color"; ?></h2>
        <h2 style="color:gray;font-size:25px"><span style="color:orange;font-size:23px">Price :&nbsp;</span>$<?php echo "$price"; ?></h2>
        <br>

        <form action="cheekout.php" method="post">
          <input type="number" name="qte"  min="1" style="width:65px" value="1" />
          <input type="hidden" name="product" value="<?php echo $row['name']; ?>">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
     
      <button type="submit" class="btn btn-primary">
     add to cart
   </button>
  
        </form>
        <h3>Product Detail</h3>
        <p>
        <p style="font-size:23px"><?php echo "$description"; ?></p>
        </p>
      </div>
    </div>
  </section>
  <?php
                
              }
    ?>
  <!-- Related Products -->

  

  <!-- Footer -->
  <?php include ('includes/footer.php');?>
  <!-- End Footer -->

  <!-- Custom Scripts -->
  <script src="./js/products.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>