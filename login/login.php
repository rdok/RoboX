<?php
	
	include('validator.php');
	extract($_POST);
//$_SERVER['DOCUMENT_ROOT']. /RoboX/php/
	// we'lve already made sure that both userID-email/password are defined.
	$email_userID = $_POST[ 'email_userID' ]; 
	$password = $_POST[ 'password' ];
	$db_errors; // errors regarding database.
	$db_errorFound = false; 
	$userFound = true; // true > found entry.
	
	// prepare queries
	// we can check if 'email_userID' is email, since 'userID' can't not contain special symbols like @ 
	// be doing so we can ommit a query.
	if ( checkEmail( $email_userID ) == "true" ) {
		$email_userID_query = "email";
	} // end if
	else { // then search for users ID
		$email_userID_query = "userID";
	} // end else
	
	// select statement selecting passwords with corresponding user id/email
	$query = "SELECT users.password, users." . $email_userID_query . " FROM dokollar_RoboX.users WHERE users.password='" . $password ."' AND users." . $email_userID_query . "='" . $email_userID . "'";
	
	// Connect to MySql
	if ( !( $database = mysql_connect( "localhost", "dokollar_RoboX", "AjpJchJ8CF79G8DyudwC" ) ) ) {
		$db_errors = "Could not connect to database. Please try again later.";
		$db_errorFound = true;
	} // end if
	else
	// open user's database
	if ( !mysql_select_db( "dokollar_RoboX", $database ) ) {
		$db_errors = "Could not open user's database. Please try again later.";
		$db_errorFound = true;
	} // end if	
	else
	// check if password/userID-email exists on database, by counting rows
	if ( mysql_num_rows( mysql_query( $query, $database ) ) == 0 ) { // if you find 0 rows
		$userFound = false; // does not exists on database.
		$userError = "Your email/user ID or password is incorrect.";
	} // end if
	else { // successful log in - find user id
		$query = "SELECT users.userID FROM dokollar_RoboX.users WHERE users.password='" . $password ."' AND users." . $email_userID_query . "='" . $email_userID . "'";
		$userID = mysql_result(mysql_query( $query, $database ), 0);
	}
	mysql_close($database);
	
	// if successfull log in start session
	if ( $userFound ) {
		session_write_close();
		session_start();
		$_SESSION['userLoggedIn'] = true;
		$_SESSION['userID'] = $userID;
	} // end if

	$output_array = array( 'userFound' => $userFound, 
		'db_errors' => $db_errors,
		'userError' => $userError, 
		'query' => $query,
		'email_userID' => $email_userID );
			
	echo json_encode( $output_array );
	
	//$email_userID_query = "SELECT users.email
?>