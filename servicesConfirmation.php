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
	      <a class="navbar-brand" href="home-user.php">
	      	<img src="images/logo.png">
	      	petmalu
	      </a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
	      <ul class="nav navbar-nav navbar-right" >
	        <li class="active"><a href="home-user.php">home<span class="sr-only">(current)</span></a></li>
	        <li><a href="about-us.php">about us</a></li>
	        <li><a href="#">products</a></li>
	        <li><a href="gallery.php">gallery</a></li>
	        <li><a href="contact-us.php">contact us</a></li>
	        <li><a href="schedule.php">schedule</a></li>
	        <li><a href="logout.php" >logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<section style="height: 90vh;">
		<div class="container">
			<center>
			<h1>Your service schedule has been recorded!</h1>
			<img src="images/logo.png" style="width: 300px;height: 300px;">
			</center>
		</div>
	</section>

	<!--LOGIN MODAL -->
	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                    <center>
	      				<img src="images/logo.png" style="width: 100px; height: 100px;">
	      			</center>
                <h4 class="modal-title" id="myModalLabel">
                    
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" style="height: 40px;">
                                            Submit</button><br>
                                        <a href="">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="age" class="col-sm-2 control-label">
                                        Age</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="age" placeholder="Age" min="0"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">
                                        Address</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Address" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="birthday" class="col-sm-2 control-label">
                                        Birthday</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="mobile" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email2" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="usernam" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email3" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="re-password" class="col-sm-2 control-label">
                                        Re-password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password2" placeholder="" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                 	<form action="upload.php" method="post" enctype="multipart/form-data">
                                    <label for="upload" class="col-sm-4 control-label">
                                        Select image of your pet to upload:</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="fileToUpload" id="fileToUpload"  style="padding-bottom: 10px;">
								    	<input type="submit" value="Upload Image" name="submit" class="upload-btn">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pet-name" class="col-sm-2 control-label">
                                        Pet's name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pet-name" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="breed" class="col-sm-2 control-label">
                                        Breed</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="breed" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="size" class="col-sm-2 control-label">
                                        Size of your pet</label>
                                    <div class="col-sm-10">
                                       	<div class="radio">
										  <label><input type="radio" name="optradio">Small</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="optradio">Medium</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="optradio">Large</label>
										</div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="color" class="col-sm-2 control-label">
                                        Color</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="color" placeholder="" />
                                    </div>
                                </div>
							
                                
								</form>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-sm" style="height: 40px;">
                                            Save & Continue</button>
                                        <button type="button" class="btn btn-default btn-sm" style="height: 40px;">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
	        
	      </div>
        </div>
    </div>
	</div>


	<footer>
		<ul class="">
	        <li class="active"><a href="schedule.html">schedule</a></li>
	        <li><a href="contact-us.html">contact us</a></li>
	        <li><a href="gallery.html">gallery</a></li>
	        <li class="active"><a href="products.html">products</a></li>
	        <li><a href="about-us.html">about us</a></li>
	        <li><a href="index.html">home</a></li>
	     </ul>
	</footer>



</body>
</html>