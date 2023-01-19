<?php
session_start();
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $gender=$_POST['gender'];
  $q=$_POST['question'];
  $ans=$_POST['ans'];


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

$sql ="insert into  `signup details`(`id`,`name`, `photo`, `phone`, `email`, `password`, `question`, `answer`, `gender`)
 VALUES (NULL,'$fname $lname','$pname','$phone','$email','$pass','$q','$ans','$gender')";


if (mysqli_multi_query($conn, $sql))
 {
 // echo "New records created successfully";
 header('location:login1.php');
}
 else 
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


  ?>