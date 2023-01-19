<?php
session_start();

  $name = $_SESSION['name'];

    $phone = $_SESSION['phone'];

    $gender = $_SESSION['gender'];

    $email = $_SESSION['email'];

    $profilephoto=$_SESSION['photo'];


  






  //to upload an image

  $pname=$_FILES['f1']['name'];
  $tmpname=$_FILES['f1']['tmp_name'];
  $size=$_FILES['f1']['size'];
  $target_dir = "photo/";
  $target_file = $target_dir.basename($_FILES["f1"]["name"]);
  
  $upload=move_uploaded_file($tmpname,$target_file);





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql ="insert into  `posts_art`(`id`,`name`, `photo`, `phone`, `email`,`profilephoto`,`likes`)
 VALUES ('NULL','$name','$pname','$phone','$email','$profilephoto','0')";


if (mysqli_multi_query($conn, $sql))
 {
 // echo "New records created successfully";
 header('location:artfeedpage.php');
}
 else 
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


  ?>