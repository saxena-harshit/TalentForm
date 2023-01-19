<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
            width: 100%;
        }

        .sticky+.content {
            padding-top: 102px;
        }


        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 80px;
            background-color: rgb(53, 90, 193);
            color: white;
            text-align: center;
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
</head>

<body style="background-color:skyblue ;">





    <!--start-->




    <?php

    session_start();
    $name = $_SESSION['name'];

    $phone = $_SESSION['phone'];

    $gender = $_SESSION['gender'];

    $email = $_SESSION['email'];





    ?></li>







        <div class='container-fluid' style='padding: 20px 16px; background:rgb(53, 90, 193);color: #f1f1f1;height: 200px;'>

            <div class="row">
                <div class="col-sm-2">

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
                <div class="col-sm-10"><b style="padding-bottom:50%;padding-left: 30%;font-size :50px;">TalentForm</b></div>
            </div>
            <!--NAVBAR-->



            <div id="main">

                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </div>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "250px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                    document.getElementById("main").style.marginLeft = "0";
                }
            </script>

            <!--navbar ends-->

        </div>






        <form action="postup1.php" enctype="multipart/form-data" method=post>



            <ul class="list-group" style="background-color:skyblue ;">
                <li class="list-group-item" style="background-color:skyblue ;">



                    <div class="row" style="background-color:skyblue ;">
                        <div class="col-1">

                        </div>
                        <div class="col-10">
                            <dl>
                                <dt style="background-color:skyblue ;"><?php echo "Name:"; ?></dt>
                                <dd style="background-color:skyblue ;"><?php echo $name; ?></dd>



                            </dl>
                        </div>
                        <div class="col-1" style="padding-top:20px;"></div>
                    </div>

                </li>



                <li class="list-group-item" style="background-color:skyblue ;">
                    <div class="row">
                        <div class="col-1">

                        </div>
                        <div class="col-10">
                            <dl>
                                <dt><?php echo "Phone:"; ?></dt>
                                <dd><?php echo $phone; ?></dd>


                            </dl>
                        </div>


                        <div class="col-1" style="padding-top:20px;"></div>
                    </div>
                </li>

                <li class="list-group-item" style="background-color:skyblue ;">
                    <div class="row">
                        <div class="col-1">

                        </div>
                        <div class="col-10">
                            <dl>
                                <dt><?php echo "Upload a Photo:"; ?></dt>
                                <dd>
                                    <input type="file" name="f1" value="Browse">
                                </dd>


                            </dl>
                        </div>

                        <input class="form-control btn " style="background-color: rgb(53, 90, 194);" type="submit" value="Post" name='sub'>


                    </div>
                </li>

            </ul>
    </div>

    </form>


    <div class="footer">
        <div class="row">
            <div class="col-3" style="padding-top: 20px;">
                <center><a href="home.html"><img src="https://img.icons8.com/office/30/000000/home--v2.png" /></a></center>
            </div>
            <div class="col-3" style="padding-top: 20px;">
                <center><a href="main.php"><img src="fp.png" /></a></center>
            </div>
            <div class="col-3" style="padding-top: 20px;">
                <center><a href="postup.php"><img src="https://img.icons8.com/office/30/000000/plus-2-math.png" /></a></center>

            </div>
            <div class="col-3" style="padding-top: 20px;padding-left:10px;">
                <center><a href="profile.php"><img src="https://img.icons8.com/office/30/000000/test-account.png" /></a></center>
            </div>

        </div>




        <script>
            window.onscroll = function() {
                myFunction()
            };

            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>


        <a href="https://icons8.com/icon/84994/back"></a>
</body>

</html>