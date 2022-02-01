<?php 
session_start();
include("config.php");
?>

<?php

if(isset($_POST['submit']))
    {
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
   // echo "$phone_number";
    //die;
      if($phone_number && $password){
      $query = "select * from sign_up where phone_number='$phone_number' AND password='$password'";
      //die;
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
    if($count)
    { 
      // $_SESSION['login_status'] = "<a href='logout.php'>Logout Here</a>";
       echo "<script type='text/javascript'>alert('Login Successfully');
       window.location.assign('/CreaseartWebApp/profile.php')
       </script>";
        //header('location:profile.php');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Login Successfully');
       window.location.assign('/CreaseartWebApp/profile.php')
       </script>";
        //$_SESSION['login_status'] = "Login Unsuccessfully";
        //header("location:signup.php");
    }
}
}
    
?>