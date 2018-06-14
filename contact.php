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
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	    <script type="text/javascript">
	      google.charts.load('current', {
	        'packages':['map'],
	        // Note: you will need to get a mapsApiKey for your project.
	        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
	        'mapsApiKey': 'AIzaSyANCTnHDLW33WCzrVAWjF0RpA3H7RnmLp8'
	      });
	      google.charts.setOnLoadCallback(drawChart);
	      function drawChart() {
	        var data = google.visualization.arrayToDataTable([
	          ['Lat', 'Long', 'Name'],
	          [26.9194461, 80.9437379, 'Rivaaz Catering Services']
	        ]);

	        var options = {
	        	zoomLevel: 18,
		        showTooltip: true,
		        showInfoWindow: true,
		        useMapTypeControl: true,
				icons: {
					default: {
					  normal: 'images/flag.png',
					  selected: 'images/location.png'
					}
				}, 
				maps: {
          // Your custom mapTypeId holding custom map styles.
	          styledMap: {
	            name: 'Styled Map', // This name will be displayed in the map type control.
	            styles: [
	              {featureType: 'poi.attraction',
	               stylers: [{color: '#fce8b2'}]
	              },
	              {featureType: 'road.highway',
	               stylers: [{hue: '#0277bd'}, {saturation: -50}]
	              },
	              {featureType: 'road.highway',
	               elementType: 'labels.icon',
	               stylers: [{hue: '#000'}, {saturation: 100}, {lightness: 50}]
	              },
	              {featureType: 'landscape',
	               stylers: [{hue: '#259b24'}, {saturation: 10}, {lightness: -22}]
	              }
	        ]}},
	        mapType: 'styledMap'

	        };

	        var map = new google.visualization.Map(document.getElementById('map_markers_div'));
	        map.draw(data, options);
	      }

	    </script>

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
						<a href="index.html"><img src="images/catering-icon-rivaaz.png"></a>
					</div> 
					<div class="menu">
						<a href="#" class="navicon"></a> 
						<div class="toggle"> 
							<ul class="toggle-menu">
								<li><a href="index.html"> Home</a></li>
								<li><a href="about.html"> About</a></li> 
								<li><a href="gallery.html"> Gallery</a></li> 
								<li><a href="menu.html"> Menu</a></li>
								<li><a href="contact.php" class="active"> Contact Us</a></li>
							</ul>
						</div> 
					</div>   
					<div class="social-w3licon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>  
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
						<div id="map_markers_div" style="width: 600px; height: 538px"></div>
 
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
					<p>Our love for food and celebration inspires us to create splendid food and sensational gatherings. Delivering sensational food to corporate events, weddings and private parties in Lucknow and all over Uttar Pradesh.<span>Rivaaz strive to achieve excellence, aiming to always use seasonal ingredients locally sourced from independent suppliers</span></p>
				</div>
				<div class="col-md-3 col-sm-3 agileinfo_footer_grid mid-w3l nav2">
					<h3 class="agileits-title">Cuisine</h3>
					<ul>
						<li><a href="#Indian" data-toggle="modal"><i class="fa fa-arrow-right"></i> Indian</a></li>
						<li><a href="#Continental" data-toggle="modal"><i class="fa fa-arrow-right"></i> Continental</a></li>
						<li><a href="#Oriental" data-toggle="modal"><i class="fa fa-arrow-right"></i> Oriental</a></li>
						<li><a href="#Italian" data-toggle="modal"><i class="fa fa-arrow-right"></i> Italian</a></li>
						<li><a href="#Mexican" data-toggle="modal"><i class="fa fa-arrow-right"></i> Mexican</a></li>
						<li><a href="#Lebanese" data-toggle="modal"><i class="fa fa-arrow-right"></i> Lebanese</a></li>
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
		<!-- //footer -->
		<!-- modal-about -->
		<div class="modal bnr-modal fade" id="owner" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div> 
					<div class="modal-body modal-spa">
						<img src="images/owner.jpeg" class="img-responsive" alt=""/>
						<div class="modal-w3lstext">
							<h4>Chef Prakash Gupta</h4>
							<p>Chef Prakash Gupta is an ex-employee of Hyatt Regency, Kolkata. After completing his graduation from the prestigious culinary institute IHM Kolkata, he went on to garner practical knowledge from the culinary masters in Hyatt Regency, Kolkata. During the entire work duration of more than 3 years as a Chef, he learned the ins and outs of different cuisines from national and international personalities. He has now moved ahead with his goal of becoming an entrepreneur and ushering the masses to a 5-star opulence, by a more refined take on the catering business.  </p>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<div class="modal bnr-modal fade" id="Indian" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div> 
					<div class="modal-body modal-spa">
						<img src="images/indian.jpeg" class="img-responsive" alt=""/>
						<div class="modal-w3lstext">
							<h4>Indian Cuisine</h4>
							<p>Indian cuisine consists of a wide variety of regional and traditional cuisines native to the Indian subcontinent. Given the range of diversity in soil type, climate, culture, ethnic groups, and occupations, these cuisines vary substantially from each other and use locally available spices, herbs, vegetables, and fruits.</p>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<div class="modal bnr-modal fade" id="Continental" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div> 
					<div class="modal-body modal-spa">
						<img src="images/continental.jpeg" class="img-responsive" alt=""/>
						<div class="modal-w3lstext">
							<h4>Continental Cuisine</h4>
							<p>Continental cuisine, is a generalized term collectively referring to the cuisines of Europe and other countries. It includes Europe, Russia, New Zealand, Britain, Australasia, Oceania, Latin America and cuisines of North America which derive substantial influence from continental settlers in those regions. These places may not have a distinguished cuisine of their own, and also are very similar in some way or the other in terms of taste, ingredients, spices, flavorings, herbs and method of cooking.  Continental cuisine on the whole can be referred as International cuisine, the term is used by East Asians to contrast with Asian styles of cooking.</p>
							<p>Continental dishes that are made by stewing, grilling and roasting method are low in calories, as they make very less use of fats. Continental food mainly consists of high protein items like eggs and meats. Seafood is high in Omega-3 fatty acids and it is also one of the main food items in continental dishes.</p>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<div class="modal bnr-modal fade" id="Oriental" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div> 
					<div class="modal-body modal-spa">
						<img src="images/oriental.jpeg" class="img-responsive" alt=""/>
						<div class="modal-w3lstext">
							<h4>Oriental Cuisine</h4>
							<p>Oriental cuisine can actually refer to very different styles of Asian cooking depending on the nation or area. The Oriental section of Asia covers a huge chunk of eastern Asia known as the Far East, and thus encompasses a wide range of culinary traditions. What might be called Oriental cooking in one nation might be considered something else in another nation.</p>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<div class="modal bnr-modal fade" id="Italian" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div> 
					<div class="modal-body modal-spa">
						<img src="images/italian.jpg" class="img-responsive" alt=""/>
						<div class="modal-w3lstext">
							<h4>Italian Cuisine</h4>
							<p>Italian cuisine is food typical from Italy. It has developed through centuries of social and economic changes, with roots stretching to antiquity.
