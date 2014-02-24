<?php session_start(); ?>
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
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" > </script>
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
               <li><a href='/RoboX/' class="selected">Home</a></li>
               <li><a href="/RoboX/products">Products</a>
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
         
         <div id="templatemo_middle" class="carousel">
         <div class="panel">
               <div class="details_wrapper">
               <div class="details">
                     <div class="detail">
                     <h2><a href="/RoboX/underConstruction">Station Shop</a></h2>
                     <p><a href="/RoboX/underConstruction">Station Shop</a> is free css template provided by <a href="/RoboX/underConstruction">templatemo.com</a> for your personal or commercial websites. Sed aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. </p>
                     <a href="/RoboX/underConstruction" title="Read more" class="more">Read more</a> </div>
                     <!-- /detail -->
                     
                     <div class="detail">
                     <h2><a href="/RoboX/underConstruction">Fusce hendrerit</a></h2>
                     <p>Duis dignissim tincidunt turpis eget pellentesque. Nulla consectetur accumsan facilisis. Suspendisse et est lectus, at consectetur sem.</p>
                     <a href="/RoboX/underConstruction" title="Read more" class="more">Read more</a> </div>
                     <!-- /detail -->
                     
                     <div class="detail">
                     <h2><a href="/RoboX/underConstruction">Aenean massa cum</a></h2>
                     <p>Sed vel interdum sapien. Aliquam consequat, diam sit amet iaculis ultrices, diam erat faucibus dolor, quis auctor metus libero vel mi.</p>
                     <a href="/RoboX/underConstruction" title="Read more" class="more">Read more</a> </div>
                     <!-- /detail --> 
                     
                  </div>
               <!-- /details --> 
               
            </div>
               <!-- /details_wrapper -->
               
               <div class="paging"> <a href="javascript:void(0);" class="previous" title="Previous" >Previous</a> <a href="javascript:void(0);" class="next" title="Next">Next</a> </div>
               <!-- /paging --> 
               
               <a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a> <a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a> </div>
         <!-- /panel -->
         
         <div class="backgrounds">
               <div class="item item_1"> <img src="/RoboX/images/slider/02.jpg" alt="Slider 01" /> </div>
               <!-- /item -->
               
               <div class="item item_2"> <img src="/RoboX/images/slider/03.jpg" alt="Slider 02" /> </div>
               <!-- /item -->
               
               <div class="item item_3"> <img src="/RoboX/images/slider/01.jpg" alt="Slider 03" /> </div>
               <!-- /item --> 
               
            </div>
         <!-- /backgrounds --> 
      </div>
         <!-- END of templatemo_middle -->
         
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
                     <div class="bs_box"> <a href="/RoboX/underConstruction"><img src="/RoboX/images/templatemo_image_01.jpg" alt="Image 01" /></a>
                     <h4><a href="/RoboX/underConstruction">Donec nunc nisl</a></h4>
                     <p class="price">$10</p>
                     <div class="cleaner"></div>
                  </div>
                     <div class="bs_box"> <a href="/RoboX/underConstruction"><img src="/RoboX/images/templatemo_image_01.jpg" alt="Image 02" /></a>
                     <h4><a href="/RoboX/underConstruction">Aenean eu tellus</a></h4>
                     <p class="price">$12</p>
                     <div class="cleaner"></div>
                  </div>
                     <div class="bs_box"> <a href="/RoboX/underConstruction"><img src="/RoboX/images/templatemo_image_01.jpg" alt="Image 03" /></a>
                     <h4><a href="/RoboX/underConstruction">Phasellus ut dui</a></h4>
                     <p class="price">$20</p>
                     <div class="cleaner"></div>
                  </div>
                     <div class="bs_box"> <a href="/RoboX/underConstruction"><img src="/RoboX/images/templatemo_image_01.jpg" alt="Image 04" /></a>
                     <h4><a href="/RoboX/underConstruction">Vestibulum ante</a></h4>
                     <p class="price">$16</p>
                     <div class="cleaner"></div>
                  </div>
                  </div>
            </div>
            </div>
         <div id="content" class="float_r">
               <h1>New Products</h1>
               <div class="product_box"> <a href="../productdetail"><img src="/RoboX/images/product/01.jpg" alt="Image 01" /></a>
               <h3>Integer eleifend sed</h3>
               <p class="product_price">$ 100</p>
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
               <div class="product_box"> <a href="../productdetail"><img src="/RoboX/images/product/02.jpg" alt="Image 02" /></a>
               <h3>Nam cursus facilisis</h3>
               <p class="product_price">$ 200</p>
               
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
               <div class="product_box no_margin_right"> <a href="../productdetail"><img src="/RoboX/images/product/03.jpg" alt="Image 03" /></a>
               <h3>Mauris consectetur</h3>
               <p class="product_price">$ 120</p>
               
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
               <div class="product_box"> <a href="../productdetail"><img src="/RoboX/images/product/04.jpg" alt="Image 04" /></a>
               <h3>Proin volutpat</h3>
               <p class="product_price">$ 260</p>
               
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
               <div class="product_box"> <a href="../productdetail"><img src="/RoboX/images/product/05.jpg" alt="Image 05" /></a>
               <h3>Aenean tempus</h3>
               <p class="product_price">$ 80</p>
               
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
               <div class="product_box no_margin_right"> <a href="../productdetail"><img src="/RoboX/images/product/06.jpg" alt="Image 06" /></a>
               <h3>Nulla, Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</h3>
               <p class="product_price">$ 193</p>
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
               <div class="product_box"> <a href="../productdetail"><img src="/RoboX/images/product/07.jpg" alt="Image 07" /></a>
               <h3>Pellentesque egestas</h3>
               <p class="product_price">$ 30</p>
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
               <div class="product_box"> <a href="../productdetail"><img src="/RoboX/images/product/08.jpg" alt="Image 08" /></a>
               <h3>Suspendisse fermentum</h3>
               <p class="product_price">$ 220</p>
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
               <div class="product_box no_margin_right"> <a href="../productdetail"><img src="/RoboX/images/product/09.jpg" alt="Image 09" /></a>
               <h3>Donec laoreet velit</h3>
               <p class="product_price">$ 65</p>
               <a href="../shoppingcart" class="add_to_card">Add to Cart</a> <a href="../productdetail" class="detail">Detail</a> </div>
            </div>
         <div class="cleaner"></div>
      </div>
         <!-- END of templatemo_main -->
         
         <div id="templatemo_footer">
         <p> <a href='/RoboX/'>Home</a> | <a href="/RoboX/products">Products</a> | <a href="/RoboX/about">About</a> | <a href="/RoboX/faqs">FAQs</a> | <a href="/RoboX/checkout">Checkout</a> | <a href="/RoboX/contact">Contact</a> </p>
         Copyright © 2013 <a href="/RoboX/underConstruction">RoboX</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a> </div>
         <!-- END of templatemo_footer --> 
         
      </div>
   <!-- END of templatemo_wrapper -->
   
</body>
</html>