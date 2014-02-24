<?php
	function matchPasswords( $pas1, $pas2, $password, $verifyPassword ) {
		$output;
		
		if ( $pas1 ) { // if user entered correct pasword
				if ( $verifyPassword == '' ) {  // if user hasn't entered confirmation of password
					$output = '3'; // prompt: 'confirm password'
				} 
				else if ( $pas2 ) { // if user entered a correct password
					if( $password == $verifyPassword ) // if user corectly confirmed password
						$output = '2';
					else // user entred 2 differenet passwords
						$output = '1'; // message: 'Password do not match'
				} // end else if
				else { // if user entred a non correct password
					$output = '7'; // show info for correct passwords
				}
			} // end outer if
			else if( $pas2 ) {// if user entered a non correct password
				$output = '4';
			}
			else {
				$output = '5'; // show info for correct passwords
			}
		return $output; 
	}
	// check password
	function checkPassword( $password ) {
		
		if ( preg_match( "/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})$/", $password) ) {
			$output = true;
		} // end if
		else { 
			$output = false;
		} // end else
		
		return $output;
	} // end function Password
	
	// verify userID
	function checkUserID( $userID ) {
		if ( preg_match( "/^[A-z0-9._-]{6,12}$/" , $userID ) ) {
			$output = "true";
		} // end if
		else 
			$output = "false";
			
		return $output;
	} // end 

	// verify correct email
	function checkEmail( $email ) {
		if ( preg_match( "/^[_A-Za-z0-9-\\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$/", $email ) ) {
			$output = "true";
		} // end if
		else {
			$output = "false";
		} // end else
		
		return $output;
	} // end function checkEmail
	
	// verify that first name or last name hast at least one letter
	function checkNames( $check ) {
		if ( preg_match( "/^[A-z]+$/", $check ) ) {
			$output = "true";
		} // end if
		else { 
			$output =  "false";
		} // end else
		return $output;
	} // end function checkNames
?>