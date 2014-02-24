<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Station Shop Theme - Checkout Page</title>
   <meta name="keywords" content="station shop, checkout, theme, free templates, website templates, CSS, HTML" />
   <meta name="description" content="Station Shop Theme, Checkout, free CSS template provided by templatemo.com" />
   <link href="/RoboX/css/templatemo_style.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="/RoboX/css/ddsmoothmenu.css" />
   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
   <script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = "";
    else if (field.value == "") field.value = field.defaultValue;
}
</script>
   <script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["underConstruction1c5a80", "underConstruction18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
   <link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />
   <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
   <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
   <script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
</head>

<body>
   <div id="templatemo_wrapper">
      <div id="templatemo_header">
         <div id="site_title">
            <h1><a href="/RoboX/">RoboX</a></h1>
         </div>
         <div id="header_right"> <a href="/RoboX/underConstruction">My Account</a> | <a href="/RoboX/underConstruction">My Wishlist</a> | <a href="/RoboX/underConstruction">My Cart</a> | <a href="/RoboX/underConstruction">Checkout</a> | <?php
					if (isset($_SESSION['userLoggedIn'])){ 
						echo "Hi, " . $_SESSION['userID']; 
						echo "<a href='/RoboX/login/logout.php'>Logout</a>";
					} else { 
						echo "<div id='log_reg' style='display:inline-block'> <a href='/RoboX/login/'>Log In</a> <i>or</i> <a href = '/RoboX/registration/' >Register</a></div>";
					}
					?> </div>
         <div class="cleaner"></div>
      </div>
      <!-- END of templatemo_header -->
      
      <div id="templatemo_menu">
         <div id="top_nav" class="ddsmoothmenu">
            <ul>
               <li><a href='/RoboX/'>Home</a></li>
               <li><a href="/RoboX/products">Products</a>
                  <ul>
                     <li><a href="/RoboX/underConstruction">Sub menu 1</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 2</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 3</a></li>
                  </ul>
               </li>
               <li><a href="/RoboX/about">About</a>
                  <ul>
                     <li><a href="/RoboX/underConstruction">Sub menu 1</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 2</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 3</a></li>
                     <li><a href="http://www.templatemo.com/page/4">Sub menu 4</a></li>
                     <li><a href="http://www.templatemo.com/page/5">Sub menu 5</a></li>
                  </ul>
               </li>
               <li><a href="/RoboX/faqs">FAQs</a></li>
               <li><a href="/RoboX/checkout" class="selected">Checkout</a></li>
               <li><a href="/RoboX/contact">Contact</a></li>
            </ul>
            <br style="clear: left" />
         </div>
         <!-- end of ddsmoothmenu -->
         <div id="menu_second_bar">
            <div id="top_shopping_cart"> Shopping Cart: <strong>3 Products</strong> ( <a href="/RoboX/underConstruction">Show Cart</a> ) </div>
            <div id="templatemo_search">
               <form action="/RoboX/underConstruction" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" Search " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
               </form>
            </div>
            <div class="cleaner"></div>
         </div>
      </div>
      <!-- END of templatemo_menu -->
      
      <div id="templatemo_main">
         <div id="sidebar" class="float_l">
            <div class="sidebar_box"><span class="bottom"></span>
               <h3>Categories</h3>
               <div class="content">
                  <ul class="sidebar_list">
                     <li class="first"><a href="/RoboX/underConstruction">Aenean varius nulla</a></li>
                     <li><a href="/RoboX/underConstruction">Cras mattis arcu</a></li>
                     <li><a href="/RoboX/underConstruction">Donec turpis ipsum</a></li>
                     <li><a href="/RoboX/underConstruction">Fusce sodales mattis</a></li>
                     <li><a href="/RoboX/underConstruction">Maecenas et mauris</a></li>
                     <li><a href="/RoboX/underConstruction">Mauris nulla tortor</a></li>
                     <li><a href="/RoboX/underConstruction">Nulla odio ipsum</a></li>
                     <li><a href="/RoboX/underConstruction">Nunc ac viverra nibh</a></li>
                     <li><a href="/RoboX/underConstruction">Praesent id venenatis</a></li>
                     <li><a href="/RoboX/underConstruction">Quisque odio velit</a></li>
                     <li><a href="/RoboX/underConstruction">Suspendisse posuere</a></li>
                     <li><a href="/RoboX/underConstruction">Tempus lacus risus</a></li>
                     <li><a href="/RoboX/underConstruction">Ut tincidunt imperdiet</a></li>
                     <li><a href="/RoboX/underConstruction">Vestibulum eleifend</a></li>
                     <li class="last"><a href="/RoboX/underConstruction">Velit mi rutrum diam</a></li>
                  </ul>
               </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
               <h3>Best Sellers </h3>
               <div class="content">
                  <div class="bs_box"> <a href="/RoboX/underConstruction"><img src="images/templatemo_image_01.jpg" alt="Image 01" /></a>
                     <h4><a href="/RoboX/underConstruction">Donec nunc nisl</a></h4>
                     <p class="price">$10</p>
                     <div class="cleaner"></div>
                  </div>
                  <div class="bs_box"> <a href="/RoboX/underConstruction"><img src="images/templatemo_image_01.jpg" alt="Image 02" /></a>
                     <h4><a href="/RoboX/underConstruction">Aenean eu tellus</a></h4>
                     <p class="price">$12</p>
                     <div class="cleaner"></div>
                  </div>
                  <div class="bs_box"> <a href="/RoboX/underConstruction"><img src="images/templatemo_image_01.jpg" alt="Image 03" /></a>
                     <h4><a href="/RoboX/underConstruction">Phasellus ut dui</a></h4>
                     <p class="price">$20</p>
                     <div class="cleaner"></div>
                  </div>
                  <div class="bs_box"> <a href="/RoboX/underConstruction"><img src="images/templatemo_image_01.jpg" alt="Image 04" /></a>
                     <h4><a href="/RoboX/underConstruction">Vestibulum ante</a></h4>
                     <p class="price">$16</p>
                     <div class="cleaner"></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="content" class="float_r">
            <h2>Checkout</h2>
            <h5><strong>BILLING DETAILS</strong></h5>
            <div class="content_half float_l checkout"> Enter your full name as it is on the credit card:
               <input type="text"  style="width:300px;"  />
               Address:
               <input type="text"  style="width:300px;"  />
               City:
               <input type="text"  style="width:300px;"  />
               Country:
               <input type="text"  style="width:300px;"  />
            </div>
            <div class="content_half float_r checkout"> Email:
               <input type="text"  style="width:300px;"  />
               Phone:<br />
               <span style="font-size:10px">Please, specify your reachable phone number. YOU MAY BE GIVEN A CALL TO VERIFY AND COMPLETE THE ORDER.</span>
               <input type="text"  style="width:300px;"  />
            </div>
            <div class="cleaner h50"></div>
            <h3>Shopping Cart</h3>
            <h4>TOTAL: <strong>$140</strong></h4>
            <p>
               <input type="checkbox" />
               I have accepted the Terms of Use.</p>
            <table style="border:1px solid underConstructionCCCCCC;" width="100%">
               <tr>
                  <td height="80px"><img src="images/paypal.gif" alt="paypal" /></td>
                  <td width="400px;" style="padding: 0px 20px;">Recommended if you have a PayPal account. Fastest delivery time. </td>
                  <td><a href="/RoboX/underConstruction" class="more">PAYPAL</a></td>
               </tr>
               <tr>
                  <td  height="80px"><img src="images/2co.gif" alt="paypal" /></td>
                  <td  width="400px;" style="padding: 0px 20px;">2Checkout.com, Inc. is an authorized retailer of goods and services provided by Template-Guide.com
                     2CheckOut accepts customer orders via online checks, Visa, MasterCard, Discover, American Express, Diners, JCB and debit cards with the Visa, Mastercard logo. Sed laoreet ornare ligula eu blandit. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>. </td>
                  <td><a href="/RoboX/underConstruction" class="more">2CHECKOUT</a></td>
               </tr>
            </table>
         </div>
         <div class="cleaner"></div>
      </div>
      <!-- END of templatemo_main -->
      
      <div id="templatemo_footer">
         <p> <a href='/RoboX/'>Home</a> | <a href="/RoboX/products">Products</a> | <a href="/RoboX/about">About</a> | <a href="/RoboX/faqs">FAQs</a> | <a href="/RoboX/checkout">Checkout</a> | <a href="/RoboX/contact">Contact</a> </p>
         Copyright © 2013 <a href='/RoboX/'>RoboX</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a> </div>
      <!-- END of templatemo_footer --> 
      
   </div>
   <!-- END of templatemo_wrapper -->
   
</body>
</html>