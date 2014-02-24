<?php
session_start();
if (isset($_SESSION['adminLoggedIn'])){ // if admin not logged in, restrict access.
	header( 'Location: /RoboX/admin/edit_products' ) ;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Internet Dreams</title>
   <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" > </script>
   <script type="text/javascript" src="/RoboX/cookies/cookies_enabled.js"></script>
   <script src="/RoboX/admin/login/login.js" type="text/javascript"> </script>
   </script>
   <!--  jquery core -->
   <script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
   
   <!-- Custom jquery scripts -->
   <script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
   
   <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
   <script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
   <script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg">
   
   <!-- Start: login-holder -->
   <div id="login-holder"> 
      
      <!-- start logo -->
      <div id="logo-login">
         <h1><a href="/RoboX/" ><img src="/RoboX/images/templatemo_logo.png" alt="RoboX"/></a> </h1>
      </div>
      <!-- end logo -->
      
      <div class="clear"></div>
      
      <!--  start loginbox ................................................................................. -->
      <div id="loginbox"> 
         
         <!--  start login-inner -->
         <div id="login-inner">
            <table border="0" cellpadding="0" cellspacing="0">
               <tr>
                  <th>Username-Email </th>
                  <td><input type="text"  class="login-inp" id="input_login_id" /></td>
               </tr>
               <tr>
                  <th>Password</th>
                  <td><input type="password"  id="password" class="login-inp" /></td>
               </tr>
               <tr>
                  <th></th>
                  <td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" />
                     <label for="login-check">Remember me</label></td>
               </tr>
               <tr>
                  <th></th>
                  <td><input type="button" class="submit-login"  id="login"/><p id="errors_label"></p></td>
               </tr>
            </table>
         </div>
         <!--  end login-inner -->
         <div class="clear"></div>
         <a href="" class="forgot-pwd">Forgot Password?</a> </div>
      <!--  end loginbox --> 
      
      <!--  start forgotbox ................................................................................... -->
      <div id="forgotbox">
         <div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
         <!--  start forgot-inner -->
         <div id="forgot-inner">
            <table border="0" cellpadding="0" cellspacing="0">
               <tr>
                  <th>Email address:</th>
                  <td><input type="text" value=""   class="login-inp" /></td>
               </tr>
               <tr>
                  <th> </th>
                  <td><input type="button" class="submit-login"  /></td>
               </tr>
            </table>
         </div>
         <!--  end forgot-inner -->
         <div class="clear"></div>
         <a href="" class="back-login">Back to login</a> </div>
      <!--  end forgotbox --> 
      
   </div>
   <!-- End: login-holder -->
</body>
</html>