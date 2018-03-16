<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1">
		<title>Pet Shop</title>
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
		<nav class="navbar navbar-default navbar-fixed-top">
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
						<li><a href="about-us.php">about us</a></li>
						<li><a href="products.php">products</a></li>
						<li><a href="gallery.php">gallery</a></li>
						<li><a href="contact-us.php">contact us</a></li>
						<li class="active"><a href="#">schedule</a></li>
						<li><a href="logout.php">logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row">
			<div class="col-md-6" style="padding-left: 0px; padding-right: 0px;">
				<div class="grooming-pnl">
					<center>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#grooming-mdl">GROOMING</button>
					</center>
				</div>
			</div>
			<div class="col-md-6" style="padding-left: 0px; padding-right: 0px;">
				<div class="services-pnl">
					<center>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#services-mdl">SERVICES</button>
					</center>
				</div>
			</div>
		</div>
	
		<!-- Modals -->
		<div class="modal fade" id="grooming-mdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h2 class="modal-title">Grooming</h2>
					</div>
					<form role="form" method="post" action="grooming.php">
						<div class="modal-body">
							<div class="form-group">
								<label for="branch">Choose your nearest Petmalu Branch to you!</label>
								<select class="form-control" id="branch" name="branch">
									<option>SM City Calamba</option>
									<option>Robison's Town Mall, Los Banos</option>
									<option>Sunstar Mall</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6" style="padding-left: 15px; padding-right: 15px;">
									<div class="form-group">
										<label for="date">Choose the date for your schedule:</label>
										<input type="date" class="form-control" id="date" name="date"> 
									</div>
								</div>
								<div class="col-md-6" style="padding-left: 15px; padding-right: 15px;">
									<div class="form-group">
										<label for="pet-age">Pet Age:</label>
										<input type="number" class="form-control" id="petage" name="petage">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4" style="padding-left: 15px; padding-right: 15px;">
									<div class="form-group">
										<label>Gender</label>
										<div class="radio">
											<label><input type="radio" id="petgender" name="petgender" value="Male">Male</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="petgender" name="petgender" value="Female">Female</label>
										</div>
									</div>
								</div>
								<div class="col-md-4" style="padding-left: 15px; padding-right: 15px;">
									<div class="form-group">
										<label>Size of your pet</label>
										<div class="radio">
											<label><input type="radio" id="petsize" name="petsize" value="Small">Small</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="petsize" name="petsize" value="Medium">Medium</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="petsize" name="petsize" value="Large">Large</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Grooming Package (Bath, shampoo, blowdry, ear cleaning, nail trim, sanitary trim, teeth brushing, haircut)for small/medium - large/giant breeds</label>
										</div>
									</div>
									<div class="col-md-6">
										<br>
										<b>Php 450/650/850</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Ear Cleaning</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 75</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Bath and Blowdry (for small/medium - large/giant breeds)</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 200/400/600</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Pet Massage</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 200</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Peticure Nail Caps Removal</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 100</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Teeth Brushing</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 75</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Eye wash</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 75</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Mouth Wash</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 75</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox">Nail Trim and Filing</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 100</b>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="groomSubmit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--Clinic Services-->
		<div class="modal fade" id="services-mdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h2 class="modal-title">Clinic Services</h2>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="branch">Choose your nearest Petmalu Branch to you!</label>
							<select class="form-control" id="branch">
								<option>SM City Calamba</option>
								<option>Robison's Town Mall, Los Banos</option>
								<option>Sunstar Mall</option>
							</select>
						</div>
						<div class="row">
							<div class="col-md-6" style="padding-left: 15px; padding-right: 15px;">
								<div class="form-group">
									<label for="date">Choose the date for your schedule:</label>
									<input type="date" class="form-control" id="date">
								</div>
							</div>
							<div class="col-md-6" style="padding-left: 15px; padding-right: 15px;">
								<div class="form-group">
									<label for="pet-age">Pet Age:</label>
									<input type="number" class="form-control" id="pet-age">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4" style="padding-left: 15px; padding-right: 15px;">
								<div class="form-group">
									<label>Gender</label>
									<div class="radio">
										<label><input type="radio" name="optradio1">Male</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio1">Female</label>
									</div>
								</div>
							</div>
							<div class="col-md-4" style="padding-left: 15px; padding-right: 15px;">
								<div class="form-group">
									<label>Size of your pet</label>
									<div class="radio">
										<label><input type="radio" name="optradio2">Small</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio2">Medium</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio2">Large</label>
									</div>
								</div>
							</div>
						</div>
						<label>At Petmalu, we only give quality veterinary services.<br>
						Select:</label>
						<div class="row">
							<div class="col-md-6">
								<ul style="list-style-type: none;">
									<li><div class="radio"><label><input type="checkbox">Dentistry</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Surgeries</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Prescription medication and diets</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Deworming</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Senior pet health</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Comprehensive physical examinations</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Laboratory services</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Confinement for ill patients</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Health Certificates</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Vaccination for puppies and kittens</label></div></li>
									<li><div class="radio"><label><input type="checkbox">Wellness consultations and examinations</label></div></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container doctor-sched">
			<center>
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#view-sched" style="width: 200px;">View Doctor's Schedule</button>
			<div id="view-sched" class="collapse out" >
				<div class="row">
					<div class="col-md-6">
						<h2>Clinic Schedule</h2>
					</div>
					<div class="col-md-6">
						<h2>Grooming Schedule</h2>
					</div>
				</div>
			</div>
			</center>
		</div>
		<footer>
			<div class="container">
				<img src="images/logo-bnw-1.png">
				<p>&copy; 2018 All rights reserved</p>
			</div>
			<ul class="">
				<li class="active"><a href="schedule.php">schedule</a></li>
				<li><a href="contact-us.php">contact us</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="products.php">products</a></li>
				<li><a href="about-us.php">about us</a></li>
				<li><a href="home-user.php">home</a></li>
			</ul>
		</footer>
	</body>
</html>