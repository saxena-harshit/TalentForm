<?php






   


// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'like');

if (isset($_POST['liked'])) {
    $postid = $_POST['postid'];
    $result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
    $row = mysqli_fetch_array($result);
    $n = $row['likes'];

    mysqli_query($con, "INSERT INTO likes (userid, postid) VALUES (1, $postid)");
    mysqli_query($con, "UPDATE posts SET likes=$n+1 WHERE id=$postid");

    echo $n + 1;
    exit();
}
if (isset($_POST['unliked'])) {
    $postid = $_POST['postid'];
    $result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
    $row = mysqli_fetch_array($result);
    $n = $row['likes'];

    mysqli_query($con, "DELETE FROM likes WHERE postid=$postid AND userid=1");
    mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$postid");

    echo $n - 1;
    exit();
}

// Retrieve posts from the database



//like -system


// determine if user has already liked this post
$results = mysqli_query($con, "SELECT * FROM likes WHERE userid=1 AND postid=" . $row['id'] . "");


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


    <!-- nav bar style-->
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

        #main {
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
    <!-- nav bar style ends-->


    <script>
        //navbar script

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</head>





<body style="background-color:skyblue ;">
    <!--           HEADER        -->
    <section>
        <div class="container-fluid " style="width:100%; height:80px; background-color:rgb(53, 90, 193);">


            <div class="row">
                <!--   NAVBAR  START   -->
                <div class="col-sm-3" style="padding-top: 1.3%;">

                    <div id="main">

                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                    </div>



                    <nav class="navbar navbar-expand-sm t">

                        <ul class="navbar-nav">
                            <li class="nav-item" style="padding-left:50px;">
                                <div id="mySidenav" class="sidenav">
                                    <a class='link' href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <a class='link' href="home.html">Home</a>
                                    <a class='link' href="postup.php">Post</a>
                                    <a class='link' href="main.php">Feed</a>

                                    <a class='link' href="profile.php">Profile</a>
                                    <a class='link' href="about.html">About</a>

                                    <a class='link' href="logout.php">Log-out</a>

                                </div>
                            </li>
                        </ul>
                    </nav>


                </div>

                <!-- NAvBAR ENDS-->
                <div class="col-sm-9" style="padding-top: 10px;padding-left:190px;">
                    <h1><b style="color:whitesmoke">TalentGram</b></h1>
                </div>

            </div>

        </div>



    </section>
    <!--     HEADER ENDS          -->

    <!-- post card starts        -->



    <section>
    <?php



$hostname = 'localhost';
$username = 'root';
$dbpass = '';
$dbname = 'project';


$con = mysqli_connect($hostname, $username, $dbpass, $dbname);

$qr = 'select * from posts';
$result = mysqli_query($con, $qr) or die(mysqli_error($con));


$name = '';
$photo = '';
$profilephoto = '';
$phone = '';
$email = '';


while ($row = mysqli_fetch_array($result)) {
  $name = $row['name'];
  $profilephoto = $row['profilephoto'];
  $photo = $row['photo'];
  $phone = $row['phone'];
  $email = $row['email']; ?>

  <div class="post">




        <!-- post card header   -->
        <div class="cardd" align="center">
            <div class="boxx" align="left" style="border:solid 1px black; width:40%; border-radius:10px; ">
                <div class='container ' style=' border-collapse: collapse; background-color:rgb(53, 90, 193);padding-left:40px;padding-top:5px;height:50px; width:auto;  border:none;border-radius:10px;border:solid 1px black;'>

                    <?php
                    echo "
                 


                            <img src='photo/$profilephoto' class='rounded-circle'  width='40' height='40' style='outline-style: outset;   outline-color:black;   outline-width: thin; border:solid 0px black; '> 
                
                            <b style=' color: #f1f1f1;'>            $name</b>

                            <img  src='photo/$photo' alt='Card image' style='width:530px;height:300px; padding-top:5px;'>"



                    ?>


                    </div>


                </div>
            </div>


    </section>
















</body>