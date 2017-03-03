<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url()?>/home">GO-WEB</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url()?>/home">Home</a></li>
							<li><a href="<?php echo site_url()?>/about">About</a></li>
							<li class="active"><a href="<?php echo site_url()?>/contact">Contact</a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Edit</a></li>
									<li><a href="#">Logout</a></li>								
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">				
			
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading"><h1>Contact</h1></div>
			
				<!-- Table -->
				<table class="table table-responsive">
					<thead>
						<tr>							
							<td><div class="input-group" width="204">
    								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    								<input id="Nama" type="text" class="form-control" name="nama" placeholder="Nama">
								</div></td>
						</tr>
						<tr>							
							<td><div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input type="text" name="email" id="inputEmail" class="form-control" value="" required="required" pattern="" title="" placeholder="Email"></div></td>
						</tr>
						<tr>
							
							<td><div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
							<textarea name="pesan" id="input" class="form-control" rows="3" required="required" placeholder="Pesan"></textarea>
							</div></td>
						</tr>						
					</thead>										
				</table>
				<p align="right"><button type="button" class="btn btn-info">Submit</button></p>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
