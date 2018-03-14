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
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
					<ul class="nav navbar-nav navbar-right" >
						<li><a href="home-user.php">home<span class="sr-only">(current)</span></a></li>
						<li><a href="about-us.php">about us</a></li>
						<li class="active"><a href="#">products</a></li>
						<li><a href="gallery.php">gallery</a></li>
						<li><a href="contact-us.php">contact us</a></li>
						<li><a href="schedule.php">schedule</a></li>
						<li><a href="logout.php">logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="sidenav">
			<h3 style="color: #3cb4e6; font-weight: bolder;">Category</h3>
			<h4>For Dogs</h4>
			<a href="#food-dogs">Foods</a>
			<a href="#dog-apparels">Apparel</a>
			<a href="#dog-health">Health Needs</a>
			<h4>For Cats</h4>
			<a href="#cat-food">Feeding Supply</a>
			<a href="#cat-apparel">Cat Apparel</a>
			<a href="#cat-health">Cat Healthy Needs</a>
		</div>
		<div class="main">
			<center>
			<div class="container-fluid dog-food" id="food-dogs">
				<div class="row">
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogFood1.jpg">
							<h4>Pedigree Adult</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogFood2.jpg">
							<h4>Science diet Chicken & Barley Entree</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/f3.jpg">
							<h4>Purina Beneful grainfree</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogFood4.jpg">
							<h4>Madra</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid dog-food" id="dog-apparels">
				<div class="row">
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogShirt3.jpg">
							<h4>Pedigree Adult</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogShirt2.jpg">
							<h4>Science diet Chicken & Barley Entree</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogShirt1.jpg">
							<h4>Purina Beneful grainfree</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogBag1.jpg">
							<h4>Madra</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid dog-food" id="dog-health">
				<div class="row">
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogVitamin1.jpg">
							<h4>Pedigree Adult</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogVitamin2.jpg">
							<h4>Science diet Chicken & Barley Entree</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/dogVitamin3.jpg">
							<h4>Purina Beneful grainfree</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid dog-food" id="cat-food">
				<div class="row">
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/catFood1.jpg">
							<h4>Pedigree Adult</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/catFood2.jpg">
							<h4>Science diet Chicken & Barley Entree</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/catFood3.jpg">
							<h4>Purina Beneful grainfree</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid dog-food" id="cat-apparel">
				<div class="row">
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/m1.jpg">
							<h4>Cute Cat Mug</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/m2.jpg">
							<h4>Statement Mug</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/m3.jpg">
							<h4>Cat Ears Mug</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/ct1.jpg">
							<h4>Gray Cat Shirt</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid dog-food" id="cat-health">
				<div class="row">
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/c2.jpg">
							<h4>NEXTON- Cat V</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/c3.jpg">
							<h4>VetClassic</h4>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="box-panel">
							<img src="images/c4.jpg">
							<h4>Only natural pet</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				
			</div>
			<ul class="">
				<li class="active"><a href="schedule.php">schedule</a></li>
				<li><a href="contact-us.php">contact us</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li class="active"><a href="products.php">products</a></li>
				<li><a href="about-us.php">about us</a></li>
				<li><a href="home-user.php">home</a></li>
			</ul>
		</footer>
	</body>
</html>