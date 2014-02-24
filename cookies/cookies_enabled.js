// JavaScript Document

$(document).ready(function() {
	// if cookies are not enabled then disable options for login/register/wishlist/etc..
	if (!are_cookies_enabled()) {
		$("#noCookies").hide();
	} // end if

});

// return true if cookies are enabled. else false.
function are_cookies_enabled() {
	var cookieEnabled = (navigator.cookieEnabled) ? true : false;

	if (typeof navigator.cookieEnabled == "undefined" && !cookieEnabled) {
		document.cookie = "testcookie";
		cookieEnabled = (document.cookie.indexOf("testcookie") != -1) ? true : false;
	} // end if

	return (cookieEnabled);
} // end method are_cookies_enabled