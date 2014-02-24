
<!DOCTYPE hmtl>

   <head>
   <meta name="google-site-verification" content="51C5aRURqV16JWBwGd5NqHOoxHLf9sgMhzltqCUSWkc" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>RoboX</title>
   <link rel = "shortcut icon" href = "/RoboX/images/templatemo_logo.png" />
   <meta name="keywords" content="robot shop, robot, engineering, machine, device, robot pilot, robotic, robotism, robotry, robot-like, automaton, golem, android, humanoid, mechanical man, mechanism, bot" />
   <meta name="description" content="Robot Shop. Shop for robot vacuums and other domestic robots, professional robots, robot toys, robot kids and robot parts." />
   <link href="/RoboX/css/templatemo_style.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="/RoboX/css/ddsmoothmenu.css" />
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" > </script>	<?php if (isset($page)) {		if ($page == "product") { ?>			<script src="star_rating/jquery.js" type="text/javascript"> </script>   			<link rel="stylesheet" type="text/css" href="star_rating/css.css">	<?php 		}	}	?>
   <!--<script type="text/javascript" src="/RoboX/js/jquery.min.js"></script> -->
   <script type="text/javascript" src="/RoboX/cookies/cookies_enabled.js"></script>
   <script type="text/javascript" src="/RoboX/js/ddsmoothmenu.js">
   
   /***********************************************
   * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
   * This notice MUST stay intact for legal use
   * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
   ***********************************************/
   
   </script>
   <script language="javascript" type="text/javascript">
   function clearText(field)
   {
       if (field.defaultValue == field.value) field.value = '';
       else if (field.value == '') field.value = field.defaultValue;
   }
   </script>
   <script type="text/javascript">

	ddsmoothmenu.init({
		mainmenuid: "top_nav", //menu DIV id
		orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu', //class added to menu's outer DIV
		//customtheme: ["/underConstruction1c5a80", "/underConstruction18374a"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	});
	
	</script>
   <link rel="stylesheet" type="text/css" media="all" href="/RoboX/css/jquery.dualSlider.0.2.css" />
   <script src="/RoboX/js/jquery-1.3.2.min.js" type="text/javascript"></script>
   <script src="/RoboX/js/jquery.easing.1.3.js" type="text/javascript"></script>
   <script src="/RoboX/js/jquery.timers-1.2.js" type="text/javascript"></script>
   <script src="/RoboX/js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>
   <script type="text/javascript">
		 
		 $(document).ready(function() {
			  
			  $(".carousel").dualSlider({
					auto:true,
					autoDelay: 6000,
					easingCarousel: "swing",
					easingDetails: "easeOutBack",
					durationCarousel: 1000,
					durationDetails: 600
			  });
        
		 });
		 
	</script>
</head>

   <body>
   <div id="templatemo_wrapper">
         <div id="templatemo_header">
         <div id="site_title">
               <h1><a href="/RoboX/" ><img src="/RoboX/images/templatemo_logo.png" alt="RoboX"/></a> </h1>
            </div>
         <div id="header_right">
               <div id="noCookies" style="display:inline-block"><a href="/RoboX/underConstruction">My Wishlist</a> | <a href="/RoboX/underConstruction">My Cart</a> | <a href="/RoboX/underConstruction">Checkout |</a>
               <?php
					if (isset($_SESSION['userLoggedIn'])){ 
						echo "Hi, " . $_SESSION['userID']; 
						echo "<a href='/RoboX/login/logout.php'>Logout</a>";
					} else { 
						echo "<div id='log_reg' style='display:inline-block'> <a href='/RoboX/login/'>Log In</a> <i>or</i> <a href = '/RoboX/registration/' >Register</a></div>";
					}
					?>
            </div>
               <a href="/RoboX/login/" style="color: #08aee3;">MyRoboX</a></div>
         <div class="cleaner"></div>
      </div>
         <!-- END of templatemo_header -->
         
         <div id="templatemo_menu">
         <div id="top_nav" class="ddsmoothmenu">
               <ul>
               <li><a href='/RoboX/' class="<?php if(isset($home_selected)){ echo $home_selected; } ?>">Home</a></li>
               <li><a href="/RoboX/products" class="<?php if (isset($products_selected)) { echo $products_selected; }?>">Products</a>
                     <ul>
                     <li><a href="/RoboX/underConstruction">Personal and Domestic Robots</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 2</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 3</a></li>
                  </ul>
                  </li>
               <li><a href="/RoboX/about">About</a>
                     <ul>
                     <li><a href="/RoboX/underConstruction">Sub menu 1</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 2</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 3</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 4</a></li>
                     <li><a href="/RoboX/underConstruction">Sub menu 5</a></li>
                  </ul>
                  </li>
               <li><a href="/RoboX/faqs">FAQs</a></li>
               <li><a href="/RoboX/checkout">Checkout</a></li>
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