<?php
// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'project');

if (isset($_POST['liked'])) {
  $postid = $_POST['postid'];
  $result = mysqli_query($con, "SELECT * FROM posts_art WHERE id=$postid");
  $row = mysqli_fetch_array($result);
  $n = $row['likes'];

  mysqli_query($con, "INSERT INTO likes_art(userid, postid) VALUES (1, $postid)");
  mysqli_query($con, "UPDATE posts_art SET likes=$n+1 WHERE id=$postid");

  echo $n + 1;
  exit();
}


// Retrieve posts from the database

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


  <div class='container-fluid' style='padding: 20px 16px;
  background:rgb(53, 90, 193);
  color: #f1f1f1;
  height: 200px;'>

    <div class="row">
      <div class="col-sm-2">

        <nav class="navbar navbar-expand-sm t">

          <ul class="navbar-nav">
            <li class="nav-item" style="padding-left:50px;">
              <div id="mySidenav" class="sidenav">
                <a class='link' href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class='link' href="home.html">Home</a>
                <a class='link' href="artpostup.php">Post</a>
                <a class='link' hre="artfeedpage.php">Feed</a>

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




  <!--php-->
  <?php



  $hostname = 'localhost';
  $username = 'root';
  $dbpass = '';
  $dbname = 'project';


  $con = mysqli_connect($hostname, $username, $dbpass, $dbname);

  $qr = 'select * from posts_art';
  $result = mysqli_query($con, $qr) or die(mysqli_error($con));


  $name = '';
  $photo = '';
  $artprofilephoto = '';
  $phone = '';
  $email = '';


  while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $profilephoto = $row['profilephoto'];
    $photo = $row['photo'];
    $phone = $row['phone'];
    $email = $row['email']; ?>

    <div class="post">



      <div class='cardd' align="center">

        <div class='containerr ' align="left" style='background-color:rgb(53, 90, 193);padding-left:40px;padding-top:5px;height:50px; margin-top:5px;width:600px; border:solid 1px black; border-radius:10px;'>

          <?php
          echo "
                <img src='photo/$profilephoto' class='rounded-circle'  width='40' height='40' style='outline-style: outset;   outline-color:black;   outline-width: thin; border:solid 0px black; '> 
                  <b style=' color: #f1f1f1;'>$name</b>


                  </div>
                   
                   
                  <center><img class='img' src='photo/$photo' alt=' image' style='width:500px;height:300px; margin-top:0px'></center>"; ?>

          <div style="padding-left:0px; margin-top: 0px; margin-right:10px;">
            <?php
            // determine if user has already liked this post
            $results = mysqli_query($con, "SELECT * FROM likes_art WHERE userid=1 AND postid=" . $row['id'] . "");

            ?>

            <!-- user has not yet liked post -->
            <div class="row" style="border-radius:10px; height: 50px; background-color:rgb(53, 90, 193);width:600px;padding-left:10px;margin-left:0px;border:solid 1px black">
              <div class="col-sm-3"> <span class="like" data-id="<?php echo $row['id']; ?>"><img src="heart2.png" alt=""></span>
                <span class="likes_count" style="color: #f1f1f1;'"><?php echo $row['likes']; ?> likes</span>
              </div>
              <div class="col-sm-2">


                <!-- Trigger/Open The Modal -->
                <button style="border: none ; background-color:rgb(53, 90, 193);" id="myBtn"><img src="comment.png"></button>

                <!-- The Modal -->
                <div id="myModal" class="modal" >

                  <!-- Modal content -->
               
                  <div class="modal-content"  style="background-color:skyblue;"align="left">
                 
                    <span class="close">&times;</span>
                    <h4>Add your comment here....</h4>


                    <section>
                      <div class="rt-container" style="background-color:skyblue;">
                        <div class="col-rt-12" style="background-color:skyblue;">
                          <div class="Scriptcontent" style="background-color:skyblue;">

                            <!-- partial:index.partial.html -->
                            <section id="app">
                              <div class="container" style="background-color:skyblue;">
                                <div class="row">
                                  <div class="col-6">
                                    <div class="comment">
                                      <p v-for="items in item" v-text="items"></p>
                                    </div>
                                    <!--End Comment-->
                                  </div>
                                  <!--End col -->
                                </div><!-- End row -->
                                
                                    <textarea type="text" class="input" style="background-color:skyblue; border:solid 1px" placeholder="  Enter comment.." v-model="newItem" @keyup.enter="addItem()"></textarea>
                                    <button v-on:click="addItem()" class='primaryContained float-right' type="submit">Add Comment</button>
                                    
                                  
                                <!--End Row -->
                              </div>
                              <!--End Container -->
                            </section><!-- end App -->
                            <!-- partial -->


                          </div>
                        </div>
                      </div>
                    </section>


                    <!-- Analytics -->

                    <script>
                      $(document).ready(function() {

                        $(".primaryContained").on('click', function() {
                          $(".comment").addClass("commentClicked");
                        }); //end click
                        $("textarea").on('keyup.enter', function() {
                          $(".comment").addClass("commentClicked");
                        }); //end keyup
                      }); //End Function

                      new Vue({
                        el: "#app",
                        data: {
                          title: 'Add a comment',
                          newItem: '',
                          item: [],
                        },
                        methods: {
                          addItem() {
                            this.item.push(this.newItem);
                            this.newItem = "";
                          }
                        }

                      });
                    </script>


                  </div>

                </div>



              </div>
              <div class="col-sm-4"></div>
            </div>



          </div>
        </div>

      </div>
    <?php } ?>
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
    </div>



