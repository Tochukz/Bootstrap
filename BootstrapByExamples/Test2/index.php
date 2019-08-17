<!DOCTYPE html>
<html>
<head>
	<title>Web App</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="http://localhost/local-cdn/bootstrap-3.3.4-dist/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="http://localhost/local-cdn/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="icon" type="image/png" href="img/tw1.png" />
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"> </script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"> </script>	
	<![endif]-->
	<script src="http://localhost/local-cdn/jquery/jquery-1.11.3.min.js"></script>
	<script src="http://localhost/local-cdn/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-default">
	<div class="navbar-header">
		<a href="#" class="navbar-brand"><img src="img/tw1.png" class="img-responsive" /></a>
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
			<span class="sr-only">Navigation Toggle</span>
			<span class="icon-bar"> </span>
			<span class="icon-bar"> </span>
			<span class="icon-bar"> </span>	
		</button>
	</div>
	<button class="btn btn-default pull-right">
			<span class="glyphicon glyphicon-pencil"> </span> Tweet 
	</button>
	<div class="collapse navbar-collapse" id="menu">
		<ul class="nav navbar-nav"> 
			<li>
				<a href="#" class="active">
					<span class="glyphicon glyphicon-home"></span> Home
				</a>
			</li>
			<li>
				<a href="#">
					<span class="badge">5</span>
					<span class="glyphicon glyphicon-bell"> </span> Notification
				</a> 
			</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-envelope"> </span> Messages
				</a>
			</li>
		</ul>
		<div class="btn btn-group pull-right">
			<button class="btn btn-default dropdwon-toggle " data-toggle="dropdown" data-haspopup="true" aria-expanded="false">
				<img src="img/tochi.jpg"/>
			</button>
			<ul class="dropdown-menu">
				<li> <a href="#">Profile </a></li>
				<li> <a href="#">Settings </a></li>
				<li role="separator" class="diverder"></li>
				<li> <a href="#">Logout</a></li>
			</ul>
		</div>
		<form class="form-inline pull-right">
			<input type="search" class="form-control">
			<span class="glyphicon glyphicon-search"> </span>
		</form>	
	</div>
</nav>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3" id="profile">
				<div class="card">
					<img src="img/ogden.jpg" class="img-responsive cover" />
					<div class="profile-div">
						<img src="img/tochi.jpg" class="profile-pix" />
					</div>
					<h5>Tochuks Chuks<small>@truetochukz</small></h5>
					<p>It will be alright...</p>
					<ul class="list-inline list-unstyled">
						<li>
							<span class="variable">Post</span>
							<span class="value">123 </span>
						</li>
						<li>
							<span class="variable">Comment</span>
							<span class="value">167</span>
						</li>
						<li>
							<span class="variable">Followers</span>
							<span class="value">1674</span>
						</li>

					</ul>
				</div>
			</div>
			<div class="col-sm-6">

			</div>
			<div class="col-sm-3">

			</div>
		</div>
	</div>
</section>

</body>
</html>