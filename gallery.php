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
                        <li><a href="index.php">home<span class="sr-only">(current)</span></a></li>
                        <li><a href="about-us.php">about us</a></li>
                        <li><a href="products.php">products</a></li>
                        <li  class="active"><a href="#">gallery</a></li>
                        <li><a href="contact-us.php">contact us</a></li>
                        <li><a href="schedule.php">schedule</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <center>
        <section style="padding-top: 30px;">
            
            <div class="polaroid">
                
                <img src="images/grooming-1.jpg" alt="Norway" style="width:100%">
                <div class="container-img">
                    <p>PAW-SOME PAL OF THE MONTH</p>
                </div>
            </div>
        </section>
        </center>
        <footer>
            <div class="container">
                <img src="images/logo-bnw-1.png">
                <p>&copy; 2018 All rights reserved</p>
            </div>
            <ul class="">
                <li><a href="schedule.php">schedule</a></li>
                <li><a href="contact-us.php">contact us</a></li>
                <li class="active"><a href="#">gallery</a></li>
                <li><a href="products.php">products</a></li>
                <li><a href="about-us.php">about us</a></li>
                <li><a href="home-user.php">home</a></li>
            </ul>
        </footer>
    </body>
</html>