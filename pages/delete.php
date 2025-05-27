<?php 
include('conn.php'); 
$id=$_GET['id']; 
mysqli_query($conn,"delete from `vaccinebrand_table` where id='$id'"); 
header('location:vbrand.php'); 
?>
