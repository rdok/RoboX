<?php

header( 'Content-Type: text/xml' );
echo '<?xml version = "1.0" encoding = "UTF-8" standalone = "yes" ?>';

echo '<response>';
	extract( $_POST );
	include '../php/validator.php';
	
		if ( isset( $id ) ) 
		{
			if ( $id === 'fName' || $id === 'lName') {
				$output = checkNames( $checkVar );
			} // end if
			elseif( $id === 'email' ) {
				$output = checkEmail( $checkVar );
			} // end else if
			elseif ( $id === 'userID' ) {
				$output = checkUserID( $checkVar );
			} // end elseif 
		} // end if
		else { // if password of verifyPassword are set then
		$password = isset( $password ) ?	$password : '';				
		$verifyPassword = isset( $verifyPassword ) ?	$verifyPassword : '';		
		
		$pas1 = checkPassword( $password );
		$pas2 = checkPassword( $verifyPassword );
		
		$output = matchPasswords( $pas1, $pas2, $password, $verifyPassword );
		} // end else
	
echo $output;
		
echo '</response>';
?>


