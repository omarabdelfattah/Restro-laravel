<?php


  $page_title = 'Home Page';
  // Include connection file
  require('config.php');

  // Get last 6 products 
  $sql = "SELECT * FROM products  ORDER BY id DESC LIMIT 6 ";
  $result = $conn->query($sql);
 
  if (!empty($result) && $result->num_rows > 0) {
      // output data of each row
      $result = $result->fetch_all(MYSQLI_ASSOC);
      $last_6_products = $result;
  }  

    // Check if there's a search key
    $search_key = !empty($_GET['k']) ? "AND name LIKE '%". $_GET['k']. "%'  " : " ";

     // Check if there's a chosen category
     $cat_id = !empty($_GET['cat']) ? "AND cat_id = ".$_GET['cat'] : " ";

     if(isset($_GET['cat'])){
      $result = $conn->query("SELECT name FROM categories WHERE id = ". $_GET['cat']);
      $result = $result->fetch_array();
      $cat_name = $result['name'];
    }else{
      $cat_name = "";
    }

    // Get 9 random products 
    $sql = "SELECT * FROM products WHERE 1=1 $cat_id  $search_key ORDER BY RAND()  DESC LIMIT 9 ";
    $products = [];
     $result = $conn->query($sql);
    if (!empty($result) && $result->num_rows > 0) {
        // output data of each row
        $result = $result->fetch_all(MYSQLI_ASSOC);
        $products = $result;
    } 

    // Require navbar
    require("navbar.php");

?>

  <!-- Start Slider -->
  <div class="slider">
    <div class="owl-carousel owl-theme owl-loaded">
      <div class="owl-stage-outer">
        <div class="owl-stage">
          <?php 
          foreach($last_6_products as $product){
        ?>
          <div class="owl-item">
          <a href="product.php?product_id=<?php echo $product['id'] ?>">

            <div class="product_image">
              <img src="images/products/<?php echo $product['img'] ?>">
            </div>
            <div class="product_title">
              <a href="product.php?product_id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a>
            </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="owl-nav">
        <div class="owl-play play">Play</div>
        <div class="owl-stop stop">Stop</div>
      </div>

    </div>
  </div>
  <!-- End Slider -->
  <!--products display-->
  <div class="container ">
    <div class="product  ">
      <h3 class="text-left py-2" id="pro"><?php echo isset($cat_name) ? $cat_name : "Products" ; ?> </h3>
      <div class="row justify-content-center text-left">
        <?php 
            if(!empty($products)){
            foreach($products as $product){
          ?> 
        <div class="card col-md-3 text-center" style="">
          <a href="product.php?product_id=<?php echo $product['id'] ?>">    
            <img src="images/products/<?php echo $product['img'] ?>" class="card-img-top" alt="...">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?php echo $product['name'] ?></h5>
                <p class="card-text"><?php echo $product['price'] ?> L.E <br>
                </p>
                <a href="product.php?product_id=<?php echo $product['id'] ?>" class="btn btn-primary buy-button  ">Buy now</a>
              </div>
          </a>    
        </div>
        <?php }}else{
          ?>
            <center>No products found</center>
          <?php
        } ?>

      </div>
    </div>
  </div>

<?php 
    // Require footer
    require('footer.php');
?>