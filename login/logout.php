<?php
session_start();
session_destroy();
?>
<!DOCTYPE html >

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <title>Login RoboX</title>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" > </script>
   <script type="text/javascript" src="/RoboX/cookies/cookies_enabled.js"> </script>
   <script type="text/javascript" src="/RoboX/login/login.js"> </script>
   <link href="/RoboX/css/login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>
   <div style="padding: 100px 0 0 250px;"> <a href="/RoboX/" id="home"> <img src="/RoboX/images/templatemo_logo.png" alt="RoboX"> </a>
      <div id="login-box">
         <p id="log_out_mess">You've signed out. See you again soon!</p>
         <br />
         <div id="relogin_box_field">
            <p><strong>Return to your account</strong></p>
            <p>Ready to do more buying and selling?</p>
            <a href="/RoboX/login/"><input type="button" id="login" name="login" value="Sign In"></a>
      	</div>
      </div>
   </div>
</body>
</html>