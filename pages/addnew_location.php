<?php 
include('conn.php'); 
$location=$_POST['Location']; 
$status=$_POST['Status']; 
$date=$_POST['Date']; 
mysqli_query($conn," INSERT INTO `session_table`(dateCreated,location,status) VALUES ('$date','$location','$status')"); 
header('location:vlocation.php'); 
?> 
