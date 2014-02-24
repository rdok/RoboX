<?php
	$products[101] = array(
		"name" => "Integer eleifend sed",
		"img" => "/RoboX/images/product/01.jpg",
		"price" => 100,
		"paypal" => "3NLHNH2PDBP8G"
	);
	
	$products[102] = array(
		"name" => "Nam cursus facilisis",
		"img" => "/RoboX/images/product/02.jpg",
		"price" => 200,
		"paypal" => "S8ERG2GYU437J"
	);
	
	$products[103] = array(
		"name" => "Mauris consectetur",
		"img" => "/RoboX/images/product/03.jpg",
		"price" => 120,
		"paypal" => "FM8N34YWGDJ92"
	);
	
	$products[104] = array(
		"name" => "Proin volutpat",
		"img" => "/RoboX/images/product/04.jpg",
		"price" => 260,
		"paypal" => "M8ULLHB5SPDLG"
	);
	
	$products[105] = array(
		"name" => "Aenean tempus",
		"img" => "/RoboX/images/product/05.jpg",
		"price" => 80,
		"paypal" => "YHDXBY67P9FJE"
	);
	
	$products[106] = array(
		"name" => "Nulla, Validate",
		"img" => "/RoboX/images/product/06.jpg",
		"price" => 193,
		"paypal" => "JQ9JSBX4WVJYS"
	);
	
	$products[107] = array(
		"name" => "Pellentesque egestas",
		"img" => "/RoboX/images/product/07.jpg",
		"price" => 30,
		"paypal" => "9XQY59KJYJ9Y2"
	);
	
	$products[108] = array(
		"name" => "Suspendisse fermentum",
		"img" => "/RoboX/images/product/08.jpg",
		"price" => 220,
		"paypal" => "6W8FTCRVXV9UC"
	);
	
	$products[109] = array(
		"name" => "Donec laoreet velit",
		"img" => "/RoboX/images/product/09.jpg",
		"price" => 65,
		"paypal" => "F2V9QALNLS9XC"
	);	function get_list_view_html($product_id, $product) {		$output = "";		$output = $output . '<div id="product_box" class="product_box">';		$output = $output . '<a href="product.php?id=' . $product_id . '" >';		$output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '" /></a>';		$output = $output . '<h3>' . $product["name"] . '</h3>';		$output = $output . '<p class="product_price">$ ' . $product["price"] . '</p>';		$output = $output . "</div>";				return $output;	}
?>