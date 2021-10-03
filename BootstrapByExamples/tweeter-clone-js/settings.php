<!DOCTYPE html>
<html>
<head>
	<title>Web App</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="http://localhost/local-cdn/bootstrap-3.3.4-dist/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="http://localhost/local-cdn/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="icon" type="image/gif" href="img/tw.gif" />
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"> </script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"> </script>	
	<![endif]-->
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-default">
	<div class="navbar-header">
		<a href="#" class="navbar-brand"><img src="img/tw.gif" class="img-responsive"/></a>
		<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
			<span class="sr-only">Toggle Collapse</span>
			<span class="icon-bar"> </span>
			<span class="icon-bar"> </span>
			<span class="icon-bar"> </span>
		</button>
		<button class="btn  btn-default visible-xs-block pull-right" id="tweet">
			<span class="glyphicon glyphicon-pencil"> </span> Tweet 
		</button>
	</div>

	<div class="collapse navbar-collapse" id="menu">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="index.php">
					<span class="glyphicon glyphicon-home" aria-hidden="true"> </span> Home
				</a> 
			</li>
			<li>

				<a href="#">
					<span class="badge">5</span>
					<span class="glyphicon glyphicon-bell" aria-hidden="true"> </span> Notifications 
				</a> 
			</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Message
				</a> 
			</li>
			<li class="visible-xs-inline">
				<a href="#">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Profile
				</a>
			</li>
			<li class="visible-xs-inline">
				<a href="#">
					<span class="glyphicon glyphicon-off" aria-hidden="true"> </span>Logout
				</a>
			</li>

		</ul>
		<button class="btn btn-default pull-right hidden-xs" id="tweet">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Tweet  
		</button>
		<div class="btn-group pull-right hidden-xs" id="navbar_opts" >
			<button class="btn btn-default dropdown-toggle thumbnail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
				<img src="img/tochi.jpg"/>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Profile </a></li>
				<li><a href="settings.php">Setting</a></li>
				<li role="seperator" class="divider"></li>
				<li><a href="#"> Logout</a></li>
			</ul>
		</div>

		<form id="search" role="search" class="hidden-sm">
			<div class="input-group">
				<input type="search" class="form-control" placeholder="search..."/>
				<span class="glyphicon glyphicon-search" aria-hidden="true"> </span>
			</div>
		</form>
	</div>
	

</nav>
<div class="container">
	<div class="row">
		<div id="profile" class="col-md-3 hidden-sm hidden-xs"> 
			<div id="profile-resume" class="card">
				<img src="img/idaho.jpg" class="card-img-top img-responsive" />				
				<div class="card-block">
					<img src="img/tochi.jpg" class="card-img" />
					<h4 class="card-title">Tochi Chuks<small>@truetochukz</small></h4>
					<p class="card-text"> Its is so wonderful ...</p>
					<!-- <a href="#" class="btn btn-primary">Can add button </a> -->
					<ul class="list-inline list-unstyled">
						<li id="card-tweets"> 
							<a href="#">
								<span class="profile-stats" >Tweets</span>
								<span class="profile-value">23k</span>
							</a>
						</li>
						<li class="card-following"> 
							<a href="#">
								<span class="profile-stats" >Following</span>
								<span class="profile-value">7</span>
							</a>
						</li>
						<li class="card-followers"> 
							<a href="#">
								<span class="profile-stats" >Followers</span>
								<span class="profile-value">89k</span>
							</a>
						</li>

					</ul>
				</div>	
			</div> 
			<div id="profile-settings" class="card">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active">
						<a href="#">
							Account
							<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
						</a>
					</li>
					<li role="presentation">
						<a href="#">
							Security
							<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
						</a>
					</li>
					<li role="presentation">
						<a href="#">
							Notifications
							<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
						</a>
					</li>
					<li role="presentation">
						<a href="#">
							Design
							<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
						</a>
					</li>
				</ul>
			</div>
		
		</div>
		<div id="main" class="col-md-6 col-sm-12"> 
			<ul class="nav nav-tabs nav-justify" id="account-tabs">
				<li role="presentation" class="active">
					<a href="#account-user" data-toggle="tab">User info</a>
					<!--If you are using pill add data-toggle="pill" instead.-->
				</li>
				<li role="presentation">
					<a href="#account-language" data-toggle="tab">Language</a>
				</li>
				<li role="presentation">
					<a href="#account-mobile" data-toggle="tab">Mobile</a>
				</li>
			</ul>
			<div class="tab-content card">
				<div role="tabpanel" class="tab-pane active"  id="account-user">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="control-label col-sm-3" for="name">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" value="Tochukz Chukz"/>
							</div>
						</div>
						<div class="form-group">
							<label for="username" class="control-label col-sm-3">Username</label>
							<div class="col-sm-9">
								<div class="input-group">
									<div class="input-group-addon">@</div>
									<input type="text" class="form-control" id="username" value="truetochukz" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="email">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" value="truetochukz@gmail.com" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-primary">Save changes</button>					
							</div>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane fade"  id="account-language">
					Language tab panel
				</div>
				<div role="tabpanel" class="tab-pane fade" id="account-mobile">
					Mobile tab panel
				</div>
			</div>
		

			
			
		</div>
		<div id="right-content" class="col-md-3 hidden-sm hidden-xs"> 
			<ul class="list-group">
				<li class="list-group-item list-group-item-info">
					 User stats 
				</li>
				<li class="list-group-item">
					Associates <span class="label label-success">67</span>
				</li>
				<li class="list-group-item">
					Posts <span class="label label-danger">112</span>
				</li>
				<li class="list-group-item">
					Comments <span class="label label-default"> 238</span>
				</li>
				<li class="list-group-item">
					Likes <span class="badge glyphicon glyphicon-star" aria-hidden="true"></span>
				</li>
			</ul>
		
		
		</div>
	</div>
</div>

<script src="http://localhost/local-cdn/jquery/jquery-1.11.3.min.js"></script>
<script src="http://localhost/local-cdn/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<!--<script src="http://localhost/local-cdn/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>-->
<script src="js/main.js"> </script>
</body>
</html>