<?php
include('session.php');

// FOR GROOMING
$tablesql = mysqli_query($connection,"SELECT usertbl.id,groomingtbl.referenceNo,usertbl.userName,usertbl.userPetName,groomingtbl.groomList,groomingtbl.groomDate,groomingtbl.groomId FROM usertbl INNER JOIN groomingtbl ON usertbl.id = groomingtbl.userId WHERE groomingtbl.isActive='no'");
$rowcount = mysqli_num_rows($tablesql);

$result = $connection->query("SELECT usertbl.id,groomingtbl.referenceNo,usertbl.userName,usertbl.userPetName,groomingtbl.groomList,groomingtbl.groomDate,groomingtbl.groomId FROM usertbl INNER JOIN groomingtbl ON usertbl.id = groomingtbl.userId WHERE groomingtbl.isActive='no'");
$resultArray = mysqli_fetch_all($result, MYSQLI_NUM);

//FOR SERVICES
$tablesqlserv = mysqli_query($connection,"SELECT usertbl.id,servicestbl.referenceNo,usertbl.userName,usertbl.userPetName,servicestbl.serveList,servicestbl.serveDate,servicestbl.serveId FROM usertbl INNER JOIN servicestbl ON usertbl.id = servicestbl.userId WHERE servicestbl.isActive='no'");
$rowcountserv = mysqli_num_rows($tablesqlserv);

$resultserv = $connection->query("SELECT usertbl.id,servicestbl.referenceNo,usertbl.userName,usertbl.userPetName,servicestbl.serveList,servicestbl.serveDate,servicestbl.serveId FROM usertbl INNER JOIN servicestbl ON usertbl.id = servicestbl.userId WHERE servicestbl.isActive='no'");
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

            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="logout.php" style="margin: 20px;"
                onclick="document.location.href='logout.php';">
                LOGOUT
            </button>
            <button type="button" id="editPane" class="btn btn-primary pull-right" data-toggle="modal" data-target="logout.php" style="margin: 20px;">
                ACCOUNT
            </button>
        </div>

        <section style="padding-top:0px">
            <table class="table" style="height:450px; overflow-y: scroll; overflow-x: hidden; display: inline-block">
                <center>
                    <h1 style="position: center">Grooming schedule</h1>
                </center>
                <thead>
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">Reference No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Pet Name</th>
                        <th scope="col">Grooming requests</th>
                        <th scope="col" width="10%">Date</th>
                        <th scope="col">Confirm schedule</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                
                for($ctr= 0; $ctr < $rowcount; $ctr++){
                    echo'<tr id="'.$resultArray[$ctr][6].'">';
                    for($colCtr = 0; $colCtr < 6 ; $colCtr++){
                        echo'<td>'.$resultArray[$ctr][$colCtr].'</td>';
                    
                    }
                    echo'<td><button type="submit" onclick="passGroomId('.$resultArray[$ctr][6].')" class="btn btn-primary btn-sm" style="height: 40px;">
                    Confirm</button></td>';
                    // echo'<td>'.$userId[$ctr].'</td>';
                    echo'</tr>';
                }
                ?>
                </tbody>

            </table>

            <div style="overflow-x:auto; height: 450px">
                <table class="table">
                    <center>
                        <h1 style="position: center">Services schedule</h1>
                    </center>
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
                    <tbody>
                        <?php
                
                for($ctr= 0; $ctr < $rowcountserv; $ctr++){
                    echo'<tr id="'.$resultArrayserv[$ctr][6].'">';
                    for($colCtr = 0; $colCtr < 6 ; $colCtr++){
                        echo'<td>'.$resultArrayserv[$ctr][$colCtr].'</td>';
                    
                    }
                    echo'<td><button type="submit" onclick="passServId('.$resultArrayserv[$ctr][6].')" class="btn btn-primary btn-sm" style="height: 40px;">
                    Confirm</button></td>';
                    // echo'<td>'.$userId[$ctr].'</td>';
                    echo'</tr>';
                }
                ?>
                    </tbody>
                </table>
            </div>
            <!-- ACCOUNT MODAL OPENING -->
            <div class="modal fade" id="editAccount" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <center>
                                <img src="images/logo.png" style="width: 100px; height: 100px;">
                                <h3 class="modal-title" id="myModalLabel">Edit Account</h3>
                            </center>
                        </div>
                        
                        <div class="form-horizontal">
                        <input type="hidden" class="hidden" id="id" value="<?php echo $id; ?>"></p><!-- FOR ID -->
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">
                                    Email/Username</label>
                                <div class="col-sm-7">
                                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $userEmail; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="col-sm-3 control-label">
                                    Password</label>
                                <div class="col-sm-7">
                                    <input name="password" class="form-control" id="password" value="<?php echo $userPass; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="role" class="col-sm-3 control-label">
                                    User Role</label>
                                <div class="col-sm-7">
                                    <input name="role" class="form-control" id="role" value="<?php echo $userRole; ?>" disabled="true">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-5" style="margin-left:20px">
                                    <button type="submit" id="changeCredentials" name="submit" class="btn btn-primary btn-sm" style="height: 40px;">
                                        Change</button>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- MODAL CLOSING -->
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

        <footer>
            <div class="container">
                <img src="images/logo-bnw-1.png">
                <p>&copy; 2018 All rights reserved</p>
            </div>
        </footer>
        <script type="text/javascript">
            function passGroomId(groomId) {
                var strId = "'" + groomId + "'";
                var hide = document.getElementById(groomId);
                hide.style.display = "none";

                var groomId = groomId;
                $.ajax({
                    type: "GET",
                    url: "confirmSchedGrooming.php",
                    data: { groomId: groomId },
                    success: function (data) {
                        console.log(data);
                    }
                });
            }
            function passServId(servId) {
                var strId = "'" + servId + "'";
                var hideserv = document.getElementById(servId);
                hideserv.style.display = "none";

                var servId = servId;
                $.ajax({
                    type: "GET",
                    url: "confirmSchedService.php",
                    data: { servId: servId },
                    success: function (data) {
                        console.log(data);
                    }
                });
            }
            $('#editPane').on('click', function () {
                $('#editAccount').modal('toggle');
            });

            $('#changeCredentials').on('click', function() {
                var idSubmit = document.getElementById('id').value;
                var emailSubmit = document.getElementById('email').value;
                var passSubmit = document.getElementById('password').value;
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