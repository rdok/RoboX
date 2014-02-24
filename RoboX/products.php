<?php session_start(); ?>

<?php include("inc/products_data.php"); ?>

<?php
	$pageTitle = "RoboX's Full Catalog of Products";
	$products_selected = "selected";
	$section_id = "products";
	include('inc/header.php'); 
?>

<div id="<?php echo $section_id; ?>" class="float_r">
 	<h1><?php echo $pageTitle; ?> </h1>
               
 	<?php foreach($products as $product_id => $product){ ?>
               	
	<div class="product_box"> <a href="product.php?id=<?php echo $product_id; ?>">
	<img src="<?php echo $product["img"];?>" alt="<?php echo $product["name"]; ?>" /></a>
	<h3><?php echo $product["name"]; ?></h3>
	<p class="product_price">$ <?php echo $product["price"]; ?></p>
	</div>

	<?php } ?>    
           
 	<a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>

<?php include("inc/footer.php"); ?>
