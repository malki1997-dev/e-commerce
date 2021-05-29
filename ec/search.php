
<!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 


<body style="background-color: lightblue;">

  <!-- Header --> 
<?php include ('includes/header.php');?> 
<!-- END Header --> 
  

  <!-- PRODUCTS -->

  <section class="section products">
    <div class="products-layout container">
      <div class="col-1-of-4">
       


        <!--****************** BRANDS *************** -->
        
        <div class="brands">
          <div class="block-title">
            <h3>Brands</h3>
          </div>

          <ul class="block-content">
            <li>
              <label for="">
                <span>Gucci</span>
              
              </label>
            </li>

            <li>
              
              <label for="">
                <span>Burberry</span>
              
              </label>
            </li>

            <li>
         
              <label for="">
                <span> Accessories</span>
            
              </label>
            </li>

            <li>
              
              <label for="">
                <span>Valentino</span>
               
              </label>
            </li>

            <li>
              
              <label for="">
                <span>Dolce & Gabbana</span>
               
              </label>
            </li>

            <li>
              
              <label for="">
                <span>Hogan</span>
              
              </label>
            </li>

            <li>
         
              <label for="">
                <span>Moreschi</span>
            
              </label>
            </li>

            <li>
             
              <label for="">
                <span>Givenchy</span>
              
              </label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-3-of-4">
        <form method="POST" action ="search.php">
       <input type="text"  name="search" placeholder="entrer le nom du produit">
       <input type="submit" value="click" class="btn btn-dark" id="btn-rechercher">
         </form>
         
       
<!--******************** PRODUCT *******************-->

        <div class="product-layout">

          
        <?php 
               $search = $_POST["search"];
               include ("includes/connect.php");
               $query= mysqli_query( $conn ,"select *from products where name like'%$search%'");
      
      
                while($row=mysqli_fetch_array($query))
                {
                    $name=$row["name"];
                    $id=$row["id"];
                    $price=$row["price"];
                    $picture=$row["picture"];
                    $size=$row["color"];
                    $description= substr($row["description"],0,200);
                    $color=$row["color"];
                
                
                ?>

        <!--***************************************-->





        <div class="product">
            <div class="img-container">
              <img src="images/<?php echo "$picture"; ?>" style="height:200px;" />
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
              </ul>
            </div>
            <div class="bottom">
              <a href="product-details.php?id=<?php echo "$id" ?>">See More</a>
              <div class="price">
            <?php  echo "$name"; ?>
              </div>

              <div class="price">
                <span>$<?php  echo "$price"; ?></span>
              </div>

            </div>
          </div>
          <?php
                
              }
              ?> 


        </div>

        
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include ('includes/footer.php');?> 
  <!-- End Footer -->

  <!-- Custom Scripts -->
  <script src="./js/products.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>