<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GO-WEB</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_Url() ?>/asset/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
						<a class="navbar-brand" href="#">GO-WEB</a>
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
		</div>
		<div class="jumbotron">
			<div class="container text-center">
				<h1>WELLCOME!</h1>
				
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					GO-WEB.com - iPhone more stable than Android, Really?
					Mobile diagnostics institute researching the stability of the iPhone
					and Android. Which platform is more stable? ... Read More
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					GO-WEB.com - New Oppo FC Barcelona Gliding Final Edition 2017
					The end of 2017, plans to release a smartphone Oppo Edition FC Barcelona
					The third. What kind of specifications? ... Read More
				</div> 
	</div>
		<h1 class="text-center"></h1>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https:<?php echo base_Url() ?>/asset/js/bootstrap.min.js"></script>
	</body>
</html>