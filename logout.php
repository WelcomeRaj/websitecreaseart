<?php 
session_start();
include("config.php");
session_destroy(); 
echo "<script type='text/javascript'>alert('Logout Successfully');
window.location.assign('/CreaseartWebApp/index.php')
</script>";

?>

