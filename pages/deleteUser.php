<?php 
include('conn.php'); 
$id=$_GET['id']; 
mysqli_query($conn,"delete from `table_user` where id='$id'"); 
header('location:vUsers.php'); 
?> 
