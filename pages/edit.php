<?php 
include('conn.php'); 
$id=$_GET['id']; 
$brandName=$_POST['brandName']; 
$dateRecorded=$_POST['dateRecorded']; 
$vaccineStatus=$_POST['vaccineStatus']; 
mysqli_query($conn,"update vaccinebrand_table SET brandName='$brandName', dateRecorded='$dateRecorded', vaccineStatus='$vaccineStatus' where id ='$id'"); 
header('location:vbrand.php'); 
?> 
