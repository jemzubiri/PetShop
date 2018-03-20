<?php
include('session.php');

$tablesql = mysqli_query($connection,"SELECT userName,userEmail,userPassword,userRole FROM usertbl WHERE userRole !='Member'");
$rowcount = mysqli_num_rows($tablesql);

$result = $connection->query("SELECT userName,userEmail,userPassword,userRole FROM usertbl WHERE userRole !='Member'");
$resultArray = mysqli_fetch_all($result, MYSQLI_NUM);

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

    <section style="height: 100vh; padding-top:0px">
    <table class="table" >
        <center><h1 style="position: center">Grooming schedule</h1></center>
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email/Username</th>
                <th scope="col">Password</th>
                <th scope="col">User Role</th>
                </tr>
            </thead>
            <tbody >
                <?php
                
                for($ctr= 0; $ctr < $rowcount; $ctr++){
                    echo'<tr>';
                    for($colCtr = 0; $colCtr < 4 ; $colCtr++){
                        echo'<td>'.$resultArray[$ctr][$colCtr].'</td>';
                    
                    }
                    // echo'<td>'.$userId[$ctr].'</td>';
                    echo'</tr>';
                }
                ?>
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