<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!---<meta name="description" content="">--> 
<!--<meta name="author" content="">--> 
<title>COVID-19 Vaccination Information System</title> 
<!-- Bootstrap Core CSS --> 
<link href="../css/bootstrap.min.css" rel="stylesheet"> 
<!-- MetisMenu CSS --> 
<link href="../css/metisMenu.min.css" rel="stylesheet"> 
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
<div id="wrapper" > 
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
<li><a href="#"><i class="fa fa-home fa-fw"></i> Southern Leyte State University-San Juan Campus COVID Vaccination Information System</a></li> 
</ul> 
<ul class="nav navbar-right navbar-top-links"> 
<li class="dropdown"> 
<a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
<i class="fa fa-user fa-fw"></i>User<b class="caret"></b> 
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
<!-- /.nav-first-level --> 
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
<!-- Page Content --> 
<div id="page-wrapper"> 
<div class="container-fluid"> 
<div class="row"> 
<div class="col-lg-12"> 
<h1 class="page-header"><Strong>COVID Vaccination Information System</Strong></h1> 
</div> 
<!-- /.col-lg-12 --> 
</div> 
<!-- /.row --> 
<div class="col-lg-6 col-md-6"> 
<div class="panel panel-red"> 
<div class="panel-heading"> 
<div class="row"> 
<div class="col-xs-3"> 
<i class="fa fa-edit fa-5x"></i> 
</div> 
<div class="col-xs-9 text-right"> 
<div class="huge">Vaccine Brand</div> 
</div> 
</div> 
</div> 
<a href="vbrand.php"> 
<div class="panel-footer"> 
<span class="pull-left">Vaccine Inventory</span> 
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
<div class="clearfix"></div> 
</div> 
</a> 
</div> 
</div> 
<div class="col-lg-6 col-md-6"> 
<div class="panel panel-green"> 
<div class="panel-heading"> 
<div class="row"> 
<div class="col-xs-3"> 
<i class="fa fa-edit fa-5x"></i> 
</div> 
<div class="col-xs-9 text-right"> 
<div class="huge">Sessions<i class="fas fa-ns8 "></i></div> 
</div> 
</div> 
</div> 
<a href="vlocation.php"> 
<div class="panel-footer"> 
<span class="pull-left">Session Activity</span> 
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
<div class="clearfix"></div> 
</div> 
</a> 
</div> 
</div> 
<div class="col-lg-6 col-md-6"> 
<div class="panel panel-primary"> 
<div class="panel-heading"> 
<div class="row"> 
<div class="col-xs-3"> 
<i class="fa fa-edit fa-5x"></i> 
</div> 
<div class="col-xs-9 text-right"> 
<div class="huge">Users</div> 
</div> 
</div> 
</div> 
<a href="vUsers.php"> 
<div class="panel-footer"> 
<span class="pull-left">Systems users</span> 
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
<div class="clearfix"></div> 
</div> 
</a> 
</div> 
</div>
<div class="col-lg-6 col-md-6"> 
<div class="panel panel-yellow"> 
<div class="panel-heading"> 
<div class="row"> 
<div class="col-xs-3"> 
<i class="fa fa-edit fa-5x"></i> 
</div> 
<div class="col-xs-9 text-right"> 
<div class="huge">Consent Form</div> 
</div> 
</div> 
</div> 
<a href="#"> 
<div class="panel-footer"> 
<span class="pull-left">Consent Form for COVID-19 Vaccination</span> 
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
<div class="clearfix"></div> 
</div> 
</a> 
</div> 
</div> 
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
<!-- Custom Theme JavaScript --> 
<script src="../js/startmin.js"></script> 
</body> 
</html> 
