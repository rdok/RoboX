<?php

include('validator.php');
//$_SERVER['DOCUMENT_ROOT']. /RoboX/php/
extract($_POST);
	$errorFound = false; // assume not errors are found on user input
	
	 // take care of php errors. (undefined)
	$fName = isset( $_POST[ 'fName' ] ) ? $_POST[ 'fName' ] : '';
	$lName = isset( $_POST[ 'lName' ] ) ? $_POST[ 'lName' ] : '';
	$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : '';
	$userID = isset( $_POST[ 'userID' ] ) ? $_POST[ 'userID' ] : '';
	$password =isset( $_POST[ 'password' ] ) ? $_POST[ 'password' ] : '';
	$verifyPassword = isset( $_POST[ 'verifyPassword' ] ) ? $_POST[ 'verifyPassword' ] : '';


	$pas1 = checkPassword( $password );// temp var for usage on 'matchPasswords' function
	$pas2 = checkPassword( $verifyPassword );
	
	$fName = checkNames( $fName ); // "true" / "false" values
	$lName = checkNames( $lName ); // "true" / "false" values
	$email = checkEmail( $email ); // "true" / "false" values
	$userID = checkUserID( $userID ); // "true" / "false" values
	$password = checkPassword( $password ); // boolean values
	$verifyPassword = checkPassword( $verifyPassword ); // boolean values
	$matchPasswords = matchPasswords( $pas1, $pas2, $password, $verifyPassword ); // '3'=>confirm password, '2'=>CORRECT, '1'=>password do not match, '7'=>show info for correct passwords, '4'=>non correct password, '5'=>show info for correct passwords.
		
		$outputArray = array(
		'fName' => $fName,
		'lName' => $lName,
		'email' => $email,
		'userID' => $userID, 
		'matchPasswords' => $matchPasswords,
		'errorFound' => $errorFound, 
		'dbMessage' => ''
	);
	// check if any error is found
	if ( $fName == 'false' || $lName == 'false' || $email == 'false' || $userID == 'false' || $matchPasswords != '2' ) {
		$outputArray[ 'errorFound' ] = true;
	} // end if
	else {
		
	
		$insert = "INSERT INTO dokollar_RoboX.users ( fName , lName , email , userID , password ) VALUES ( '" . $_POST[ 'fName' ] . "', '" . $_POST[ 'lName' ] . "', '" . $_POST[ 'email' ] . "', '" . $_POST[ 'userID' ] . "', '" . $_POST[ 'password' ] . "')";
		
		$validate_email = "SELECT users.email FROM dokollar_RoboX.users WHERE users.email='" . $_POST[ 'email' ] . "'";
		$validate_userID = "SELECT users.userID FROM dokollar_RoboX.users WHERE users.userID='" . $_POST[ 'userID' ] . "'";
		$validate_password = "SELECT users.password FROM dokollar_RoboX.users WHERE users.password='" . $_POST[ 'password' ] . "'";
		
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
		{
			$outputArray[ 'dbMessage' ] = "Email already exists. Please choose a different one.";
			$outputArray[ 'errorFound' ] = true;
		} // end if
		else if ( mysql_num_rows(  mysql_query( $validate_userID, $database ) ) ) 
		{
			$outputArray[ 'dbMessage' ] = "User id already exists. Please choose a different one.";
			$outputArray[ 'errorFound' ] = true; } // end if
		else if ( mysql_num_rows(  mysql_query( $validate_password, $database ) ) ) 
		{
			$outputArray[ 'dbMessage' ] = "Password already exists.";
			$outputArray[ 'errorFound' ] = true;
		} // end else if
		else if ( !mysql_query( $insert, $database ) ) 
		{ // query Products database
			$outputArray[ 'dbMessage' ] = mysql_error() . "\r\nPlease try again later.";
			$outputArray[ 'errorFound' ] = true;
		} // end if
		
		mysql_close( $database );
		
		
	} // end else
	echo json_encode($outputArray);
//}
?>