<?php 
include('conn.php'); 
if(!empty($_FILES["image"]["tmp_name"])) 
{ 
$folder_name=$_POST['image']; 
$output_dir = @'C:\laragon\www\Exercise 22\pages\images'; 
if (!file_exists($output_dir . $folder_name))//checking if folder exist 
{ 
@mkdir($output_dir . $folder_name, 0777);//making folder 
} 
$fileinfo=PATHINFO($_FILES["image"]["name"]); 
$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension']; 
move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $newFilename); 
$location="images/" . $newFilename; 
mysqli_query($conn,"INSERT INTO `table_user`(`Avatar`) VALUES ('$location')"); 
//mysqli_query($con,"insert into table_user(Avatar) values ('$location')"); 
header('location:vUsers.php'); 
//mysqli_query($con,"insert into table_user (Avatar) values ('$location')"); 
} 
else 
{ 
echo "<script>alert('No Image selected.');location.replace('pages/vUsers.php');</script>"; 
} 
?> 
