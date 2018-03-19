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
    
    <div class="container">
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="logout.php" style="margin: 20px;" onclick="document.location.href='logout.php';">
            LOGOUT
        </button>
    </div> 

    <section style="height: 100vh;">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </section>
    <footer>
            <div class="container">
                <img src="images/logo-bnw-1.png">
                <p>&copy; 2018 All rights reserved</p>
            </div>
        </footer>
    </body>
</html>