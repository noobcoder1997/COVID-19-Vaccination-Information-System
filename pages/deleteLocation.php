<?php 
include('conn.php'); 
$id=$_GET['id']; 
mysqli_query($conn,"delete from `session_table` where id='$id'"); 
header('location:vlocation.php'); 
?>
