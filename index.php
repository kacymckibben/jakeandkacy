<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1">
	<title>Jake and Kacy</title>
	<link rel="shortcut icon" href="favicon.ico?" type="image">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="#">
      				<img src="<?php bloginfo('template_directory');?>/img/jandklogo.svg" alt="logo" />
      			</a>
    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        			<li><a href="#">Location</a></li>
        			<li><a href="#">Registry</a></li>
        			<li><a href="#">RSVP</a></li>
        			<li><a href="#">RSVP</a></li>
      			</ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Gettin' hitched!</h2>
				<table>
					<tr>
						<td>When</td>
						<td>Day of the Week, Month Day, Year</td>
					</tr>
					<tr>
						<td>Time</td>
						<td>00:00 pm</td>
					</tr>
					<tr>
						<td>Where</td>
						<td><a href="<?php bloginfo('template_directory');?>/location.php">Venue, Los Angeles, CA</a></td>
					</tr>
				</table>
				<button>Where to stay</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<button>RSVP</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>The playas</h2>
				<h4>Our wedding party</h4>
				<img src="#" alt="photo of wedding party member 1">
				<p>Name</p>
				<h4>Our family</h4>
				<img src="#" alt="photo of family">
				<p>Name</p>
			</div>
		</div>
	</div>
</body>
</html>