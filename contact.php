<?php
	date_default_timezone_set("Asia/Calcutta"); 
	require 'phpmailer/PHPMailerAutoload.php';
	require 'configure.php';
	$OUTPUT = '';
	if( formSubmission() )
	{
		if(sendmail())
		{
	    	$OUTPUT = successMessage();
		}
	    else
		{
	        $OUTPUT = failureMessage();
	    }
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome to Rivaaz Catering Services, | Contact :: Rivaaz</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<meta name="keywords" content="Catering Services Lucknow, Best Catering Services Lucknow, Indoor Catering Services Lucknow, Outdoor Catering Services lucknow Punjabi Food Caterers lucknow, Corporate Catering Services in lucknow, Best Catering Services, Indoor Catering Services, Outdoor Catering Services, Punjabi Food Caterers, Corporate Catering Services, Small Party Catering, Corporate Event Caterer, Small Party Catering Service in lucknow up" />
		<meta name="description" content="Best caterers in Lucknow - Rivaaz provides premium catering service in Lucknow. We are the finest catering service provider in Lucknow"/>
		<link rel="canonical" href="http://www.rivaaz.in/" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:description" content="Best caterers in Lucknow, India - Rivaaz provides premium catering service in Lucknow, India. We are the finest catering service provider in Lucknow, India" />
		<meta name="twitter:title" content="Best Caterers Services in Lucknow | Rivaaz" />
		<!-- Custom Theme files -->
		<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
		<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
		<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
		<!-- //Custom Theme files --> 
		<!-- js -->
		<script src="js/jquery-2.2.3.min.js"></script>  
		<!-- //js -->
		<!-- web-fonts -->  
		<link href="https://fonts.googleapis.com/css?family=Montez|Satisfy" rel="stylesheet"> 
		<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		<style>
			.message {
				background:#cef6ce;
				color:#088a08;
			}
			.message.error {
				background:#f5a9a9;
				color:#610b0b;
			}
		</style>
		<!-- //web-fonts -->
	</head>
	<body> 
		<!-- banner -->
		<div class="banner">
			<!-- header -->
			<div class="header">
				<div class="container">
					<div class="logo">
						<h1><a href="index.html">Rivaaz</a></h1>
					</div> 
					<div class="menu">
						<a href="#" class="navicon"></a> 
						<div class="toggle"> 
							<ul class="toggle-menu">
								<li><a href="index.html"> Home</a></li>
								<li><a href="about.html"> About</a></li> 
								<li><a href="gallery.html"> Gallery</a></li> 
								<li><a href="codes.html"> Short Codes</a></li>
								<li><a href="menu.html"> MENU</a></li>
								<li><a href="contact.php" class="active"> Contact Us</a></li>
							</ul>
						</div> 
					</div>   
					<div class="social-w3licon">
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //header --> 
			<!-- banner-text -->
			<div class="banner-text w3labout-bnr"> 
				<div class="container">  
					<h2><a href="index.html">Home</a> / Contact</h2>   
				</div>
			</div>
			<!-- //banner-text -->
		</div>
		<!-- //banner -->   
			<!-- contact -->
		<div class="contact">
			<div class="container">  
				<div class="w3ls-title"> 
					<h3 class="agileits-title">Contact Us</h3>
				</div>
				<div class="contact-row agileits-w3layouts new-agileinfo">   
					<div class="col-md-6 col-sm-6 contact-w3lsleft">
						<div class="contact-grid agileits">
							<h4>Request a Call Back </h4>
							<?php print $OUTPUT; ?>
							<form action="#" method="post"> 
								<input type="text" name="Name" placeholder="Name" required="">
							<div class="phone_email"> 
								<input type="text" name="Phone" placeholder="Phone" required=""> 
							</div>
							<div class="phone_email1"> 
								<input type="email" name="Email" placeholder="Email" required="">
							</div>
							<div class="clearfix"> 
							</div>
								<div class="agileits_reservation_grid">
									<div  class="span1_of_1 book_date"> 
										<input class="date" id="datepicker" name="Date" placeholder="Date"  type="text" required="">
									</div>
									<div class="span1_of_1 section_room">
										<!-- start_section_room --> 
										<select id="country1" class="frm-field sect" nama="Occasion" required>
											<option value="Select Your Occasion">Occasion</option>
											<option value="Weddings">Weddings</option>
											<option value="Cocktails">Cocktails</option>
											<option value="Corporates">Corporates</option>
											<option value="Theme Party">Theme Party</option>
											<option value="Private Party">Private Party</option>
											<option value="Birthday Party">Birthday Party</option>
										</select> 
									</div>  
									<div class="clearfix"></div>
								</div>
								<textarea name="Message" placeholder="Message..." required=""></textarea>
								<input type="submit"  name="Send" value="Submit" >
							</form> 
							<!-- Calendar -->
							<link rel="stylesheet" href="css/jquery-ui.css" />
							<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker" ).datepicker();
									  });
							  </script>
							<!-- //Calendar --> 
						</div>
					</div>
					<div class="col-md-6 col-sm-6 contact-w3lsright">
						<iframe width="600" height="450" frameborder="0"src="https://www.google.com/maps/embed/v1/place?q=SS2/491+Sector-F+Jankipuram,+Lucknow&key=AIzaSyANCTnHDLW33WCzrVAWjF0RpA3H7RnmLp8" allowfullscreen>
						</iframe> 
					</div>
					<div class="clearfix"> </div>
				</div>	
			</div>	
		</div>
		<!-- //contact -->  
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="col-md-5 col-sm-5 agileinfo_footer_grid">
					<h3 class="agileits-title">About Us</h3>
					<p>As a full service event company, we provide everything from catering and entertainment to planning and design. <span>Whatever your needs, Rivaaz is committed to making your event memorable and meaningful whether it’s for 2 or 10,000.</span></p>
				</div>
				<div class="col-md-3 col-sm-3 agileinfo_footer_grid mid-w3l nav2">
					<h3 class="agileits-title">Popular</h3>
					<ul>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Proin placerat</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Ipsum et rutrum</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Proin semper utr</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Ligula sit amet</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 agileinfo_footer_grid">
					<h3 class="agileits-title">Address</h3>
					<ul>
						<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> SS2/491 Sector-F Jankipuram, Lucknow</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">contact@rivaaz.in</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +91 78 9078 1386</li>
					</ul>
				</div> 
				<div class="clearfix"> </div>
				<!-- <div class="w3agile_footer_copy">
					<p>© 2017 Dine. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
				</div> -->
			</div>
		</div>
		</div>
		<!-- //footer -->
		<!-- modal-about -->
		<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div> 
					<div class="modal-body modal-spa">
						<img src="images/g2.jpg" class="img-responsive" alt=""/>
						<div class="modal-w3lstext">
							<h4>Blanditiis deleniti</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eumi.</p>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<!-- //modal-about -->    
		<!-- menu-js -->
		<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
		</script> 
		<!-- //menu-js -->
		<!-- jarallax -->  
		<script src="js/SmoothScroll.min.js"></script> 
		<script src="js/jarallax.js"></script> 
		<script type="text/javascript">
			/* init Jarallax */
			$('.jarallax').jarallax({
				speed: 0.5,
				imgWidth: 1366,
				imgHeight: 768
			})
		</script>  
		<!-- //jarallax --> 
		<!-- start-smooth-scrolling --> 
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>	
		<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
				
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
		</script>
		<!-- //end-smooth-scrolling -->	 
		<!-- smooth-scrolling-of-move-up -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!-- //smooth-scrolling-of-move-up -->  		
		<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="js/bootstrap.js"></script>
	</body>
