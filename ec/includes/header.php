
<?php include_once('includes/function.php');?>

<nav class="nav" style="background-color:turquoise">
    <div class="wrapper container">
      <div class="logo"><a href="">BLOGSHOP</a></div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        
        <li>
          <a href="" class="desktop-item">Page <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop2" />
          <label for="showdrop2" class="mobile-item">Page <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu2">
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
          </ul>
        </li>

        <!--********************** CATEGORIE ***********************************-->
       

        <li>
          <a href="" class="desktop-item">Categorie <span><i class="fas fa-chevron-down"></i></span></a>
          <label for="showdrop2" class="mobile-item">Page <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu2">
           <?php 
                include ("includes/connect.php");
                $conn = mysqli_connect("localhost", "root", "","ecomerce_web") ;
                $query= mysqli_query( $conn ,"select *from categories");
                while($row=mysqli_fetch_array($query))
                {
                    $id=$row["id"];
                    $name=$row["name"];
                
                     ?>
              <li><a href="category.php?id=<?php echo "$id" ?>"><?php echo "$name";?></a></li>
               
              <?php 
                }
            ?> 
            
          </ul>
        </li>
       

        <!--********************** END CATEGORIE ***********************************-->

 
        <li> <a href="login.php" >connecter</a></li>
        <!-- icons -->
        <li class="icons">
        

          <span>

            <img src="./images/shoppingBag.svg" alt="" />
            <?php if(@$_SESSION['count'] > 0) {?>
            <small class="count d-flex">
              <?php echo $_SESSION['count'];

            }
           
        ?>
              </small>
            
          
          </span>
         
        </li>
  
        <li>
      
         <a href="login.php" >Register</a>
         </li>
   

      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
    
  </nav>