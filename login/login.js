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
			$('#error_login').text('email/user ID is required'); // error
			toggleOn('#error_login');
			errorFound = true;
			$('#input_login_id').css('border', '1px solid #D80000');
		} // end if
		else {
			toggleOf('#error_login');
			$('#input_login_id').css('border', '1px solid #0d2c52');
		} // end else

		if ($('#password').val() === '') { // if user has not write put an user id/email
			$('#error_password').text('password is required'); // error
			$('#password').css('border', '1px solid #D80000');
			toggleOn('#error_password');
			errorFound = true;
		} // end if
		else {
			toggleOf('#error_password');

			//$('#error_password').text('');	
		}

		if (!errorFound) { // if no errors were found then post
			$.post('/RoboX/login/login.php', {

				'email_userID': $('#input_login_id').val(),
				'password': $('#password').val()
			}, function(data) {
				if (data.userFound) {
					$('#errorLogIn').css('color', '#4F8A10');
					$('#errorLogIn').text("You've successfully logged in.");
				} // end if 
				else {
					$('#errorLogIn').css('color', '#D80000');
					$('#input_login_id').css('border', '1px solid #D80000');
					$('#password').css('border', '1px solid #D80000');
					$('#errorLogIn').text("Your email/user ID or password is incorrect.");
				} // end else
			}, 'json');
		} // end if

	});

	// remove error message after user entred text (user/email)
	$('#input_login_id').focusout(function() {
		if ($('#input_login_id').val() != '') {
			toggleOf('#error_login');
			$('#input_login_id').css('border', '1px solid #0d2c52');
		} // end if
		else {
			toggleOn('#error_login');
			$('#input_login_id').css('border', '1px solid #D80000');
			$('#error_login').text('email/user ID is required'); // error
		} // end else
	});

	// remove error message after user entred text (password)
	$('#password').focusout(function() {
		if ($('#password').val() != '') {
			toggleOf('#error_password');
			$('#password').css('border', '1px solid #0d2c52');
		} // end if
		else {
			toggleOn('#error_password');
			$('#password').css('border', '1px solid #D80000');
			$('#error_password').text('password is required'); // error
		} // end else
	});

});

// enables an element using. form: '#elment_id' < # is required!! 

function toggleOn(element) {
	if (!($(element).is(':visible'))) { // if the elment is not already visible
		$(element).toggle('fast');
	} // end if
} // end function toggle

// disbles an element. form: '#elment_id' < notice the # !! required!!

function toggleOf(element) {
	if (($(element).is(':visible'))) { // if the elment is visible
		$(element).toggle('fast');
	} // end if
} // end function toggleOf