</html>
<?php 
function formSubmission()
{
	if( isset( $_POST['Send'] ) )
	{
		return true;
    }
    return false;
}
function sendmail()
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$phone=$_POST['Phone'];
	$date_occasion=$_POST['Date'];
	$occasion=$_POST['Occasion'];
	$mail=create_email($email,$name);
	$message=$_POST['Message'];
	$subject=$_POST['Subject'];
	$mail->Subject = "Request for Call for occasion" ;
	$t = new DateTime( '@'.time() );
    $datetime = $t->format( 'r' );
	$mail->Body    = '<b>'.$name ."</b><<a href=mailto:".$email.">".$email."</a>> sent requested to call back:<br>
Occasion: ".$occasion."<br>
Phone No: ".$phone."<br>
Date of Occasion: ".$date_occasion."<br>
Message :
----------------------------------------------------------------------<br>
".$message

."<br>----------------------------------------------------------------------<br>
Sent on ".$datetime."";
	$mail->addAddress('krishnakumar.d16@iiits.in');
	$final_message = build_email_template($name,$subject);
	if($mail->send()){
		$mail=create_email('krishnakumardey.dey@gmai.com','Krishna Kumar Dey');
		$message=$final_message;
		$mail->Subject = "Regarding Your query";
		$mail->Body = $message;
		$mail->addAddress($email);
		$mail->send();
		return true;
    }
    else{
        return false;
    }
}
function build_email_template($name,$subject)
{
    // Get email template as string
    $email_template_string = file_get_contents('email_template.html', true);
    // Fill email template with message and relevant banner image
    $email_template = str_replace('%s', $name, $email_template_string);
    $email_template = str_replace('%e', $subject, $email_template);
    return $email_template;
}
function successMessage(){
    $message = "Your message was sent successfully - expect a reply soon!  Thank you!";
    return "<div class='message'>$message</div>";
}

function failureMessage(){
    $message = "We're sorry, we were unable to send your message.  Please try again.";
    return "<div class='message error'>$message</div>";
}
?>