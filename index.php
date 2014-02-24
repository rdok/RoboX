<?php session_start(); ?>
<?php
	$pageTitle = "RoboX's Catalog of Latest Products";
	$home_selected = "selected";
	$section_id = "home";
	include('inc/header.php'); 
?>

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
              <div id="<?php echo $section_id; ?>" class="float_r">
 	<h1><?php echo $pageTitle; ?> </h1>
       
	<?php include("inc/products_data.php"); ?>
       
	<?php
		$total_products = count($products);
		$position = 0;
		$list_view_html = '';
		foreach($products as $product_id => $product){ 
		
			$position++;
			if ($total_products - $position < 6 ) {
				$list_view_html .= get_list_view_html($product_id, $product);
			} // end if
		} // end foreach
		echo $list_view_html;
	?>    
           
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