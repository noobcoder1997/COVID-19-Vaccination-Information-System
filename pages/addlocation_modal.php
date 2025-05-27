<!-- Add New --> 
<div class="modal fade" id="addnewlocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content"> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
<center><h4 class="modal-title" id="myModalLabel">Add New Covid 19 Vaccination Location</h4></center> 
</div> 
<div class="modal-body"> 
<div class="container-fluid"> 
<form method="POST" action="addnew_location.php"> 
<div class="row"> 
<div class="col-lg-3"> 
<label class="control-label" style="position:relative; top:7px;">Location:</label> 
</div> 
<div class="col-lg-9"> 
<input type="text" class="form-control" name="Location"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-3"> 
<label class="control-label" style="position:relative; top:7px;">Date Created:</label> 
</div> 
<div class="col-lg-9"> 
<input type="date" class="form-control" name="Date"> 
</select> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-3"> 
<label class="control-label" style="position:relative; top:7px;">Status:</label> 
</div> 
<div class="col-lg-9"> 
<select class="form-control" name="Status"> 
<option value="Active">Active</option> 
<option value="Inactive">Inactive</option> 
</select> 
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
