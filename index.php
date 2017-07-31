<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv
		"X-UA-Compatible" content="IE=edge"> <!-- needed for Internet Explorer's rendering engine  -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
				rel="stylesheet">

		<!-- Custom CSS Goes Here -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>


		<!-- custom CSS stylesheet -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<title>Bootstrap Activity</title>
	</head>
	<body class=""sfooter-content">
	<div class="sfooter-content">
		<!-- your page content here-->
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
							<li><a href="#">Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>
						<form class="navbar-form navbar-left">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!-- begin grid layout -->
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Column 1</h2>
					<p>Using just the .col-md-* grid classes, you can create a basic responsive layout where columns start
						out full-width and stacked vertically on mobile devices and tablets (the XS-SM breakpoints), then
						becoming horizontal on desktop screens (MD - LG breakpoints, 992px wide and up). See the following
						example: Bootstrap Basic Grid Example.</p>
				</div>
				<div class="col-md-6">
					<h2>Column 2</h2>
					<p>In the above prefixes, you can also see a two-letter reference to a Bootstrap breakpoint: xs, sm, md,
						and lg. This way, you can create elements that have varying column widths for different Bootstrap
						breakpoints. Grid classes apply to devices with screen widths greater than or equal to the breakpoint
						sizes.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h2>Column 3</h2>
					<p>Here is some simple boilerplate code to help you get started in creating a main navigation bar using
						Bootstrap. This navbar automatically collapses and hides the links under a mobile toggle menu on small
						screens. For a more detailed example, with additional functionality, refer to the documentation
						here: </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h2>Column 4</h2>
					<p>Here is some simple boilerplate code to help you get started in creating a main navigation bar using
						Bootstrap. This navbar automatically collapses and hides the links under a mobile toggle menu on small
						screens. For a more detailed example, with additional functionality, refer to the documentation
						here: </p>
				</div>
				<div class="col-md-4">
					<h2>Column 5</h2>
					<p>Here is some simple boilerplate code to help you get started in creating a main navigation bar using
						Bootstrap. This navbar automatically collapses and hides the links under a mobile toggle menu on small
						screens. For a more detailed example, with additional functionality, refer to the documentation
						here: </p>
				</div>
				<div class="col-md-4">
					<h2>Column 6</h2>
					<p>Here is some simple boilerplate code to help you get started in creating a main navigation bar using
						Bootstrap. This navbar automatically collapses and hides the links under a mobile toggle menu on small
						screens. For a more detailed example, with additional functionality, refer to the documentation
						here: </p>
				</div>
			</div>
		</div>

		</div>

		<footer>
			<!-- footer here-->
			<p>FOOTER</p>
		</footer>
	</body>
</html>

