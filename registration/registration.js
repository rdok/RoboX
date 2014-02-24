// JavaScript Document
if (!are_cookies_enabled()) {
	// if user has disabled cookies redirect him to appropirate page:
	window.location.replace("/RoboX/cookies/request_cookies");
}

//////////////////PREPARE xhrRequestObject////////////////////////////
var xhr = createxhrRequestObject();
var errorFound = false;

function createxhrRequestObject() {
	var xhr;
	
	if (window.ActiveXObject) { // if ActiveX is present
		xhr = new ActiveXObject( "Microsoft.XMLHTTP" );
	} // end if
	else if (window.XMLHttpRequest) { // if XHR is defined
		xhr = new XMLHttpRequest();
	}
	else { // throw error if there's no Ajax support
		throw new Error('Ajax is not supported by this browser');
	}
	
	return xhr;
} // end function createxhrRequestObject
//////////////////END - PREPARATION xhrRequestObject///////////////////

//////////////////// SEND REQUEST TO SERVER/////////////////////////
function checkValues( id, errorHolder ) {
	if( xhr.readyState == 0 || xhr.readyState == 4 ) {
		var params = getParameters( id );
		xhr.open( "POST", "/RoboX/registration/single_validation.php", true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.onreadystatechange = function() {
				handleServerResponse( id, errorHolder );
		};
		xhr.send( params );
	} // end if 
	else { 
		setTimeout( function() {
			checkValues( id, errorHolder );
		}, 50, id, errorHolder );
	} // end else
} // end function process 

var firstVerify = false;
// get parameters to send to server
function getParameters( id ){
	var fName = $('#fName').val();
	var lName = $('#lName').val();
	var email = $('#email').val();
	var userID = $('#userID').val();
	var password = $('#password').val();
	var verifyPassword = $('#verifyPassword').val();
	var output;

	if( id != 'password' && id != 'verifyPassword' && id != 'all' ) 
		output = "checkVar=" + $('#'+id ).val() + "&id=" + id;
	else if ( id != 'all' ) {
		output = 'fName='+ fName + '&lName=' + lName	+ '&email=' + email + '&userID=' + userID + '&password=' + password + '&verifyPassword=' + verifyPassword;
	}
	else {
		output = 'password=' + passVal	+ '&verifyPassword=' + passVerVal + '&firstVerify=' + firstVerify;
		firstVerify = false;
	}
	
	return output;
} // end function getParameters

// handleServerResponse 
function handleServerResponse( id, errorHolder ) {
	if ( xhr.readyState == 4 &&  ( xhr.status >= 200 && xhr.status < 300 ) ) {
			xmlResponse = xhr.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			
			changePage( message, id, errorHolder );

	} // end if 
	
} // end function handleServerResponse
////////////////// END REQUEST TO SERVER ///////////////////


// fix this crappy code as soon you find time.
function changePage( message, id, errorHolder ) {
	
	switch( message ) {
		case 'false':
			if( !( $('#' + errorHolder).is(':visible') ) )
				$('#' + errorHolder).slideToggle(300);
			$('#' + id ).css('border', '1px solid #D80000');
			break;
		case 'true':
			if( $('#' + errorHolder).is(':visible') )
				$('#' + errorHolder).toggle(200);
			$('#' + id ).css('border', '1px solid #4F8A10');
			break;
		case '1': // message: 'Password do not match'
			if( !$('#noMatch').is(':visible') ) // if above message is not visible
				$('#noMatch').toggle(200); // toggle it
			if( $('#' + errorHolder + ' > ul').is(':visible') ) // if password info is visible
				$('#' + errorHolder + ' > ul').toggle(200); // hide it
			$('#' + id ).css('border', '1px solid #D80000');
			break;
		case '2': // if both passwords are equal
			if( $('#matchF').is(':visible') )
				$('#matchF').toggle(200);
			if( $('#noMatch').is(':visible') ) // if above message is not visible
				$('#noMatch').toggle(200); // toggle it
			if( $('#' + errorHolder + ' > ul').is(':visible') )
				$('#' + errorHolder + ' > ul').toggle(200);
			$('#password' ).css('border', '1px solid #4F8A10');
			$('#verifyPassword' ).css('border', '1px solid #4F8A10');
			break;
		case '3':// prompt: 'confirm password'
			if(!$('#matchF').is(':visible'))
				$('#matchF').toggle(300);
			if( !$('#' + errorHolder).is(':visible') )
				$('#' + errorHolder ).toggle(200);
			if( $('#' + errorHolder + ' > ul').is(':visible') ) // if password info is visible
				$('#' + errorHolder + ' > ul').toggle(200); // hide it
			$('#password').css('border', '1px solid #4F8A10');
			$('#verifyPassword').css('border', '1px solid #9F6000');
			break;
		case '4': // if coorect confirmation pass
		 	if($('#matchF').is(':visible')) // if invisible
				$('#matchF').toggle(300);
			if( $('#' + errorHolder).is(':visible') )
				$('#' + errorHolder ).toggle(200);
			if( $('#' + errorHolder + ' > ul').is(':visible') ) // if password info is visible
				$('#' + errorHolder + ' > ul').toggle(200); // hide it
			$('#verifyPassword').css('border', '1px solid #4F8A10');
			$('#password').css('border', '1px solid #D80000');
			break;
		case '5': // show info for correct passwords
			if( !$('#' + errorHolder + ' > ul').is(':visible') ) // if password info is invisible
				$('#' + errorHolder + ' > ul').toggle(200);
			$('#' + id ).css('border', '1px solid #D80000');
			if($('#matchF').is(':visible')) // if invisible
				$('#matchF').toggle(300);
			if( $('#noMatch').is(':visible') ) // if above message is not visible
				$('#noMatch').toggle(200); // toggle it
			break;
		case '6':
			if( !$('.classPassMess').is(':visible') )
				$('.classPassMess').toggle(200);
			$('#' + errorHolder + ' > ul').toggle(200);
			$('#' + id ).css('border', '1px solid #D80000');
			break;
		case '7': // show info for correct passwords /  change other id to read
			if( !$('#' + errorHolder + ' > ul').is(':visible') ) // if password info is invisible
				$('#' + errorHolder + ' > ul').toggle(200);
			$('#' + (id=='password'?'verifyPassword':'password') ).css('border', '1px solid #D80000');
			if($('#matchF').is(':visible')) // if invisible
				$('#matchF').toggle(300);
			if( $('#noMatch').is(':visible') ) // if above message is not visible
				$('#noMatch').toggle(200); // toggle it
			$('#verifyPassword').css('border', '1px solid #D80000');
			$('#password').css('border', '1px solid #4F8A10');
			break;
		case 'Success':
			// direct to another page, since registration was successfull. preferably to log in.
			break;
		default:
			break;
	} // end switch

} // end function changePage

$(document).ready(function(){
	$('#fName').focusout(function() {	// verify first name
		checkValues( 'fName', 'firstName_E' );
	});
	$('#lName').focusout(function() {	// verify last name
		checkValues( 'lName', 'secondName_e' );
	});
	$('#email').focusout(function() {	// verify email
		checkValues( 'email', 'email_E' );
	});
	$('#userID').focusout(function() {	// verify user id
		checkValues( 'userID', 'userIDInfo' );
	});
	$('#password').focusout(function(){	// verify passsword
		checkValues('password', 'passwordInfo');
	});
	$('#verifyPassword').focusout(function(){	// match passwords
		checkValues( 'verifyPassword', 'passwordInfo');
	});
	
	$('#infoID').mouseenter(function(){ // show more info regardin emails.
		$('#moreInfoEmail').slideToggle(300);	
	});
	$('#moreInfoEmail').mouseleave(function(){ // close info on emails
		$('#moreInfoEmail').slideToggle(300);
	});
	$('#submit').click(function(){
		$.post('/RoboX/registration/registration.php', $('#form').serialize(), function(data){
			changePage( data.fName, 'fName', 'firstName_E' );
			changePage( data.lName, 'lName', 'secondName_e' );
			changePage( data.email, 'email', 'email_E' );
			changePage( data.userID, 'userID', 'userIDInfo' );
			changePage( data.matchPasswords, 'password', 'passwordInfo' );
			changePage( data.matchPasswords, 'verifyPassword', 'passwordInfo' );
			if ( data.errorFound ) {
				if(!$('#generMes').is(':visible')) {
					$('#generMes').toggle('fast');
				} // end inner if
				$('#generMes').css('color', '#D80000');
				$('#generMes').text(data.dbMessage);
			} // end if
			else {
				if(!$('#generMes').is(':visible')) { // show success message if it isn't already shown.
					$('#generMes').toggle('fast');
				} // end secod inner if
				$('#generMes').css('color', '#4F8A10');
				$('#generMes').text("Successfuly registered. You'll be directed to login page.");
				setTimeout("window.location.replace('/RoboX/login/')", 5000);
			} // end else
		}, 'json');		
	});
});