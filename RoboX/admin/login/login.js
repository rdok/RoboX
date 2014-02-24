// JavaScript Document
if (!are_cookies_enabled()) {
	// if user has disabled cookies redirect him to appropirate page:
	window.location.replace("/RoboX/cookies/request_cookies");
}

$(document).ready(function() {

	// when user presses login button
	$('#login').click(function() {
		var errorFound = false;
		if ($('#input_login_id').val() === '') { // if user has not write put an user id/email
			errorFound = true;
			$('#input_login_id').css('border', '1px solid #D80000');
		} // end if
		else {
			$('#input_login_id').css('border', '1px solid #0d2c52');
		} // end else

		if ($('#password').val() === '') { // if user has not write put an user id/email
			$('#password').css('border', '1px solid #D80000');
			errorFound = true;
		} // end if
		else {
			$('#password').css('border', '1px solid #0d2c52');
			//$('#error_password').text('');	
		}
		if (!errorFound) { // if no errors were found then post
			$.post('/RoboX/admin/login/login.php', {

				'input_login_id': $('#input_login_id').val(),
				'password': $('#password').val()
			}, function(data) {
				if (data.userFound) {
					$('#errors_label').css('color', '#4F8A10');
					$('#errors_label').text("You've successfully logged in.");
					setTimeout("window.location.replace('" + data.redirect + "')", 2500);
				} // end if 
				else {
					alert(data.userFound);
					$('#errors_label').css('color', '#D80000');
					$('#errors_label').text("Your email/user ID or password is incorrect.");
				} // end else
			}, 'json');
		} // end if

	});

});