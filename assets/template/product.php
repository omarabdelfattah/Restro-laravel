<?php


$page_title = 'Contact us';

  // Include connection file
  require('config.php');

// Require navbar
  require("navbar.php");


$sql = "SELECT * FROM products  where id='" .$_GET['product_id']. "' LIMIT 1 ";
$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
    // output data of each row
    $result = $result->fetch_array(MYSQLI_ASSOC);
    $product = $result;
}  
?>
<div style="width:100%; height:75%">
    <div class="card mb-3" style="overflow:hidden">
    <div class="row no-gutters">
        <div class="col-md-4">
        <img src="images/products/<?php echo $product['img'] ?>" alt="..." style="max-width:100%">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product['name'] ?></h5>
            <p class="card-text"><?php echo $product['descr'] ?></p>
            <p class="card-text">Price:<?php echo $product['price'] ?></p>
            <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
        </div>
    </div>
    </div>
</div> 


<?php 
    // Require footer
    require('footer.php');
?>