



 <!-- Head --> 
<?php include ('includes/head.php');?> 
<!-- END Head --> 



<?php @session_destroy(); ?> 

  <body>

  

<!-- Head --> 
<?php include ('includes/header.php');?> 
<!-- END Head --> 

  <!-- Navigation -->
  <!-- Cart Items -->

  <div class="row" style="margin-top:150px;">

<div class="col-md-12">


<?php 
    $item_name=1;
    $item_number=1;
    $amount=1;
    $quantity=1;
    
    ?>

    <div class="card mt-2 mb-3 mx-2">

    <form action="https://www.sandbox.paypal.com/cgi-bin/websrc" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="ilyass9119@gmail.com">

    <table class ="table">
           
          
               <tr>
               <td >Produit</td>
               <td >Prix</td>
               <td >Qte</td>
               <td >Totale</td>
               <td >Action</td>
               </tr>
           
    <?php
           
           foreach($_SESSION as $name => $product){
               ?>
               <?php
           if(substr($name,0,9)=="products_"){
              
               ?>
        
           
        
       
        <tr>

            <td >  
                 <?php  echo !empty($product['product'])? $product['product']:""?> 
        
           </td>
            <td >
            <?php  echo !empty($product['price'])? $product['price']:""?> 
            </td>
            <td >
            <?php  echo !empty($product['qte'])? $product['qte']:""?> 
            </td>
            <td >
            <?php  echo !empty($product['total'])? $product['total']:""?> 
            </td>
            <td >
                <a href="cancel_cart.php?id=<?php  echo !empty($product['id'])? $product['id']:""?>&price=<?php  echo !empty($product['total'])? $product['total']:""?> " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
           </tr>
       
        

        <?php
                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
               ?>  


        <?php  }?>
            
        <?php  }?>
</table>
        <div class="row">
<div class="col-md-4-auto">
<table class="table">
    <thead>
        <th>products</th>
        <th>total HT</th>
    </thead>
    <tbody>
        <td>
              <?php  echo !empty($_SESSION['count'])? $_SESSION['count']:""?> 
        </td>
        <td class="text-danger font-weight-bold">
            
        <?php  echo !empty($_SESSION['totaux'])? $_SESSION['totaux'].'dh':""?> 
        </td>
    </tbody>
</table>
</div>
    </div>
    </div>
  
    
</div>
</div>

<button type="submit" name="upload" class="btn btn-success " >
        <i class="fa fa-credit-card"></i>validate your purchase
        </button>

        </form>

  <!-- Footer -->
  <?php include_once('includes/footer.php');?>
  <!-- End Footer -->
