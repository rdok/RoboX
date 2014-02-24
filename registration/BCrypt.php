<?php // guidelines: https://www.youtube.com/watch?v=igLvmIXkQ4Q

// basic injection prevention
function prevent($this) {
	$this = stripslashes($this);
	$this = mysql_real_escape_string($this);
	return this;
} // end function prevent

$str = substr($username, 0, 6 );
$salt = '$20$12$rsjT(A5Dk5D9A1hF' . $str . '$';

$crypted_pass = crypt($password, $salt);
?>