</body>

</html>
<a href='https://icons8.com/icon/EDZuk72S1FJ7/home'>



  <!-- Add Jquery to page -->
  <script src="jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // when the user clicks on like
      $('.like').on('click', function() {
        var postid = $(this).data('id');
        $post = $(this);

        $.ajax({
          url: 'index1.php',
          type: 'post',
          data: {
            'liked': 1,
            'postid': postid
          },
          success: function(response) {
            $post.parent().find('span.likes_count').text(response + " likes");
            $post.addClass('hide');
            $post.siblings().removeClass('hide');
          }
        });
      });

      // when the user clicks on unlike
      $('.unlike').on('click', function() {
        var postid = $(this).data('id');
        $post = $(this);

        $.ajax({
          url: 'index.php',
          type: 'post',
          data: {
            'unliked': 1,
            'postid': postid
          },
          success: function(response) {
            $post.parent().find('span.likes_count').text(response + " likes");
            $post.addClass('hide');
            $post.siblings().removeClass('hide');
          }
        });
      });
    });
  </script>


  <script>
    window.onscroll = function() {
      myFunction()
    };

    var header = document.getElementById('myHeader');
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add('sticky');
      } else {
        header.classList.remove('sticky');
      }
    }
  </script>
  <script>
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <style>
    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }


    .container {
      max-width: 640px;
      margin: 30px auto;
      background: #fff;
      border-radius: 8px;
      padding: 20px;
    }


    .comment {
      display: block;
      transition: all 1s;
    }

    .commentClicked {
      min-height: 0px;
      border: 1px solid #eee;
      border-radius: 5px;
      padding: 5px 10px
    }

    textarea {
      width: 100%;
      border: none;
      background: #E8E8E8;
      padding: 5px 10px;
      height: 50%;
      border-radius: 5px 5px 0px 0px;
      border-bottom: 2px solid #016BA8;
      transition: all 0.5s;
      margin-top: 15px;
    }

    button.primaryContained {
      background: #016ba8;
      color: #fff;
      padding: 10px 10px;
      border: none;
      margin-top: 0px;
      cursor: pointer;
      text-transform: uppercase;
      letter-spacing: 4px;
      box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.25);
      transition: 1s all;
      font-size: 10px;
      border-radius: 5px;
    }

    button.primaryContained:hover {
      background: #9201A8;
    }
  </style>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

  <script>
    $(document).ready(function() {

      $(".primaryContained").on('click', function() {
        $(".comment").addClass("commentClicked");
      }); //end click
      $("textarea").on('keyup.enter', function() {
        $(".comment").addClass("commentClicked");
      }); //end keyup
    }); //End Function

    new Vue({
      el: "#app",
      data: {
        title: 'Add a comment',
        newItem: '',
        item: [],
      },
      methods: {
        addItem() {
          this.item.push(this.newItem);
          this.newItem = "";
        }
      }

    });
  </script>