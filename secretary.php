<?php
include('session.php');

// FOR GROOMING
$tablesql = mysqli_query($connection,"SELECT usertbl.id,groomingtbl.referenceNo,usertbl.userName,usertbl.userPetName,groomingtbl.groomList,groomingtbl.groomDate FROM usertbl INNER JOIN groomingtbl ON usertbl.id = groomingtbl.userId WHERE groomingtbl.isActive='no'");
$rowcount = mysqli_num_rows($tablesql);

$result = $connection->query("SELECT usertbl.id,groomingtbl.referenceNo,usertbl.userName,usertbl.userPetName,groomingtbl.groomList,groomingtbl.groomDate FROM usertbl INNER JOIN groomingtbl ON usertbl.id = groomingtbl.userId WHERE groomingtbl.isActive='no'");
$resultArray = mysqli_fetch_all($result, MYSQLI_NUM);

//FOR SERVICES
$tablesqlserv = mysqli_query($connection,"SELECT usertbl.id,servicestbl.referenceNo,usertbl.userName,usertbl.userPetName,servicestbl.serveList,servicestbl.serveDate FROM usertbl INNER JOIN servicestbl ON usertbl.id = servicestbl.userId WHERE servicestbl.isActive='no'");
$rowcountserv = mysqli_num_rows($tablesqlserv);

$resultserv = $connection->query("SELECT usertbl.id,servicestbl.referenceNo,usertbl.userName,usertbl.userPetName,servicestbl.serveList,servicestbl.serveDate FROM usertbl INNER JOIN servicestbl ON usertbl.id = servicestbl.userId WHERE servicestbl.isActive='no'");
$resultArrayserv = mysqli_fetch_all($resultserv, MYSQLI_NUM);


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

    <section>
        <table class="table"  style="height:450px; overflow-y: scroll; overflow-x: hidden; display: inline-block">
        <center><h1 style="position: center">Grooming schedule</h1></center>
            <thead>
                <tr>
                <th scope="col">User Id</th>
                <th scope="col">Reference No.</th>
                <th scope="col">Name</th>
                <th scope="col">Pet Name</th>
                <th scope="col">Grooming requests</th>
                <th scope="col">Date</th>
                <th scope="col">Confirm schedule</th>
                </tr>
            </thead>
            <tbody >
                <?php
                
                for($ctr= 0; $ctr < $rowcount; $ctr++){
                    echo'<tr>';
                    for($colCtr = 0; $colCtr < 6 ; $colCtr++){
                        echo'<td>'.$resultArray[$ctr][$colCtr].'</td>';
                    
                    }
                    echo'<td><input type="checkbox" name="confirmSched" value="'.$resultArray[$ctr][1].'"></td>';
                    // echo'<td>'.$userId[$ctr].'</td>';
                    echo'</tr>';
                }
                ?>
            </tbody>
            
        </table>

        <div style="overflow-x:auto; height: 450px">
        <table class="table">
        <center><h1 style="position: center">Services schedule</h1></center>
            <thead>
                <tr>
                <th scope="col">User Id</th>
                <th scope="col">Reference No.</th>
                <th scope="col">Name</th>
                <th scope="col">Pet Name</th>
                <th scope="col">Services requests</th>
                <th scope="col">Date</th>
                <th scope="col">Confirm schedule</th>
                </tr>
            </thead>
            <tbody >
                <?php
                
                for($ctr= 0; $ctr < $rowcountserv; $ctr++){
                    echo'<tr>';
                    for($colCtr = 0; $colCtr < 6 ; $colCtr++){
                        echo'<td>'.$resultArrayserv[$ctr][$colCtr].'</td>';
                    
                    }
                    echo'<td><button type="submit" id="btnConfirm" name="confirmSched" class="btn btn-primary btn-sm" style="height: 40px;"></td>';
                    // echo'<td>'.$userId[$ctr].'</td>';
                    echo'</tr>';
                }
                ?>
            </tbody>
        </table>
        </div>
    </section>
    <footer>
            <div class="container">
                <img src="images/logo-bnw-1.png">
                <p>&copy; 2018 All rights reserved</p>
            </div>
        </footer>
    </body>
</html>