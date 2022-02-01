<?php 
session_start();
include("config.php");
//include("email.php");
?>

<?php

$msg="";
if(isset($_POST['submit']))
{ 
 $phone_number=$_POST['phone_number'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $query= "INSERT INTO `sign_up`(`phone_number`, `name`, `email`, `password`) VALUES ('$phone_number','$name','$email','$password')";
 //$query="insert into sign_up values(3,'$phone_number','$name','$email','$password')";
 //$result= mysqli_query($conn,"insert into sign_up values('','$phone_number','$name','$email','$password')" );
 $result= mysqli_query($conn, $query);
 $msg="Signup Successfully";

 if($result==true){
  //$success = "Message successfully sent";
   //echo "Signup Successfully";
   $_SESSION['status'] = "Signup Successfully";
   $message = "Signup Successfully";
   echo "<script type='text/javascript'>alert('Signup Successfully');
   window.location.assign('/CreaseartWebApp/profile.php')
   </script>";
  // echo "<script type='text/javascript'>alert('Signup Successfully');</script>";
  //header('location:profile.php');
 }
 else
 {
  echo "<script type='text/javascript'>alert('Signup Successfully');
  window.location.assign('/CreaseartWebApp/index.php')
  </script>";
  //$success = "Message Not sent successfully"; 
 }
 }
?>
