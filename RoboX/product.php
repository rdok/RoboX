<?php session_start(); ?>


<?php include("inc/header.php"); 

// if id from get method is setted
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	// if id founded is valid
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
	
}

// redirect if user made a mistake  on get method for id.
?>




<?php include("inc/footer.php"); ?>
