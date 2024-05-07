<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from webmarce.com/html/beloved-god/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 11:16:56 GMT -->
<head>
	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	 <title>Church Contact Us</title>

	 <!-- Css Files -->
	 <link href="css/bootstrap.css" rel="stylesheet">
	 <link href="css/font-awesome.css" rel="stylesheet">
	 <link href="css/flaticon.css" rel="stylesheet">
	 <link href="css/slick-slider.css" rel="stylesheet">
	 <link href="css/fancybox.css" rel="stylesheet">
	 <link href="css/jplayer.css" rel="stylesheet">
	 <link href="style.css" rel="stylesheet">
	 <link href="css/color.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
	 

	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	 <!--[if lt IE 9]>
		 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	 <![endif]-->
	</head>
	<body>
	 
	 <!--// Main Wrapper \\-->
<div class="church-main-wrapper">

	<!--// Header \\-->
	<?php 
    include 'header.php'
    ?>
	<!--// Header \\-->


	<!--// Main Content \\-->
	<div class="church-main-content">

		<!--// Main Section \\-->
		<div class="church-main-section">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="church-contactus-wrap">
							<div class="row">
								<div class="col-md-4">
									<div class="church-contact-info">
										<h2 class="church-section-heading">[ Get In Touch ]</h2>
										<p>For more information or to get involved, please contact us today. We look forward to hearing <br>from you!</p>
										<ul class="church-contact-info-list">
											<li>
												<i class="icon church-phone-call"></i>
												<h5>Call Us At</h5>
												<span>+91 9464189590, 9464589590</span>
											</li>
											<li>
												<i class="icon church-envelope"></i>
												<h5>Mail Us At</h5>
												<a href="mailto:yourdomain@name.com">gurcharnsingh726@gmail.com</a>
											</li>
											<!-- <li>
												<i class="icon church-print"></i>
												<h5>Fax Us At</h5>
												<span>00112 233 456 - 9987 654 3321 </span>
											</li> -->
											<li>
												<i class="icon church-house-outline"></i>
												<h5>Find Us At</h5>
												<span>Way of Faith Ministries, Village Retgarh,
                                                    Samana, Patiala - 147101</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-8">
									<div class="church-contact-form">
										<h2 class="church-section-heading">[ Contact Us Now ]</h2>
										<form method="post"  action="contact.php">
											<p>Your email address will not be published. Required fields are marked *</p>
											<ul>
												<li class="full-form">
													<label>Comment*</label>
													<textarea placeholder="Type here" name="Message"></textarea>
												</li>
												<li>
													<label>Name*</label>
													<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text" name="name" required>
												</li>
												<li>
													<label>Email*</label>
													<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="email" name="email" required>
												</li>
												<li class="full-form"><input type="submit" name="submit" value="Submit Now"> <span class="output_message"></span></li>
											</ul>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--// Main Section \\-->

		
	</div>
	<!--// Main Content \\-->

	<!--// Footer \\-->
	<?php 
    include 'footer.php'
    ?>
	<!--// Footer \\-->

	<div class="clearfix"></div>

</div>
	<!--// Main Wrapper \\-->

	<!-- Modal -->
	<div class="modal fade searchmodal" id="searchmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-body">
				<a href="#" class="church-close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
				<form>
					<input type="text" value="Type Your Keyword" onblur="if(this.value == '') { this.value ='Type Your Keyword'; }" onfocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
					<input type="submit" value="">
					<i class="fa fa-search"></i>
				</form>
			</div>
		</div>
	</div>

	 <!-- jQuery (necessary for JavaScript plugins) -->
	 <script src="script/jquery.js"></script>
	 <script src="script/bootstrap.min.js"></script>
	 <script src="script/slick.slider.min.js"></script>
	 <script src="script/fancybox.pack.js"></script>
	 <script src="script/isotope.min.js"></script>
	 <script src="script/progressbar.js"></script>
	 <script src="script/jquery.countdown.min.js"></script>
	 <script src="script/jplayer.functions.js"></script>
	 <script src="script/jquery.countdown.one.js"></script>
	 <script src="script/jquery.jplayer.js"></script>
	 <script src="script/jplayer.playlist.js"></script>
	 <script src="https://maps.googleapis.com/maps/api/js"></script>
	 <script src="script/functions.js"></script>

	</body>

<!-- Mirrored from webmarce.com/html/beloved-god/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 11:16:56 GMT -->
</html>
