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
                        <li><a href="about-us.php">about us</a></li>
                        <li><a href="products.php">products</a></li>
                        <li><a href="gallery.php">gallery</a></li>
                        <li   class="active"><a href="#">contact us</a></li>
                        <li><a href="schedule.php">schedule</a></li>
                        <li><a href="account-settings.php">account</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <center><h2>Locate the nearest Petmalu in your area and visit us today!</h2>
            <h4>We would like to hear from you!</h4></center>
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="padding-bottom: 50px;">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">
                            Name</label>
                            <input type="text" class="form-control" id="name" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">
                            Email</label>
                            <input type="text" class="form-control" id="email" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">
                            Mobile #</label>
                            <input type="text" class="form-control" id="mobile" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">
                            Message</label>
                            <textarea style="width:460px; height:150px; resize: none;"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btn-sm" style="height: 40px;">
                        Submit</button>
                    </div>
                    <div class="col-md-6">
                        <h4><b>BRANCHES</b></h4>
                        <p>
                            <b>SM City Calamba</b><br>
                            Manila S Rd, Real, Calamba, 4027 Laguna<br>
                            Tel. 912-5924<br>
                            Mobile: 0917-8091921<br>
                            Sun-Thu 10 AM-9 PM<br>
                            Fri-Sat 10 AM - 10 PM<br>
                        </p>
                        <p>
                            <b>Robinsons Town Mall Los Banos</b> <br>
                            Riverina Residential and Commercial Estates, Maharlika Highway, Barangay San Rafael, San Pablo City, 4000 Laguna<br>
                            Tel. (046) 4162979<br>
                            09178091927<br>
                            Mon – Sun 10AM – 9PM<br>
                        </p>
                        <p>
                            <b>Sun Star Mall</b> <br>
                            National Hwy, Santa Cruz, Laguna<br>
                            Tel. (046) 4162979<br>
                            09178091927<br>
                            Mon – Sun 10AM – 9PM<br>
                        </p>
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
                <li class="active"><a href="#">contact us</a></li>
                <li><a href="gallery.php">gallery</a></li>
                <li><a href="products.php">products</a></li>
                <li><a href="about-us.php">about us</a></li>
                <li><a href="home-user.php">home</a></li>
            </ul>
        </footer>
    </body>
</html>