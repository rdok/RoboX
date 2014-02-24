<?php
	extract($_POST);
	// when all checks regarding product info are checked then procede below.

	// insert into products table the product info
	$insert_product = "INSERT INTO dokollar_RoboX.products ( id , name , value , date_added , category , times_sold , times_viewed , description ) VALUES ( NULL ,'" 
	. $_POST[ 'product_name' ] . "', '" . $_POST[ 'product_value' ] . "', CURRENT_TIMESTAMP , '" . $_POST[ 'category' ] . "', 0, 0, '" . $_POST[ 'product_description' ] . "')";


// Connect to MySql
		if ( !( $database = mysql_connect( "localhost", "dokollar_RoboX", "AjpJchJ8CF79G8DyudwC" ) ) ) {
			$outputArray[ 'dbMessage' ] = "Could not connect to database. Please try again later.";
			$outputArray[ 'errorFound' ] = true;
		} // end if
		
		// open user's database
		if ( !mysql_select_db( "dokollar_RoboX", $database ) ) {
			$outputArray[ 'dbMessage' ] = "Could not open user's database. Please try again later.";
			$outputArray[ 'errorFound' ] = true;
		} // end if
		
		if (!mysql_query( $insert_product, $database )) {
			$outputArray[ 'dbMessage' ] = "Inserting data to product table failed.";
			$outputArray[ 'errorFound' ] = true;
		}
		
		$id = mysql_insert_id();
		
$insert_img = "INSERT INTO dokollar_RoboX.pics ( id , url ) VALUES ( '" . mysql_insert_id() . "', '/RoboX/images/product/" . $id . "')";

		if (!mysql_query( $insert_img, $database )) {
			$outputArray[ 'dbMessage' ] = "Inserting img to img table failed.";
			$outputArray[ 'errorFound' ] = true;
		}
	// insert into images table the images table

	mysql_close( $database );
	
	if (!file_exists("/home/dokollar/public_html/RoboX/images/product/$id")) {
		mkdir("/home/dokollar/public_html/RoboX/images/product/$id");
	}
	//$uploads_dir = mkdir('/www/RoboX/images/product/');
	$uploads_dir = "/home/dokollar/public_html/RoboX/images/product/$id";
	$tmp_name = $_FILES["file_1_id"]["tmp_name"];
	$name = $_FILES["file_1_id"]["name"];
	
	if (!file_exists("/tmp/$tmp_name")) {
		echo "/tmp/$tmp_name exists<br />";
	}
	if (!file_exists("$uploads_dir/$name")) {
		echo "$uploads_dir/$name<br />";
	}
	echo (move_uploaded_file("$tmp_name", "$uploads_dir/$name"));
	
	// store the images into the server using as image name the id from images table.
	if ($_FILES['file_1_id']['error'] == 0) {
		//$upfile = '/RoboX/images/
	}
?>