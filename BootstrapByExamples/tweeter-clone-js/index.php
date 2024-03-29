<!DOCTYPE html>
<html>
<head>
	<title>Twitter Clone with JS Functionalities</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="/css/bootstrap.min.css">
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
		<button class="btn  btn-default visible-xs-block pull-right" id="tweet" data-toggle="modal" data-target="#tweet-modal">
			<span class="glyphicon glyphicon-pencil"> </span> Tweet 
		</button>
	</div>

	<div class="collapse navbar-collapse" id="menu">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">
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
				<a href="#" role="button" data-toggle="modal" data-target="#messages-modal">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Messages
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
		<button class="btn btn-default pull-right hidden-xs" id="tweet" data-toggle="modal" data-target="#tweet-modal">
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
		<div id="profile" class="col-md-3 hidden-sm hidden-xs" data-spy="affix" data-offset-top="0"> 
			<div id="profile-resume" class="card">
				<img src="img/bern.jpg" class="card-img-top img-responsive" />				
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
			<div class="card" id="profile-photo">
				<div class="card-header">Photos</div>
				<div class="card-block">
					<ul class="list-unstyled list-inline">
						<li>
							<a href="#" class="thumbnail"><img src="img/sa.jpg" class="img-responsive"/> </a>
						</li>
						<li>
							<a href="#" class="thumbnail"><img src="img/dubai.jpg" class="img-responsive"/> </a>
						</li>
						<li>
							<a href="#" class="thumbnail"><img src="img/ogden.jpg" class="img-responsive"/> </a>
						</li>
						<li>
							<a href="#" class="thumbnail"><img src="img/kenya.jpg" class="img-responsive"/> </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="main" class="col-md-6 col-sm-12"> 
			<div class="alert alert-info hide">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3>Posting new tweet</h3>
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped active" 
						                                    role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
				</div>
			</div>
			<div class="alert alert-success hide" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3>Tweet alert</h3>
				You have made a new tweet
				<a href="#" class="alert-link">Click here to review your tweet</a>
			</div>
			
			<ol class="breadcrumb card hide">
				<li><a href="#">Home</a></li>
				<li><a href="#">Profile</a></li>
				<li class="active">Feed</li>
			</ol>
			
			<div class="card" id="main-card">
				<form id="new-message">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="What is happening?"/>
						<span class="input-group-addon"> 
							<span class="glyphicon glyphicon-camera" aria-hidden="true"> </span>
						</span>
					</div>
				</form>
				<ul class="list-unstyled" id="feed">
					<li>
						<img src="img/tochi.jpg" class="feed-avatar img-circle" />
						<div class="feed-post">
							<h5>Chuks<small> @truetochukz - 3hr</small> </h5>
							<p>You can't hold a man down forever..</p>
						</div>
						<div class="action-list">
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Reply" id="text-tool">
								<span class="glyphicon glyphicon-share-alt " aria-hidden="true"> </span> 
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Retweet">
								<span class="glyphicon glyphicon-refresh " aria-hidden="true"> </span> 
								<span class="retweet-count">6</span>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Star">
								<span class="glyphicon glyphicon-star " aria-hidden="true"> </span>
							 </a>
						</div>
					</li>
					<li>
						<img src="img/tochukz.jpg" class="feed-avatar img-circle" />
						<div class="feed-post">
							<h5>Tochuks<small> @sirtoch - 5hr</small> </h5>
							<p>Good old days...</p>
						</div>
						<div class="action-list">
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Reply">
								<span class="glyphicon glyphicon-share-alt " aria-hidden="true"> </span> 
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Retweet">
								<span class="glyphicon glyphicon-refresh " aria-hidden="true"> </span> 
								<span class="retweet-count">6</span>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Star">
								<span class="glyphicon glyphicon-star " aria-hidden="true"> </span> 
							</a>
						</div>
					</li>
					<li>
						<img src="img/tochi.jpg" class="feed-avatar img-circle" />
						<div class="feed-post">
							<h5>Chuks<small> @truetochukz - 3hr</small> </h5>
							<p>You can't hold a man down forever..</p>
						</div>
						<div class="action-list">
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Reply" id="text-tool">
								<span class="glyphicon glyphicon-share-alt " aria-hidden="true"> </span> 
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Retweet">
								<span class="glyphicon glyphicon-refresh " aria-hidden="true"> </span> 
								<span class="retweet-count">6</span>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Star">
								<span class="glyphicon glyphicon-star " aria-hidden="true"> </span>
							 </a>
						</div>
					</li>
					<li>
						<img src="img/tochukz.jpg" class="feed-avatar img-circle" />
						<div class="feed-post">
							<h5>Tochuks<small> @sirtoch - 5hr</small> </h5>
							<p>Good old days...</p>
						</div>
						<div class="action-list">
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Reply">
								<span class="glyphicon glyphicon-share-alt " aria-hidden="true"> </span> 
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Retweet">
								<span class="glyphicon glyphicon-refresh " aria-hidden="true"> </span> 
								<span class="retweet-count">6</span>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Star">
								<span class="glyphicon glyphicon-star " aria-hidden="true"> </span> 
							</a>
						</div>
					</li>
					<li>
						<img src="img/tochi.jpg" class="feed-avatar img-circle" />
						<div class="feed-post">
							<h5>Chuks<small> @truetochukz - 3hr</small> </h5>
							<p>You can't hold a man down forever..</p>
						</div>
						<div class="action-list">
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Reply" id="text-tool">
								<span class="glyphicon glyphicon-share-alt " aria-hidden="true"> </span> 
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Retweet">
								<span class="glyphicon glyphicon-refresh " aria-hidden="true"> </span> 
								<span class="retweet-count">6</span>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Star">
								<span class="glyphicon glyphicon-star " aria-hidden="true"> </span>
							 </a>
						</div>
					</li>
					<li>
						<img src="img/tochukz.jpg" class="feed-avatar img-circle" />
						<div class="feed-post">
							<h5>Tochuks<small> @sirtoch - 5hr</small> </h5>
							<p>Good old days...</p>
						</div>
						<div class="action-list">
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Reply">
								<span class="glyphicon glyphicon-share-alt " aria-hidden="true"> </span> 
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Retweet">
								<span class="glyphicon glyphicon-refresh " aria-hidden="true"> </span> 
								<span class="retweet-count">6</span>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Star">
								<span class="glyphicon glyphicon-star " aria-hidden="true"> </span> 
							</a>
						</div>
					</li>
				</ul>
			</div>
			<nav class="text-center">
				<ul class="pagination pagination-lg hide">
					<li class="disabled">
						<a href="#" class="" aria-label="previous">
							<span aria-hidden="true">&laquo;</span>
						 </a> 
					</li>
					<li class="active">
						<a href="#">
							<span class="sr-only">(current)</span> 1
						</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li class="disabled">
						<a href="#">... </a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					
					<li>
						<a href="#" aria-label="next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div id="right-content" class="col-md-3 hidden-sm hidden-xs"> 
			<div class="card" id="who-follow">
				<div class="card-header">
					Who to follow
				</div>
				<div class="card-block">
					<ul class="list-unstyled">
						<li>
							<img src="img/madu.jpg" class="img-rounded" />
							<div class="info">
								<strong>Madu Abuchi</strong>
								<a href="#" class="btn btn-default" role="button" tabindex="-1" data-toggle="popover" data-trigger="focus" title="You may want to follow..."> 
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Follow</a>
							</div>
						</li>
						<li>
							<img src="img/chichi.jpg" class="img-rounded" />
							<div class="info">
								<strong>Chichi Nwachukwu Julieta Brandanana</strong>
								<a href="#" class="btn btn-default" role="button" tabindex="-1" data-toggle="popover" data-trigger="focus" title="You may want to follow..."> 
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Follow</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="card" id="app-info">
				<div class="card-block">
					@2015 SampleApp
					<ul class="list-unstyled list-inline">
						<li><a href="#">About  </a></li>
						<li><a href="#">Terms and Privacy </a></li>
						<li><a href="#">Help </a></li>
						<li><a href="#">Status</a></li>
						<li><a href="#">Contact </a></li>
					</ul>
				</div>
				<div class="card-footer">
					<a href="#">Connect other address book</a>
				</div>
			</div>
		
		</div>
	</div>
