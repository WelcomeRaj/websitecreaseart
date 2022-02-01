<?php 
session_start();
include("config.php");
//include("email.php");
?>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$query="INSERT INTO `faq_contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
$result= mysqli_query($conn, $query);
if($result==true){
echo  "<script type='text/javascript'>alert('Data inserted Successfully');
window.location.assign('/CreaseartWebApp/faqs.html')
</script>";
}
else
{
    echo "<script type='text/javascript'>alert('Signup Successfully');
    window.location.assign('/CreaseartWebApp/faqs.html')
    </script>";
}


}


?>