<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];




$hostname='localhost';
$username="root";
$dbpass="";
$dbname="project";


$con=mysqli_connect($hostname,$username,$dbpass,$dbname);
$qr="SELECT * FROM `signup details` WHERE email='$email' and password='$pass'";
$res=mysqli_query($con,$qr);
$name="";
$phone="";
$photo='';

while($row=mysqli_fetch_array($res))
{
    $name=$row['name'];
    $phone=$row['phone'];
    $gender=$row['gender'];
   
    $photo=$row['photo']; 

}

$_SESSION['name']=$name;
$_SESSION['phone']=$phone;
$_SESSION['gender']=$gender;

$_SESSION['email']=$email;
$_SESSION['photo']=$photo;

if (mysqli_num_rows($res)>0)
{
  
    header('location:home.html');

}

else{
   
   header('location:login1.php?id2=2');
}



?>