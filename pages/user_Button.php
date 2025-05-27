<!-- Delete -->
<div class="modal fade"id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Delete User Information</h4></center>
</div>
<div class="modal-body">
<?php
$del=mysqli_query($conn,"select * from table_user where id='".$row['id']."'");
$drow=mysqli_fetch_array($del);
?>
<div class="container-fluid">
<h5><center>Are you sure to delete <strong><?php echo ucwords($drow['Name']); ?>
</strong> from the list? This method cannot be undone.</center></h5>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default"
data-dismiss="modal"><span class="glyphicon glyphicon-remove">
</span> Cancel</button>
<a href="deleteUser.php?id=<?php echo $row['id']; ?>" class="btn
btn-danger"><span class="glyphicon glyphicon-trash">
</span> Delete</a>
</div>
</div>
</div>
</div>
<!-- /.modal -->
<!-- Edit-->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1"
role="document" aria-labelledby="myModalLabel" aria-hidden="true">
<!--<div class="modal-dialog modal-dialog-scrollable">-->
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button"class="close"data-dismiss="modal"
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Update User Information</h4></center>
</div>
<div class="modal-body">
<?php
$edit=mysqli_query($conn,"select* from table_user where id='".$row['id']."'");
$erow=mysqli_fetch_array($edit);
?>
<div class="container-fluid">
<form method="POST" action="editUser.php?id=<?php echo $erow['id']; ?>" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-4">
<div class='container'>
<?php echo"<img id='img' style='width:150px;height:150px;' alt='Avatar' src= " . $erow['Avatar']. "  >";?>
<script>
function readURL1(input) {
var element = document.getElementById("myprogressBar");
var width = 0;
var identity = setInterval(scene, 10);
function scene() {
if(width >= 100) {
clearInterval(identity);
if(input.files && input.files[0])
{
var reader= new FileReader();
reader.onload= function (e) {
$('#img').attr('src',
e.target.result).width(150).height(150);
};
reader.readAsDataURL(input.files[0]);
}
}
else
{
width++;
element.style.width = width + '%';
}
}
}
</script>
</div>
</div>
<div class="col-lg-8">
<div style="height:50px;"></div>
<input class="form-control" type="file" style='width:100%;' name="update" accept="image/*"onchange="readURL1(this);">
<div class="progress" id="Progress_Status_1"style="height:5px;">
<div class="progress-barprogress-bar-striped" role="progressbar"id="myprogressBar"></div>
</div>
</div>
</div>
<div style="height:30px;"></div>
<div class="row">
<div class="col-lg-4">
<label style="position:relative; top:7px;">Name:</label>
</div>
<div class="col-lg-8">
<input type="text" name="fullname" class="form-control" style='width:100%;' value="<?php echo $erow["Name"]; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label style="position:relative; top:7px;">Username:</label>
</div>
<div class="col-lg-8">
<input type="text" name="username" class="form-control" style='width:100%;'  value="<?php echo $erow['Username']; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label style="position:relative; top:7px;">Password:</label>
</div>
<div class="col-lg-8">
<input type="password"name="pass" class="form-control" style='width:100%;'  value="<?php echo $erow['Password']; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label style="position:relative; top:7px;">Job Position:</label>
</div>
<div class="col-lg-8">
<input type="text" name="jobposition" class="form-control" style='width:100%;'  value="<?php echo $erow['Job']; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label style="position:relative; top:7px;">Location:</label>
</div>
<div class="col-lg-8">
<input type="text" name="location" class="form-control" style='width:100%;'  value="<?php echo $erow['Location']; ?>">
</div>
</div>
<div style="height:10px;"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit"class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->
