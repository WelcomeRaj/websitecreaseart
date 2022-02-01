<?php 
session_start();
include("config.php");
//include("email.php");
?>
<?php
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $query="INSERT INTO `contact_us`(`name`, `phone_number`, `email`, `message`) VALUES ('$name','$phone_number','$email','$message')";
    $result=mysqli_query($conn, $query);
    if($result==true){

        echo "<script type='text/javascript'>alert('Data inserted Successfully');
window.location.assign('/CreaseartWebApp/contactus.html')
</script>";
    }
    else
    {     
        echo "<script type='text/javascript'>alert('Data not inserted');
window.location.assign('/CreaseartWebApp/contactus.html')
</script>";
    }

}


?>