<?php 
include('conn.php'); 
$id=$_GET['id']; 
$Name= $_POST['fullname']; 
$username=$_POST['username']; 
$job=$_POST['jobposition']; 
$loc=$_POST['location']; 
$pass=$_POST['pass']; 
if(!empty($_FILES["update"]["tmp_name"])) 
{ 
$fileinfo=PATHINFO($_FILES["update"]["name"]); 
$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension']; 
move_uploaded_file($_FILES["update"]["tmp_name"],"images/" . $newFilename); 
$location="images/" . $newFilename; 
mysqli_query($conn,"UPDATE table_user SET Avatar='$location',Name='$Name', Username='$username', Job='$job', Location='$loc', Password='$pass' where id ='$id'"); 
header('location:vUsers.php'); 
} 
else 
{ 
mysqli_query($conn,"UPDATE table_user SET Name='$Name', Username='$username', Job='$job', Location='$loc', Password='$pass' where id ='$id'"); 
header('location:vUsers.php'); 
} 
?> 
