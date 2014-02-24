<?php 

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
		
		
		// check for duplicate userid, passwords, and emails.  // count the rows.  0 means no duplicate.
		if ( mysql_num_rows( mysql_query( $validate_email, $database ) ) ) 
		
?>