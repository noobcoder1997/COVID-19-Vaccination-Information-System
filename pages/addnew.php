<?php 
include('conn.php'); 
$brandName=$_POST['brandName']; 
$dateRecorded=$_POST['dateRecorded']; 
$vaccineStatus=$_POST['vaccineStatus']; 
mysqli_query($conn,"INSERT INTO `vaccinebrand_table`(dateRecorded,brandName,vaccineStatus) VALUES ('$dateRecorded','$brandName','$vaccineStatus')"); 
header('location:vbrand.php'); 
?> 
