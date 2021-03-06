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
						<li><a href="account-settings.php">account</a></li>
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
					<form method="post" action="grooming.php" onsubmit="refGenerateGrooming()">
						<div class="modal-body">
							<div class="form-group">
								<label for="branch">Choose your nearest Petmalu Branch to you!</label>
								<select class="form-control" id="branch" name="branch">
									<option>SM City Calamba</option>
									<option>Robisons Town Mall Los Banos</option>
									<option>Sunstar Mall</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6" style="padding-left: 15px; padding-right: 15px;">
									<div class="form-group">
										<label for="date">Choose the date for your schedule:</label>
										<input type="date" class="form-control" id="date" name="date" required=""> 
									</div>
								</div>
								<div class="col-md-6" style="padding-left: 15px; padding-right: 15px;">
									<div class="form-group">
										<label for="pet-age">Pet Age:</label>
										<input type="number" class="form-control" id="petage" name="petage" required="" min="0">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4" style="padding-left: 15px; padding-right: 15px;">
									<div class="form-group">
										<label>Gender</label>
										<div class="radio">
											<label><input type="radio" id="petgender" name="petgender" value="Male" required="">Male</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="petgender" name="petgender" value="Female" required="">Female</label>
										</div>
									</div>
								</div>
								<div class="col-md-4" style="padding-left: 15px; padding-right: 15px;">
									<div class="form-group">
										<label>Size of your pet</label>
										<div class="radio">
											<label><input type="radio" id="petsize" name="petsize" value="Small" required="">Small</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="petsize" name="petsize" value="Medium" required="">Medium</label>
										</div>
										<div class="radio">
											<label><input type="radio" id="petsize" name="petsize" value="Large" required="">Large</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox" id="groomChck" value="Grooming Package (Bath, shampoo, blowdry, ear cleaning, nail trim, sanitary trim, teeth brushing, haircut)for small/medium - large/giant breeds">Grooming Package (Bath, shampoo, blowdry, ear cleaning, nail trim, sanitary trim, teeth brushing, haircut)for small/medium - large/giant breeds</label>
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
											<label><input type="checkbox" name="checkbox" id="groomChck" value="Ear Cleaning">Ear Cleaning</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 75</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox" id="groomChck" value="Bath and Blowdry (for small/medium - large/giant breeds)">Bath and Blowdry (for small/medium - large/giant breeds)</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 200/400/600</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox" id="groomChck" value="Pet Masssage">Pet Massage</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 200</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox" id="groomChck" value="Peticure Nail Caps Removal">Peticure Nail Caps Removal</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 100</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox" id="groomChck" value="Teeth Brushing">Teeth Brushing</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 75</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox" id="groomChck" value="Eye wash">Eye wash</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 75</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox" id="groomChck" value="Mouth Wash">Mouth Wash</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 75</b>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio">
											<label><input type="checkbox" name="checkbox"  id="groomChck" value="Nail Trim and Filing">Nail Trim and Filing</label>
										</div>
									</div>
									<div class="col-md-6">
										<b>Php 100</b>
									</div>
								</div>
							</div>
							<input type ="hidden" id="groomingReferenceNo" name="groomingreferenceNo">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="groomSubmit" id="concat-grooming">Submit</button>
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
					<form method="post" action="services.php" onsubmit="refGenerateServices()">
					<div class="modal-body">
						<div class="form-group">
							<label for="branch">Choose your nearest Petmalu Branch to you!</label>
							<select class="form-control" id="branch" name="serveBranch">
								<option>SM City Calamba</option>
								<option>Robisons Town Mall Los Banos</option>
								<option>Sunstar Mall</option>
							</select>
						</div>
						<div class="row">
							<div class="col-md-6" style="padding-left: 15px; padding-right: 15px;">
								<div class="form-group">
									<label for="date">Choose the date for your schedule:</label>
									<input type="date" class="form-control" id="date" name="serveDate" required="">
								</div>
							</div>
							<div class="col-md-6" style="padding-left: 15px; padding-right: 15px;">
								<div class="form-group">
									<label for="pet-age">Pet Age:</label>
									<input type="number" class="form-control" id="pet-age" name="servePetAge" required="" min="0">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4" style="padding-left: 15px; padding-right: 15px;">
								<div class="form-group">
									<label>Gender</label>
									<div class="radio">
										<label><input type="radio" name="servePetGender" value="Male" required="">Male</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="servePetGender" value="Female" required="">Female</label>
									</div>
								</div>
							</div>
							<div class="col-md-4" style="padding-left: 15px; padding-right: 15px;">
								<div class="form-group">
									<label>Size of your pet</label>
									<div class="radio">
										<label><input type="radio" name="servePetSize" value="Small" required="">Small</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="servePetSize" value="Medium" required="">Medium</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="servePetSize" value="Large" required="">Large</label>
									</div>
								</div>
							</div>
						</div>
						<label>At Petmalu, we only give quality veterinary services.<br>
						Select:</label>
						<div class="row">
							<div class="col-md-6">
								<ul style="list-style-type: none;" id="serveList">
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Dentistry">Dentistry</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Surgeries">Surgeries</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Prescription medication and diets">Prescription medication and diets</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Deworming">Deworming</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Senior pet health">Senior pet health</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Comprehensive physical examinations">Comprehensive physical examinations</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Laboratory services">Laboratory services</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Confinement for ill patients">Confinement for ill patients</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Health Certificates">Health Certificates</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Vaccination for puppies and kittens">Vaccination for puppies and kittens</label></div></li>
									<li><div class="radio"><label><input type="checkbox" name="servecheckbox" value="Wellness consultations and examinations">Wellness consultations and examinations</label></div></li>
								</ul>
								<input type="hidden" id="serveListId" name="serveListConcat">
								<input type ="hidden" id="serviceReferenceNo" name="serviceReferenceNo">
							</div>
						</div>
						
					</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="serveSubmit" id="concat-services">Submit</button>
						</div>
					</form>
				</div>
			</div>
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

		<script type="text/javascript">
		var forms = document.forms[0];
		var strConcat = "";
		    $('#concat-grooming').on('click', function() {
				for(var i=0; i<forms.length ; i++){
					if(forms[i].checked && forms[i].type =="checkbox"){
						strConcat = strConcat + forms[i].value + ",";
						forms[i].value= strConcat;
					}
				}
			    // var val = $(':checked').map(function() {
			    //     return this.value;
			    // }).get()
				
				// alert(val);
			});
			var today = new Date().toISOString().split('T')[0];
			document.getElementsByName("serveDate")[0].setAttribute('min', today);
			
			$('#concat-services').on('click', function() {
				var names = [];
				
				$('#serveList input:checked').each(function() {
					names.push(this.value);
				});
				document.getElementById("serveListId").value = names;
				
			    // var val = $(':checked').map(function() {
			    //     return this.value;
			    // }).get()
				// alert(val);
			});
			
			
			var today1 = new Date().toISOString().split('T')[0];
			document.getElementsByName("date")[0].setAttribute('min', today1);
			
			function refGenerateGrooming(){
				document.getElementById("groomingReferenceNo").value = '_' + Math.random().toString(36).substr(2, 9);
				groomRefNo = document.getElementById("groomingReferenceNo").value;
				$.ajax({
					type:"GET",
					url:"grooming.php",
					data:{groomRefNo:groomRefNo},
					success:function(data){
						console.log(data);
					}
				});
			}
			function refGenerateServices(){
				document.getElementById("serviceReferenceNo").value = '_' + Math.random().toString(36).substr(2, 9);
			}
		</script>
	</body>
</html>