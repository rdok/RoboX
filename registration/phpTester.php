<?php







if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) 
{
    echo "CRYPT_BLOWFISH is enabled!";
}
else {
    echo "CRYPT_BLOWFISH is not available";
}











/*
		$insert = "INSERT INTO dokollar_RoboX.users ( fName , lName , email , userID , password ) VALUES ( 'fName', 'lName', 'email', 'userID', 'password')";
		
		$validate_email = "SELECT email FROM 'dokollar_RoboX'.'users' WHERE email='email'";
		$validate_userID = "SELECT userID FROM 'dokollar_RoboX'.'users' WHERE userID = 'usrerID'";
		$validate_password = "SELECT password FROM 'dokollar_RoboX'.'users' WHERE password = 'password'";
		
		// Connect to MySql
		if ( !( $database = mysql_connect( "localhost", "dokollar_RoboX", "AjpJchJ8CF79G8DyudwC" ) ) ) {
			echo "Could not connect to database. Please try again later.";
			$outputArray[ 'errorFound' ] = true;
		} // end if
		
		// open user's database
		if ( !mysql_select_db( "dokollar_RoboX", $database ) ) {
			echo "Could not open user's database. Please try again later.";
			$outputArray[ 'errorFound' ] = true;
		} // end if
		
		
		// check for duplicate userid, passwords, and emails.
		if ( ( $result = mysql_query( $validate_email, $database ) != false) ) {
			echo "Email already exists.";
			echo "results: " . $result;
			$outputArray[ 'errorFound' ] = true;
		} // end if
		else if ( !( $result = mysql_query( $validate_userID, $database ) ) ) {
			echo "User id already exists.";
			$outputArray[ 'errorFound' ] = true; } // end if
		else if ( !( $result = mysql_query( $validate_password, $database ) ) ) {
			echo "Password already exists.";
			$outputArray[ 'errorFound' ] = true;
		} // end else if
		else if ( !mysql_query( $insert, $database ) ) { // query Products database
			echo mysql_error() . "\r\nPlease try again later.";
			$outputArray[ 'errorFound' ] = true;
		} // end if
		
		mysql_close( $database );




if (!class_exists('PDO')) {
echo 'PDO unavailable<br />';
}
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
	
		$insert = "INSERT INTO dokollar_RoboX.users ( fName , lName , email , userID , password ) VALUES ( " . $fName . ", " . $lName . ", " . $email . ", " . $userID . ", " . $password . " );";
		
		$mysqli = new mysqli("localhost", "dokollar_RoboX", "AjpJchJ8CF79G8DyudwC", "dokollar_RoboX" );
		if ($mysqli->connect_errno) {
			$outputArray[ 'dbMessage' ] = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			$outputArray[ 'errorFound' ] = true;
		} // end if
		
		if (!$mysqli->query($insert) ) {
			$outputArray[ 'dbMessage' ] = "Registration failed: (" . $mysqli->errno . ") " . $mysqli->error;
			$outputArray[ 'errorFound' ] = true;
		} // end if
		
		mysqli_close( $mysqli );	*/
		
		?>