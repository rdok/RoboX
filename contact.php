<?php session_start(); ?>
<?php ob_start();
include('inc/header.php');
 ?>

<?php	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$message = trim($_POST["message"]);
		
		if ($name == "" OR $email =="" OR $message == "") {
			echo "You must specify a value for name, email address, and message.";
			exit;
		}
		
		if ($_POST["address"] != "") {
			echo "Your form submission has an error.";
			exit;
		}
		
		require_once("inc/phpmailer/class.phpmailer.php");
		
		$mail = new PHPMailer(); // defaults to using php "mail()"

		if (!$mail->ValidateAddress($email)) {
			echo "You must specify a valid email address.";
			exit;
		}
		
		// check values of $_POST for malicious values
		foreach( $_POST as $value) {
			if (stripos($value, 'Content-Type:') !== FALSE) {
				echo "There was a problem with the information you entered.";
				exit;
			}
		}
		
		$email_body = "";
		$email_body .= "Name: $name<br>";
		$email_body .= "Email: " . $email . "<br>";
		$email_body .= "Message: $message";
		
		

		$mail->SetFrom($email, $name);

		$address = "r.dokollari@acg.edu";
		$mail->AddAddress($address, "Rizart Dokollari");

		$mail->Subject    = "RoboX Form Submission | " . $name;

		$mail->MsgHTML($email_body);

		if(!$mail->Send()) {
		  echo "There was a problem sending the email: " . $mail->ErrorInfo;
		  exit;
		} 
		
	header("Location: contact.php?status=thanks");
	exit;
}
			
?>


 
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
				
            <?php   if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
					<h3>Thanks for the email! We&rsquo;ll be in touch shortly.</h3>
					<?php } else { ?>
			<h1>Contact</h1>
			<p>I&rsquo;d love to hear from you! Complete the form to send me an email!</p>
               <p>Etiam id massa scelerisque nunc luctus ultrices tellus laoreet eget a sem. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
               <div id="contact_form">
                  <form method="post" name="contact" action="/RoboX/contact.php">
                     <label for="name">Name:</label>
                     <input type="text" id="name" name="name" class="required input_field" />
                     <div class="cleaner h10"></div>
                     <label for="email">Email:</label>
                     <input type="text" id="email" name="email" class="validate-email required input_field" />
                     <div class="cleaner h10"></div>
                     <label for="message">Message:</label>
                     <textarea id="message" name="message" rows="0" cols="0" class="required"></textarea>
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
				<?php  } ?>
            <div class="cleaner h40"></div>
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=American+College+Of+Greece&amp;aq=&amp;sll=37.995757,23.813038&amp;sspn=0.113499,0.154324&amp;ie=UTF8&amp;hq=American+College+Of+Greece&amp;hnear=&amp;t=m&amp;cid=6278279313770348205&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
            <br />
            <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=American+College+Of+Greece&amp;aq=&amp;sll=37.995757,23.813038&amp;sspn=0.113499,0.154324&amp;ie=UTF8&amp;hq=American+College+Of+Greece&amp;hnear=&amp;t=m&amp;cid=6278279313770348205&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small> </div>
         <div class="cleaner"></div>
      </div>
<?php include('inc/footer.php'); ?>