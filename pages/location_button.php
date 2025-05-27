<div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content"> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
<center><h4 class="modal-title" id="myModalLabel">Delete Sessions Information</h4></center> 
</div> 
<div class="modal-body"> 
<?php 
$del=mysqli_query($conn,"select * from session_table where id='".$row['id']."'"); 
$drow=mysqli_fetch_array($del); 
?> 
<div class="container-fluid"> 
<h5><center>Are you sure to delete <strong><?php echo ucwords($drow['location']); ?> 
</strong> from the list? This method cannot be undone.</center></h5> 
</div> 
</div> 
<div class="modal-footer"> 
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> 
</span> Cancel</button> 
<a href="deleteLocation.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> 
</span> Delete</a> 
</div> 
</div> 
</div> 
</div> 
<!-- /.modal --> 
<!-- Edit --> 
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content"> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
<center><h4 class="modal-title" id="myModalLabel">Update Sessions Information</h4></center> 
</div> 
<div class="modal-body"> 
<?php 
$edit=mysqli_query($conn,"select * from session_table where id='".$row['id']."'"); 
$erow=mysqli_fetch_array($edit); 
?> 
<div class="container-fluid"> 
<form method="POST" action="editLocation.php?id=<?php echo $erow['id']; ?>"> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Session Location:</label> 
</div> 
<div class="col-lg-8"> 
<input type="text" class="form-control" name="Location" style="width:100%;" value="<?php echo $erow['location']; ?>"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Date Created:</label> 
</div> 
<div class="col-lg-8"> 
<input type="date" class="form-control" name="Date" style="width:100%;" value="<?php echo $erow['dateCreated']; ?>"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-4"> 
<label class="control-label" style="position:relative; top:7px;">Session Status:</label> 
</div> 
<div class="col-lg-8"> 
<select class="form-control" name="Status" style="width:100%;" value="<?php echo $erow['status']; ?>"> 
<option value="Active">Active</option> 
<option value="Inactive">Inactive</option> 
</select> 
</div> 
</div> 
</div> 
</div> 
<div class="modal-footer"> 
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> 
<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button> 
</div> 
</form> 
</div> 
</div> 
</div> 
<!-- /.modal -->
