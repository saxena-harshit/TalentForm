<!DOCTYPE html>
<html>

<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css' rel='stylesheet'>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js'></script>

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
  </style>
</head>

<body>

  <div class='container-fluid' style='padding: 20px 16px;
  background:rgb(53, 90, 193);
  color: #f1f1f1;
  height: 100px;'>
    <center>
      <h1 style='padding-top: 250x;'>Talentform</h1>
    </center>
  </div>

















  <div class='row'>
    <div class='col-2'></div>
    <div class='col-8'>






      <!--php-->
      <?php



      $hostname = 'localhost';
      $username = 'root';
      $dbpass = '';
      $dbname = 'project';


      $con = mysqli_connect($hostname, $username, $dbpass, $dbname);
      
      $qr = 'select * from post';
      $result = mysqli_query($con, $qr) or die(mysqli_error($con)) ;


      $name = '';
      $photo = '';
      $profilephoto = '';
      $phone = '';
      $email = '';







        
      while($row = mysqli_fetch_array($result )) {
        $name = $row['name'];
        $profilephoto = $row['profilephoto'];
        $photo = $row['photo'];
        $phone = $row['phone'];
        $email = $row['email'];
        




        //card





        echo "<div class='card' >
                <div class='container ' style='background-color:rgb(53, 90, 193);padding-left:50px;padding-top:5px;height:50px;'  >

                <img src='photo/$profilephoto' class='rounded-circle'  width='40' height='40' style='outline-style: outset;   outline-color:black;   outline-width: thin; border:solid 0px black; '> 
                  <b>$name</b>


                  </div>
                        <center><img class='card-img-top' src='photo/$photo' alt='Card image' style='width:500px;height:300px;'></center>
 
    
                  <div class='row' style='height:50px;'>
                   <div class='col' style='background-color:rgb(53, 90, 193);padding-left:50px;padding-top:10px'><img src='https://img.icons8.com/office/30/000000/filled-like--v1.png'/></div>
                   <div class='col' style='background-color:rgb(53, 90, 193);padding-left:50px;padding-top:10px'><img src='https://img.icons8.com/office/30/000000/speech-bubble-with-dots.png'/></div>
                   <div class='col' style='background-color:rgb(53, 90, 193);padding-left:50px;padding-top:10px'><img src='https://img.icons8.com/office/30/000000/test-account.png'/></div>
   
                  </div>
                  </div>";
      }
        
      

      ?>










      <div class='footer'>
        <div class='row'>
          <div class='col-3' style='padding-top: 20px;'>
            <center><a href='main.php'><img src='https://img.icons8.com/office/30/000000/home--v2.png' /></a></center>
          </div>
          <div class='col-3' style='padding-top: 20px;'>
            <center><a href='postup.php'><img src='https://img.icons8.com/office/30/000000/plus-2-math.png' /></a></center>
          </div>
          <div class='col-3' style='padding-top: 20px;'>
            <center><a href='#'><img src='https://img.icons8.com/external-kmg-design-outline-color-kmg-design/30/000000/external-notification-user-interface-kmg-design-outline-color-kmg-design.png' /></a></center>
          </div>
          <div class='col-3' style='padding-top: 20px;padding-left:10px;'>
            <center><a src='#'><img src='https://img.icons8.com/office/30/000000/test-account.png' /></a></center>
          </div>

        </div>



      </div>






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
      <a href='https://icons8.com/icon/EDZuk72S1FJ7/home'>
</body>

</html>