<br>
Significant changes occurred with the discovery of the New World and the introduction of potatoes, tomatoes, bell peppers, maize and sugar beet, this last introduced in quantity in the 18th century.Italian cuisine is known for its regional diversity, especially between the north and the south of the Italian peninsula. It offers an abundance of taste, and is one of the most popular and copied in the world. It influenced several cuisines around the world chiefly that of the United States.
<br>
Italian cuisine is generally characterized by its simplicity, with many dishes having only two to four main ingredients. Italian cooks rely chiefly on the quality of the ingredients rather than on elaborate preparation. Ingredients and dishes vary by region. Many dishes that were once regional, have proliferated with variations throughout the country.</p>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<div class="modal bnr-modal fade" id="Mexican" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div> 
					<div class="modal-body modal-spa">
						<img src="images/mexican.jpeg" class="img-responsive" alt=""/>
						<div class="modal-w3lstext">
							<h4>Mexican Cuisine</h4>
							<p>Mexican cuisine is as complex as other ancient cuisines, such as those of China and Japan, with techniques and skills developed over thousands of years of history.It is created mostly with ingredients native to Mexico, as well as those brought over by the Spanish conquistadors, with some new influences since then. In addition to staples, such as corn and chile peppers, native ingredients include tomatoes, squashes, avocados, cocoa and vanilla, as well as ingredients not generally used in other cuisines, such as edible flowers, vegetables like huauzontle and papaloquelite, or small criollo avocados, whose skin is edible.<br>
Vegetables play an important role in Mexican cuisine. Common vegetables include zucchini, cauliflower, corn, potatoes, spinach, swiss chard, mushrooms, jitomate (red tomato), green tomato, etc. Other traditional vegetable ingredients include chiles, huitlacoche (corn fungus), huauzontle, and nopal (cactus leaves) to name a few.<br>
European contributions include chicken,  cheese, herbs and spices, as well as some fruits.<br>
Tropical fruits, many of which are indigenous to Mexico and the Americas, such as guava, prickly pear, sapote, mangoes, bananas, pineapple and cherimoya (custard apple) are popular, especially in the center and south of the country.</p>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<div class="modal bnr-modal fade" id="Lebanese" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div> 
					<div class="modal-body modal-spa">
						<img src="images/lebanese.jpeg" class="img-responsive" alt=""/>
						<div class="modal-w3lstext">
							<h4>Lebanese Cuisine</h4>
							<p>Lebanese cuisine is a Levantine style of cooking that includes an abundance of whole grains, fruits, vegetables, starches, fresh fish and seafood; animal fats are consumed sparingly. Poultry is eaten more often than red meat, and when red meat is eaten, it is usually lamb on the coast, and goat meat in the mountain regions. It also includes copious amounts of garlic and olive oil, often seasoned by lemon juice. Chickpeas and parsley are also staples of the Lebanese diet.<br>
							Well known savoury dishes include baba ghanouj, a dip made of char-grilled eggplant; falafel, small deep-fried patties made of highly spiced ground chickpeas, fava beans, or a combination of the two; and shawarma, a sandwich with marinated meat skewered and cooked on large rods. An important component of many Lebanese meals is hummus, a dip or spread made of blended chickpeas, sesame tahini, lemon juice, and garlic, typically eaten with pita bread. A well known dessert is baklava, which is made of layered filo pastry filled with nuts and steeped in date syrup or honey. Some desserts are specifically prepared on special occasions: the meghli, for instance, is served to celebrate a newborn baby in the family.</p>
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