<?php 

include("inc/products_data.php");

// if id from get method is setted
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	// if id founded is valid
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	} // end inner if	
} // end outer if


// if id does not exists or it's invalid redirect to 'products.php'
if (!isset($product)) {
	header("Location: products.php");
	exit();
} // end if

session_start();
$section_id = "products";
$page = "product";
$pageTitle = $product["name"];
include("inc/header.php"); 

?>


<div id="<?php echo $section_id; ?>" style="height:300px">
	<a href="products.php">All Products </a>&gt;
	<?php echo $product["name"]; ?><br />
	<div class="product_box" >
		<span>
			<img src="<?php echo $product["img"]; ?>" 
			alt="<?php echo $product["name"]; ?>" >
		</span>
		<div class='product_choice'>
			Rating
			<div id="r1" class="rate_widget">
				<div class="star_1 ratings_stars"></div>
				<div class="star_2 ratings_stars"></div>
				<div class="star_3 ratings_stars"></div>
				<div class="star_4 ratings_stars"></div>
				<div class="star_5 ratings_stars"></div>
			</div>
		</div>
	</div>

	<div class="product_details" >
		<h1><span class="price">$<?php echo $product["price"]; ?></span>
			<?php echo $product["name"]; ?>
		</h1>
		
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>"
		</form>
		
	</div>
</div>


<?php include("inc/footer.php"); ?>
