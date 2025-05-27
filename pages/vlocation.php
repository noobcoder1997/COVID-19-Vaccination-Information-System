<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>COVID-19 Vaccination Information System</title> 
<!-- Bootstrap Core CSS --> 
<link href="../css/bootstrap.min.css" rel="stylesheet"> 
<!-- MetisMenu CSS --> 
<link href="../css/metisMenu.min.css" rel="stylesheet"> 
<!-- DataTables CSS --> 
<link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet"> 
<!-- DataTables Responsive CSS --> 
<link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet"> 
<!-- Custom CSS --> 
<link href="../css/startmin.css" rel="stylesheet"> 
<!-- Custom Fonts --> 
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> 
<![endif]--> 
</head> 
<body> 
<div id="wrapper"> 
<!-- Navigation --> 
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
<div class="navbar-header"> 
<a class="navbar-brand" href="index.php">SLSU-CVIS</a> 
</div> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
<span class="sr-only">Toggle navigation</span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
</button> 
<ul class="nav navbar-nav navbar-left navbar-top-links"> 
<li><a href="#"><i class="fa fa-home fa-fw"></i> Southern Leyte State University-SJ Campus, San Juan, Southern Leyte 6611</a></li> 
</ul> 
<ul class="nav navbar-right navbar-top-links"> 
<li class="dropdown"> 
<a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
<i class="fa fa-user fa-fw"></i> Admin Menu <b class="caret"></b> 
</a> 
<ul class="dropdown-menu dropdown-user"> 
<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a> 
</li> 
<li class="divider"></li> 
<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a> 
</li> 
</ul> 
</li> 
</ul> 
<!-- /.navbar-top-links --> 
<div class="navbar-default sidebar" role="navigation"> 
<div class="sidebar-nav navbar-collapse"> 
<ul class="nav" id="side-menu"> 
<li> 
<a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a> 
</li> 
<li> 
<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Transaction Menu<span class="fa arrow"></span></a> 
<ul class="nav nav-second-level"> 
</ul> 
<!-- /.nav-second-level --> 
</li> 
<li> 
<a href="#"><i class="fa fa-align-justify"></i> Vaccination Menu<span class="fa arrow"></span></a> 
<ul class="nav nav-second-level"> 
<li> 
<a href="vbrand.php"><i class="fa fa-list-alt"></i> Vaccines</a> 
<a href="vlocation.php"><i class="fa fa-location-arrow"></i> Sessions</a> 
</li> 
</ul> 
<!-- /.nav-second-level --> 
</li> 
<li> 
<a href="#"><i class="fa fa-users"></i> Users<span class="fa arrow"></span></a> 
<ul class="nav nav-second-level"> 
<li> 
<a href="vUsers.php"><i class="fa fa-user"></i> System Users</a> 
</li> 
</ul> 
<!-- /.nav-second-level --> 
</li> 
</ul> 
</div> 
</div> 
<!-- /.navbar-static-side --> 
</nav> 
<div id="page-wrapper"> 
<div class="container-fluid"> 
<div class="row"> 
<div class="col-lg-12"> 
<h1 class="page-header">Sessions Masterlist</h1> 
<span class="pull-right"><a href="#addnewlocation" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span> 
<div style="height:50px;"></div> 
</div> 
<!-- /.col-lg-12 --> 
</div> 
<!-- /.row --> 
<div class="row"> 
<div class="col-lg-12"> 
<div class="panel panel-default"> 
<div class="panel-heading"> 
<strong>COVID Sessions </strong> 
</div> 
<!-- /.panel-heading --> 
<div class="panel-body"> 
<div class="table-responsive"> 
<table class="table table-striped table-bordered table-hover" id="dataTables-example"> 
<thead> 
<tr> 
<th>Date Created</th> 
<th>Session Location</th> 
<th>Session Status</th> 
<th>Action</th> 
</tr> 
</thead> 
<tbody> 
<?php 
include('conn.php'); 
$query=mysqli_query($conn,"SELECT * FROM `session_table`"); 
while($row=mysqli_fetch_array($query)){ 
?> 
<tr> 
<td><?php echo ucwords($row['dateCreated']); ?></td> 
<td><?php echo ucwords($row['location']); ?></td> 
<td><?php echo $row['status']; ?></td> 
<td> 
<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a> 
 
<?php include('location_button.php'); ?> 
</td> 
</tr> 
<?php 
} 
?> 
 
</tbody> 
</table> 
</div> 
<?php include('addlocation_modal.php'); ?> 
</div> 
<!-- /.panel-body --> 
</div> 
<!-- /.panel --> 
</div> 
<!-- /.col-lg-12 --> 
</div> 
<!-- /.row --> 
</div> 
<!-- /.container-fluid --> 
</div> 
<!-- /#page-wrapper --> 
</div> 
<!-- /#wrapper --> 
<!-- jQuery --> 
<script src="../js/jquery.min.js"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="../js/bootstrap.min.js"></script> 
<!-- Metis Menu Plugin JavaScript --> 
<script src="../js/metisMenu.min.js"></script> 
<!-- DataTables JavaScript --> 
<script src="../js/dataTables/jquery.dataTables.min.js"></script> 
<script src="../js/dataTables/dataTables.bootstrap.min.js"></script> 
<!-- Custom Theme JavaScript --> 
<script src="../js/startmin.js"></script> 
<!-- Page-Level Demo Scripts - Tables - Use for reference --> 
<script> 
$(document).ready(function() { 
$('#dataTables-example').DataTable({ 
responsive: true 
}); 
}); 
</script> 
</body> 
</html>
