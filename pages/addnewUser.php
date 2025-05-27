<?php 
include('conn.php'); 
$fname=$_POST['firstname']; 
$lname=$_POST['lastname']; 
$name= $fname.' '.$lname; 
$username=$_POST['username']; 
$job=$_POST['jobposition']; 
$loc=$_POST['location']; 
$pass=$_POST['password']; 
if(!empty($_FILES["image"]["tmp_name"])) 
{ 
$folder_name=$_POST['image']; 
$output_dir = @'E:\laragon\www\New folder\New folder\Covid-19 Vaccination Information System\pages\images'; 
if (!file_exists($output_dir . $folder_name))//checking if folder exist 
{ 
@mkdir($output_dir . $folder_name, 0777);//making folder 
} 
$fileinfo=PATHINFO($_FILES["image"]["name"]); 
$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension']; 
move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $newFilename); 
$location="images/" . $newFilename; 
mysqli_query($conn,"INSERT INTO `table_user`(`Avatar`,`Name`,`Username`,`Job`,`Location`,`Password`) VALUES ('$location','$name','$username','$job','$loc','$pass')"); 
header('location:vUsers.php'); 
} 
else 
{ 
echo "<script>alert('No Image selected.');location.replace('vUsers.php');</script>"; 
} 
?> 