</div>
<!-- Modals are defined here-->
<div class="modal fade" id="tweet-modal" role="dialog" tab-index="-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close"> 
					<span  aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Type your tweet in there!</h4>
			</div>
			<div class="modal-body">
				<textarea class="form-control" maxlength="140" rows="4" placeholder="Say what your want to..." id="tweet-txt"> </textarea>
			</div>
			<div class="modal-footer">
				<span class="char-count pull-left" data-max="140">140 </span>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Tweet</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" role="dialog" id="messages-modal" tabindex="-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" data-label="Close">
					<span aria-hidden="true"> &times; </span>
				</button>
				<h4 class="modal-title">Recieved messages</h4>
				<button type="button" class="btn btn-primary btn-message">New Messages</button>
			</div>
			<div class="modal-body">
				<ul class="list-unstyled">
					<li>
						<a href="#">
							<img src="img/tochi.jpg" class="img-circle" />
							<div class="msg-content">
								<h5>Tochi <small>@trutochukz</small></h5>
								<p>Hay! chuks </p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/tochukz.jpg" class="img-circle" />
							<div class="msg-content">
								<h5>Tochi <small>@sirtc</small></h5>
								<p>Hay! sir twunsh</p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/tochi.jpg" class="img-circle" />
							<div class="msg-content">
								<h5>Tochi <small>@trutochukz</small></h5>
								<p>Hay! chuks </p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/tochukz.jpg" class="img-circle" />
							<div class="msg-content">
								<h5>Tochi <small>@sirtc</small></h5>
								<p>Hay! sir twunsh</p>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>	
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>