<?php

session_start();
$name = $_SESSION['name'];
$phone = $_SESSION['phone'];

$gender = $_SESSION['gender'];

$email = $_SESSION['email'];


?>
<!DOCTYPE html>
<html>

<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }



        .header {
            padding: 20px 16px;
            background: rgb(53, 90, 193);
            color: #f1f1f1;
            height: 100px;
        }


        .sticky {
            position: fixed;
            top: 0;
            bottom: 0;
            width: 100%;
        }

        .sticky+.content {
            padding-top: 102px;
        }


        .footer {
            position: sticky;
            left: 0;
            bottom: 0px;

            width: 100%;
            height: 80px;
            background-color: rgb(53, 90, 193);
            color: white;
            text-align: center;
        }

        .hide {
            pointer-events: none;
            cursor: not-allowed;
            opacity: 0.65;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            box-shadow: none;
        }




        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #artfeedpage {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>

</head>

<body style="background-color:skyblue ;">


    <div class='container-fluid' style='padding: 20px 16px; background:rgb(53, 90, 193);color: #f1f1f1;height: 200px;'>

        <div class="row">
            <div class="col-sm-2">

                <nav class="navbar navbar-expand-sm t">

                    <ul class="navbar-nav">
                        <li class="nav-item" style="padding-left:50px;">
                            <div id="mySidenav" class="sidenav">
                                <a class='link' href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a class='link' href="home.html">Home</a>
                                <a class='link' href="artpostup.php">Post</a>
                                <a class='link' href="artfeedpage.php">Feed</a>

                                <a class='link' href="artprofile.php">profile</a>
                                <a class='link' href="about.html">About</a>

                                <a class='link' href="logout.php">Log-out</a>

                            </div>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="col-sm-10"><b style="padding-bottom:50%;padding-left: 30%;font-size :50px;">TalentForm</b></div>
        </div>
        <!--NAVBAR-->



        <div id="artfeedpage">

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("artfeedpage").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("artfeedpage").style.marginLeft = "0";
            }
        </script>

        <!--navbar ends-->

    </div>

    <div class="row">

        <!--column1-->
        <div class="col-sm-4">
        </div>




        <!--column2-->

        <div class="col-sm-4">

            <div class="container">

                <div class="card" style="width:400px">
                    <?php
                    $photo = $_SESSION['photo'];
                    echo "<center><img width='100px' height='100px' class='rounded-circle' src=photo/$photo   style='margin-top:20px'></center>"; ?>

                    <div class="card-body">
                        <?php
                        echo "
                                <h4>      
                                    <table class='table'>

                                        <tbody>


                                            <tr>
                                                <td>Name::</td>
                                            </tr>
                                            <tr>
                                                <td><h5>$name</h5></h5></td>
                                            </tr>
                                            <tr>
                                                <td>Gender::</td>
                                            </tr>
                                            <tr>
                                                <td><h5>$gender</h5></td>
                                            </tr>
                                           
                                
                                            <tr>
                                                <td>Phone::</td>
                                            </tr>
                                            <tr>
                                                <td><h5>$phone</h5></td>
                                            </tr>
                                            <tr>
                                                <td>Email::</td>
                                            </tr>
                                            <tr>
                                                <td><h5>$email</h5></td>
                                            </tr>
                                    
                                    
                                    
                                
                                           
                                        </tbody>
                                    </table>
                                </h4>
                                <center><a class='btn btn-primary' href='logout.php'>Log-out</a></center>"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <div class="footer">
        <div class="row">
            <div class="col-3" style="padding-top: 20px;">
                <center><a href="home.html"><img src="https://img.icons8.com/office/30/000000/home--v2.png" /></a></center>
            </div>
            <div class="col-3" style="padding-top: 20px;">
                <center><a href="artfeedpage.php"><img src="fp.png" /></a></center>
            </div>
            <div class="col-3" style="padding-top: 20px;">
                <center><a href="artpostup.php"><img src="https://img.icons8.com/office/30/000000/plus-2-math.png" /></a></center>

            </div>
            <div class="col-3" style="padding-top: 20px;padding-left:10px;">
                <center><a href="artprofile.php"><img src="https://img.icons8.com/office/30/000000/test-account.png" /></a></center>
            </div>

        </div>




</body>

</html>