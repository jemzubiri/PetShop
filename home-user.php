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
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png">
                        petmalu
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">home<span class="sr-only">(current)</span></a></li>
                        <li><a href="about-us.php">about us</a></li>
                        <li><a href="products.php">products</a></li>
                        <li><a href="gallery.php">gallery</a></li>
                        <li><a href="contact-us.php">contact us</a></li>
                        <li><a href="schedule.php">schedule</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="overlay">
            <div class="container">
                <figure class="logo">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                </figure>
                <!-- <h1 class="animated fadeInDown delay-07s">PETMALU</h1> -->
                <h1>YOUR ONE STOP PETSHOP</h1>
                <i class="fa fa-user-alt"></i>
            </div>
        </div>
        <!-- CAROUSEL -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slide1.jpg" alt="Los Angeles">
                </div>
                <div class="item">
                    <img src="images/slide2.jpg" alt="Chicago">
                </div>
                <div class="item">
                    <img src="images/slide3.jpg" alt="New York">
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 home-img" style="padding-top: 30px;">
                        <h1>grooming</h1>
                        <h3>Looking Good & Fresh</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <img src="images/grooming-1.jpg">
                    </div>
                    <div class="col-md-4 home-img" style="padding-top: 30px;">
                        <img src="images/training.jpg">
                        <h1>what's up doc</h1>
                        <h3>THIS IS WHAT GOOD HEALTH LOOKS LIKE!</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        
                    </div>
                    <div class="col-md-4 home-img" style="padding-top: 30px;">
                        <h1>take it or leave it.</h1>
                        <h3>You are the heart of our business.</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <img src="images/jumbotron1.jpg">
                    </div>
                </div>
            </div>
        </section>
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
    </body>
</html>