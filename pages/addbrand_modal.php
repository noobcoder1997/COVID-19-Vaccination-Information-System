<!-- Add New --> 
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content"> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
<center><h4 class="modal-title" id="myModalLabel">Add New Covid 19 Vaccine</h4></center> 
</div> 
<div class="modal-body"> 
<div class="container-fluid"> 
<form method="POST" action="addnew.php"> 
<div class="row"> 
<div class="col-lg-3"> 
<label class="control-label" style="position:relative; top:7px;">Brand Name:</label> 
</div> 
<div class="col-lg-9"> 
<!--input type="text" class="form-control" name="brandName"> -->
<select class="form-control" name="brandName" id="sel1">
    <option> </option>
    <option>PFizer</option>
    <option>JensenJhonsons</option>
    <option>Sinovac</option>
    <option>Moderna</option>
    <option>Aztrazenica</option>
</select>
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-3"> 
<label class="control-label" style="position:relative; top:7px;">Date :</label> 
</div> 
<div class="col-lg-9"> 
<input type="date" class="form-control" name="dateRecorded"> 
</div> 
</div> 
<div style="height:10px;"></div> 
<div class="row"> 
<div class="col-lg-3"> 
<label class="control-label" style="position:relative; top:7px;">Vaccine Status:</label> 
</div> 
<div class="col-lg-9"> 
<!--<input type="select" class="form-control" name="vaccineStatus"> -->
<select class="form-control" name="vaccineStatus" id="sel1">
    <option>Active</option>
    <option>Inactive</option>
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
