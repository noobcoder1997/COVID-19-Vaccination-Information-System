<!-- Add New --> 
<div class="modal fade" id="addnewuser" tabindex="-1" role="document" aria-labelledby="myModalLabel" aria-hidden="true"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content"> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
<center><h4 class="modal-title" id="myModalLabel">Add New User</h4></center> 
</div> 
<div class="modal-body"> 
<div class="container-fluid"> 
<form method="POST" action="addnewUser.php" enctype="multipart/form-data"> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">First Name:</label> 
</div> 
<div class="col-lg-8"> 
<input type="text" class="form-control" name="firstname"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Last Name:</label> 
</div> 
<div class="col-lg-8"> 
<input type="text" class="form-control" name="lastname"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Username:</label> 
</div> 
<div class="col-lg-8"> 
<input type="text" class="form-control" name="username"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Password:</label> 
</div> 
<div class="col-lg-8"> 
<input type="password" class="form-control" name="password"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Job Position:</label> 
</div> 
<div class="col-lg-8"> 
<input type="text" class="form-control" name="jobposition"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Location:</label> 
</div> 
<div class="col-lg-8"> 
<input type="text" class="form-control" name="location"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Avatar:</label> 
</div> 
<div class="col-lg-8"> 
<input class="form-control" type="file" name="image" accept="image/*" onchange="readURL(this);" > 
<div class="progress" id="Progress_Status_1" style="height: 5px;"> 
<div class="progress-bar progress-bar-striped" role="progressbar" id="myprogressBar1"></div> 
</div> 
<div style="height:10px;"></div> 
<div class="container"> 
<img id="Img" src="#" style="width:75px;height:75px;" alt="Empty"/> 
<script> 
function readURL(input) { 
var element = document.getElementById("myprogressBar1"); 
var width = 0; 
var identity = setInterval(scene, 10); 
function scene() { 
if (width >= 100) { 
clearInterval(identity); 
if (input.files && input.files[0]) 
{ 
var reader = new FileReader(); 
reader.onload = function (e) { 
$('#Img').attr('src', e.target.result).width(75).height(75); 
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
</div> 
</div> 
</div> 
<div class="modal-footer"> 
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> 
<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a> 
</form> 
</div> 
</div> 
</div> 
</div> 
