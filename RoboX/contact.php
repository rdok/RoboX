<?php session_start(); 
if (isset($_SESSION['userLoggedIn'])){ 
	$logged_in=true;
	$userID = $_SESSION['userID'];
}else {
	$logged_in=false;	
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Station Shop Theme - Contact Page</title>
   <meta name="keywords" content="station shop, contact page, maps, free templates, website templates, CSS, HTML" />
   <meta name="description" content="Station Shop, Contact Page, free CSS template provided by templatemo.com" />
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
					if ($logged_in){ 
						echo "Hi, " . $userID; 
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
               <li><a href="/RoboX/checkout">Checkout</a></li>
               <li><a href="/RoboX/contact" class="selected">Contact</a></li>
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
            <h1>Contact Information</h1>
            <div class="content_half float_l">
               <h4>Send us a message now!</h4>
               <p>Etiam id massa scelerisque nunc luctus ultrices tellus laoreet eget a sem. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
               <div id="contact_form">
                  <form method="post" name="contact" action="/RoboX/underConstruction">
                     <label for="author">Name:</label>
                     <input type="text" id="author" name="author" class="required input_field" />
                     <div class="cleaner h10"></div>
                     <label for="email">Email:</label>
                     <input type="text" id="email" name="email" class="validate-email required input_field" />
                     <div class="cleaner h10"></div>
                     <label for="subject">Subject:</label>
                     <input type="text" name="subject" id="subject" class="input_field" />
                     <div class="cleaner h10"></div>
                     <label for="text">Message:</label>
                     <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                     <div class="cleaner h10"></div>
                     <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                     <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                  </form>
               </div>
            </div>
            <div class="content_half float_r">
               <h4>Mailing Address</h4>
               <h6><strong>Location One</strong></h6>
               132-145 Aliquam vitae mi tellus,<br />
               Nulla mauris elit pretium, 23900<br />
               Pellentesque sit amet<br />
               <br />
               <strong>Phone:</strong> 090-090-1080<br />
               <strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a><br />
               <div class="cleaner h20"></div>
               <h6><strong>Location Two</strong></h6>
               211-303 Curabitur tincidunt euismod,<br />
               Sed eu  tortor nunc at ipsum, 14080<br />
               Vestibulum nec tincidunt<br />
               <br />
               <strong>Phone:</strong> 020-050-1920<br />
               <strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a><br />
            </div>
            <div class="cleaner h40"></div>
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=American+College+Of+Greece&amp;aq=&amp;sll=37.995757,23.813038&amp;sspn=0.113499,0.154324&amp;ie=UTF8&amp;hq=American+College+Of+Greece&amp;hnear=&amp;t=m&amp;cid=6278279313770348205&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
            <br />
            <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=American+College+Of+Greece&amp;aq=&amp;sll=37.995757,23.813038&amp;sspn=0.113499,0.154324&amp;ie=UTF8&amp;hq=American+College+Of+Greece&amp;hnear=&amp;t=m&amp;cid=6278279313770348205&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small> </div>
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