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
        <link rel="stylesheet" type="text/css" href="css/bootstrap/font-awesome.css">
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
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">home<span class="sr-only">(current)</span></a></li>
                        <li><a href="about-us.php">about us</a></li>
                        <li><a href="products.php">products</a></li>
                        <li><a href="gallery.php">gallery</a></li>
                        <li><a href="contact-us.php">contact us</a></li>
                        <li><a href="schedule.php">schedule</a></li>
                        <li class="active"><a href="account-settings.php">account</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section> 
            <div class="container">
            <center><h1>Edit Account Details</h1></center>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4" style="padding-bottom: 50px;">
                            <input type="hidden" class="hidden" id="id" value="<?php echo $id; ?>"></p>
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">
                                Email/Username</label>
                                <input type="text" class="form-control" id="email" name= "email" value="<?php echo $userEmail; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="pass" class="col-sm-4 control-label">
                                Password</label>
                                <input type="text" class="form-control" id="pass" name="email" value="<?php echo $userPass; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="role" class="col-sm-4 control-label">
                                User Role</label>
                                <input type="text" class="form-control" id="role" name="userRole" value="<?php echo $userRole; ?>" disabled="true" />
                            </div>
                            <button type="submit" id="editAccount" class="btn btn-primary btn-sm" name="editSubmit" style="height: 40px;" > 
                            Submit</button>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal fade" id="submitted" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <center>
                            <img src="images/logo.png" style="width: 100px; height: 100px;">
                            </center>
                            <h4 class="modal-title" id="myModalLabel">
                        </div>
                        <div class="modal-body" align="center">
                        <h1>Account Successfully Updated!</h1>
                        <h1 style="font-size:15px">You'll be redirected to the login page </h1><br>
                        <button type="button" class="btn btn-primary btn-sm" id="redirectMe">Login</button>
                        </div>
                    </div>
                </div>
        </section>
        <!-- MODAL -->
           
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
                <li><a href="about-us.php">about us</a></li>
                <li class="active"><a href="home-user.php">home</a></li>
            </ul>
        </footer>
        <script>
            $('#editAccount').on('click', function() {
                var idSubmit = document.getElementById('id').value;
                var emailSubmit = document.getElementById('email').value;
                var passSubmit = document.getElementById('pass').value;
                var roleSubmit = document.getElementById('role').value;
                
				$.ajax({
                    type: "GET",
                    url: "edit-account.php",
                    data: {emailSubmit: emailSubmit, passSubmit:passSubmit, idSubmit:idSubmit},
                    success: function(data){
                        console.log(data);
                    } 
                });
                $('#submitted').modal('toggle');
            });
            $('#redirectMe').on('click', function(){
                window.location = "index.html";
            });
        </script>
    </body>
</html>