<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- if user is not logged in show form to log in ( email, password, remember password, stay logged on future visits) -->
<!-- right panel "register" -->
<!-- left panel images -->
<!-- lost password -->
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Login</title>
   <link rel = "stylesheet" type = "text/css" href = "../Internet Programming/Internet &amp; WWW HowToProgram/In-Classa/In-Class/StyleSheets.css" />
   <script type = "text/javascript">
        	<!--
        	function pickRanImage(){
        		document.writeln( "<img src = \"" +
        			"images/random/image" + Math.floor( Math.random() * 6 ) + ".jpg\" alt = \"randomImage\" />" );
        	}
        	// -->
        </script>
</head>

        <body onload = "pickRanImage()">
   <div class = "introPanel"> <a href = "../countactUs" class = "button" >Contact US</a> <a href = "/RoboX/checkout" class = "button" >Checkout</a> <a href = "../myAccount" class = "button" >My Account</a> <a href = "../Internet Programming/Project/index" class = "button" >Home</a>
              <div class = "searchPanel"> <a href = "../searchKey" class = "button" >Search</a>
         <input type = "text" id = "searchKeyword" placeholder = "Your keywords">
      </div>
              <div class = "newsLetterPanel"> <a href = "../newsLetter" class = "button" >NewsLetter</a>
         <input type = "email" id = "emailNewsLetter" placeholder = "Your email">
      </div>
           </div>
   <br />
   <nav> 
              <!-- Navigation -->
              <ul>
         <li> <a href="/RoboX/products"> Products </a> </li>
         <li> <a href="../domesticRobots"> Domestic Robots </a> </li>
         <li> <a href="../professionalRobots"> Professional Robots </a> </li>
         <li> <a href="../robotParts"> Robot Parts </a> </li>
         <li> <a href="../robotKits"> Robot Kits </a> </li>
      </ul>
           </nav>
   <div class = "leftSidePanel"> 
              <!--  Images... */ --> 
              
           </div>
   <div class = "mainPanel"> 
              <!-- Most Viewed Products -->
              <div class = "loginPanel">
         <h3>Login</h3>
         <table>
                    <tr>
               <td><strong>Email:</strong></td>
               <td><input type = "email" id = "email"  name = "email" /></td>
            </tr>
                    <tr>
               <td><strong>Password:</strong></td>
               <td><input type = "password" id = "password" name = "password" /></td>
            </tr>
                 </table>
      </div>
           </div>
   <div class = "rightSidePanel"> 
              <!--  Images... */ --> 
           </div>
   <div class = "footerPanel"> 
              <!-- Details: links, visa/paypal --> 
           </div>
</body>
</html>