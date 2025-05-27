<?php 
include('conn.php'); 
$id=$_GET['id']; 
$location=$_POST['Location']; 
$status=$_POST['Status']; 
$date=$_POST['Date']; 
mysqli_query($conn,"UPDATE session_table SET dateCreated='$date', location='$location', status='$status' WHERE id ='$id'"); 
header('location:vlocation.php'); 
?>
