<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1">
		<title>About | PETMALU</title>
		<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascripdt" src="js/bootstrap/jquery.1.8.3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" href="images/logo.png" type="image/png">
		<link rel="shortcut icon" href="favicon.io" type="img/x-icon">
	</head>
	<body>
		<!-- NAVIGATION BAR -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png">
						petmalu
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="home-user.php">home<span class="sr-only">(current)</span></a></li>
						<li  class="active"><a href="#">about us</a></li>
						<li><a href="products.php">products</a></li>
						<li><a href="gallery.php">gallery</a></li>
						<li><a href="contact-us.php">contact us</a></li>
						<li><a href="schedule.php">schedule</a></li>
						<li><a href="account-settings.php">account</a></li>
						<li><a href="logout.php">logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="jumbotron">
			<p>
				True to its one-stop shop format, Pet Express offers dog training and a wide range of pet grooming and veterinary services. Customers can rely on Petmalu group of competent groomers and veterinarians to handle their precious dogs and cats.
			</p>
		</div>
		<div class="container grooming">
			<div class="row">
				<div class="col-md-3" style="padding-top: 30px;">
					<img src="images/groom.jpg">
				</div>
				<div class="col-md-3" style="padding-top: 30px;">
					<h1>Grooming</h1>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#grooming">Read more...</button>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>
				<div class="col-md-3" style="padding-top: 30px;">
					<img src="images/boarding.jpg">
				</div>
				<div class="col-md-3" style="padding-top: 30px;">
					<h1>Pet Boarding</h1>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pet-boarding">Read more...</button>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>
		</div>
		<div class="container grooming" style="padding-top: 30px;">
			<div class="row">
				
				<div class="col-md-3" style="padding-top: 30px;">
					<h1>Services</h1>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#services">Read more...</button>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
				</div>
				<div class="col-md-3" style="padding-top: 30px;">
					<img src="images/grooming-1.jpg">
				</div>
				<div class="col-md-3" style="padding-top: 30px;">
					<h1>Dog Training</h1>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dog-training">Read more...</button>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
				<div class="col-md-3" style="padding-top: 30px;">
					<img src="images/training.jpg">
				</div>
				
			</div>
		</div>
		<div class="container grooming" style="padding-top: 30px;">
			<div class="row">
				<div class="col-md-3">
					<img src="images/course.jpg">
				</div>
				<div class="col-md-3" style="padding-top: 30px; padding-bottom: 100px;">
					<h1>Course Requirements</h1>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#course-requirement">Read more...</button>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
			</div>
		</div>
		<!-- MODALS -->
		<!-- grooming modal -->
		<div class="grooming-modal">
			<div class="modal fade" id="grooming" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h3>GROOMING</h3>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-3">
									<h4><b>Ear Cleaning</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 75</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Tear Stain Removal</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 100</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h4><b>Bath and Blowdry</b><br>(for small/medium - large/giant breeds)</h4>
								</div>
								<div class="col-md-3">
									<h4>Php 200/400/600</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Pet Massage</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 200</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h4><b>Peticure Nail Caps Removal</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 100</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Dematting</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 450</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h4><b>Teeth Brushing</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 75</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Mouth Wash</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 75</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h4><b>Nail Trim and Filing</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 100</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Frontline Application</b><br> (excluding products)</h4>
								</div>
								<div class="col-md-3">
									<h4>Php 100</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h4><b>Medicated Bath</b><br>(for small/medium - large/giant breeds)</h4>
								</div>
								<div class="col-md-3">
									<h4>Php 100</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Peticure = Nail Caps Application</b> <br>(excluding products)</h4>
								</div>
								<div class="col-md-3">
									<h4>Php 100</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<h4><b>Grooming Package</b><br>
									<p>(Bath, shampoo, blowdry, ear cleaning, nail trim, sanitary trim, teeth brushing, haircut) for small/medium - large/giant breeds</p>
									</h4>
								</div>
								<div class="col-md-6">
									<h4>Php 450/650/850</h4>
								</div>
							</div>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			<!-- pet boarding modal -->
			<div class="modal fade" id="pet-boarding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h3 class="modal-title" id="exampleModalLabel">Pet Boarding</h3>
							
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-3">
									<h4><b>Day boarding (weekdays)</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 50/hour</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Regular overnight boarding for breeds 0 -20kg (w/o food)</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 500</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h4><b>Overnight suite boarding</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 850</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Day boarding</b><br>(Weekends. No pet carrier, no boarding)</h4>
								</div>
								<div class="col-md-3">
									<h4>Php 100/hour</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<h4><b>Regular overnight boarding for breeds 21kg and up (w/o food)</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 600</h4>
								</div>
								<div class="col-md-3">
									<h4><b>Pet food for overnight boarding</b></h4>
								</div>
								<div class="col-md-3">
									<h4>Php 100</h4>
								</div>
							</div>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			<!-- services modal -->
			<div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h3 class="modal-title" id="exampleModalLabel">Professional Veterinary Services</h3>
							
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<ul>
										<li>Dentistry</li>
										<li>Surgeries</li>
										<li>Prescription medication and diets</li>
										<li>Deworming</li>
										<li>Senior pet health</li>
										<li>Comprehensive physical examinations</li>
										<li>Laboratory services</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul>
										<li>Confinement for ill patients</li>
										<li>Health Certificates</li>
										<li>Vaccination for puppies and kittens</li>
										<li>Wellness consultations and examinations</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			<!-- dog training modal -->
			<div class="modal fade" id="dog-training" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h3 class="modal-title" id="exampleModalLabel">Dog Training</h3>
							
						</div>
						<div class="modal-body">
							<p><b>
								Spend quality time with your dogs and enrol them in programs that promoted active dog and human lifestyle. Together with Team Kovu, join our classes and explore more ways to play and interact with your pet outside the confines of the four corners of the house. </b>
							</p>
							<p>
								<b>
								The Dog Sport Training program will introduce the needed foundation for any dog sport discipline a handler and dog tandem needs to know and practice consistently. Course price is 6000 per handler and dog tandem.
								</b>
							</p>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			<!-- course requirement modal -->
			<div class="modal fade" id="course-requirement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h3 class="modal-title" id="exampleModalLabel">Course Requirements</h3>
							
						</div>
						<div class="modal-body">
							<h5>Course Length: 8 weeks (1 session a week spanning 2 hours) </h5>
							<ul>
								<li>No prior handler and dog training experience is required</li>
								<li>Dog's vaccination records must be updated</li>
								<li>1 handler: 1 dog ratio</li>
								<li>Food/treat rewards</li>
								<li>Old newspaper/ plastic to clean up after dog</li>
								<li>Any breed of dog as long as it is already 5 months or older</li>
								<li>Female dogs should not be in "heat" for the entire duration of the course</li>
								<li>Clicker</li>
								<li>Water and water bowl</li>
							</ul>
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<img src="images/logo-bnw-1.png">
				<p>&copy; 2018 All rights reserved</p>
			</div>
			<ul class="">
				<li><a href="schedule.php">schedule</a></li>
				<li><a href="contact-us.php">contact us</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="products.php">products</a></li>
				<li class="active"><a href="about-us.php">about us</a></li>
				<li><a href="home-user.php">home</a></li>
			</ul>
		</footer>
	</body>
</html>