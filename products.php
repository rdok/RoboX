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
               
 	<?php 
	$list_view_html = "";
	foreach($products as $product_id => $product){	
		$list_view_html = get_list_view_html($product_id, $product) . $list_view_html;
	}
	echo $list_view_html;
	?>    
           
</div>

<?php include("inc/footer.php"); ?>
