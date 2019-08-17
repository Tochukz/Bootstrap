<!DOCTYPE html>
<html>
<head lang="en">
    <title>Bootstrap Landing Page</title>
    <link rel="stylesheet" href="http://localhost/local-cdn/bootstrap-3.3.4-dist/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="http://localhost/local-cdn/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <meta charset="UTF-8" />
    <meta name="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" id="nav">
    <div class="navbar-header">
        <a href="#Comany" class="navbar-brand">Company Name</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false">
            <span class="sr-only"> Toggle Navigation </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
        </button>
    </div>
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-primary">Cutomer Area</button>
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" ariahaspopup="true" arai-expaned="false">
        <span class="caret"> </span> 
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 1</a></li>
            <li role="seperator" class="divider"></li>
            <li><a href="#">Link A</a></li>
            <li><a href="#">Link B</a></li>
        </ul>
    </div>
   
    <div class="collapse navbar-collapse navbar-right" id="nav-menu">
        <ul class="nav navbar-nav"> 
            <li><a href="#about"> About </a></li>
            <li><a href="#features"> Features </a></li>
            <li><a href="#pricing"> Pricing </a></li>
            <li><a href="#contact"> Contact </a></li>
        </ul>
    </div>
</nav>
<section id="intro-header">
    <div class="container">
        <div class="row">
        <!--row 2-->
            <div class="wrap-headline">
                <h1 class="text-center">Comapany Name</h1>
                <h2 class="text-center">Tagline message </h2>
                <hr />
                <ul class="list-inline list-unstyled text-center">
                    <li><a href="#" class="btn btn-default btn-lg" role="button">Sign Up </a> </li>
                    <li><a href="#" class="btn btn-primary btn-lg" role="button" id="signin-btn">Sing In </a> </li>
                </ul>
                <form class="form-inline text-center" id="signin-form">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"> </span></div>
                            <input type="email" class="form-control" placeholder="email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"> </span> </div>
                            <input type="password" class="form-control" placeholder="password"/>
                        </div>                
                    </div>
                    <input type="submit" value="Sign In" class="btn btn-primary"/>
                </form>

            </div>
        </div>
    </div>
</section>
<section id="input_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                 <pre>
                    To hide an element, use the  <em style="color:red">.hidden-element</em>  class. 
                </pre>
            </div>

            <div class="col-sm-12"><h3>Testing inputs</h3> </div>
            <div class="col-sm-12">
                <div class="input-group">
                    <input type="search" placeholder="type the book name..."class="form-control"/>
                    <span class="input-group-btn"> 
                        <button class="btn btn-primary">Search</button>
                    </span>
                </div>

                <input type="search" class="form-control" />

                <div class="input-group">
                    <span class="input-group-btn">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                Options <span class="caret"> </span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Option 1 </a></li>
                                <li><a href="#">Option 2</a></li>
                                <li role="sperator" class="divider"> </li>
                                <li><a hre="#">Option A</a></li>
                                <li><a href="#">Option B</a></li>
                            </ul>                        
                        </div>
                    </span>
                    <input type="text" placeholder="Enter the author's name..." class="form-control" />
                </div>

                <div class="input-group">
                    <span class="input-group-btn">
                        <div class="btn-group">
                            <botton class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                Select <span class="caret"> </span>
                            </botton>
                            <ul class="dropdown-menu">
                                <li><a href="#">Select 1</a></li>
                                <li><a href="#">Select 2</a></li>
                            </ul>
                        </div>
                    </span>
                    <input type="text" placeholder="Type the title here..." class="form-control" />
                    <span class="input-group-btn">
                        <div class="btn-group">
                            <!--You can either group the active drop down botton with the input and the dropdwon button in the other span
                                Or this inactive one with the the input and the other span group but you can group them all together -->                            
                           <!--  <button type="button" class="btn btn-info">Pick One</button> -->
                            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"> </span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Pick No1</a></li>
                                <li><a href="#">Pick No2</a></li>
                            </ul>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
        <!--row 3 -->
            <div class="col-sm-6">
                <img src="img/myweb3.png" class="img-responsive"/>
            </div>
            <div class="col-sm-6">
                <h3>Lerel Ipsome </h3>
                <p>Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome LorelLorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel</p>
            </div>
        </div>
        <div class="row">
        <!--row 4 -->
            <div class="col-sm-6">
                <h3>Lerel Ipsome </h3>
                <p>Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome LorelLorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel Lorel  Lorel Ipsome Lorel Ipsome Lorel</p>
            </div>
            <div class="col-sm-6">
                <img src="img/ojlinks.jpg" class="img-responsive"/>
            </div>
        </div>
    </div>
</section>

<section id="features">
    <div class="container">
        <div class="row">
        <!--row 5 -->
            <div class="col-sm-12">
                <h3 class="features text-center">Features </h3>
                <p  class="text-center">Features Message Headlines </p>
            </div>
        </div>
        <div class="row">
        <!--row 6 -->
            <div class="col-sm-2 col-md-4" >
                <div class="features">
                    <span class="glyphicon glyphicon-screenshot" aria-hidden="true" /> </span>
                    <span class="feature-tag">Product focus</span>
                </div>
            </div>
            <div class="col-sm-2 col-md-4">
                <div class="features">
                    <span class="glyphicon glyphicon-education" aria-hidden="true"> </span>
                    <span class="feature-tag"> Teaching as a passion</span>
                </div>
            </div>
            <div class="col-sm-2 col-md-4">
                <div class="features">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"> </span>
                    <span class="feature-tag">Spreading Knowlege </span>
                </div>
            </div>
            <div class="col-sm-2 col-md-4">
                <div class="features">
                    <span class="glyphicon glyphicon-hourglass" aria-hidden="true"> </span>
                    <span class="feature-tag"> Save your day time</span>
                </div>
            </div>
            <div class="col-sm-2 col-md-4">
                <div class="features">
                    <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                    <span class="feature-tag">Make it fancy</span>
                </div>
            </div>
            <div class="col-sm-2 col-md-4">
                <div class="features">
                    <span class="glyphicon glyphicon-heart" aria-hidden="true"> </span>
                    <span class="feature-tag"> Made with love</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center price-headline">Price table </h3>
            </div>
        </div>
        <div class="row">
            <div class="center-block"> <!--col-sm-10 col-sm-offset-1-->
                <table class="table table-striped table-condensed">
                    <thead>
                        <tr>
                            <th class="success"> <h4 class="text-center white-text">Free package</h4></th>
                            <th class="info"><h4 class="text-center white-text">Standard package</h4></th>
                            <th class="danger"><h4 class="text-center white-text">Premium package</h4></th>
                        </tr>

                    </thead>
                    <tfoot>
                        <tr>
                            <td><a href="#" class="btn btn-success btn-block" role="button">Subscribe </a> </td>
                            <td><a href="#" class="btn btn-info btn-block" role="button">Subscribe </a> </td>
                            <td><a href="#" class="btn btn-danger btn-block" role="button">Subscribe </a></td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td class="success"><h3 class="text-center white-text">$0 </h3></td>
                            <td class="info"><h3 class="text-center white-text"> $99</h3> </td>
                            <td class="danger"><h3 class="text-center white-text">$999</h3></td>
                        </tr>
                        <tr>
                            <td>Lorel Ipsum </td>
                            <td>Lorel Ipsum </td>
                            <td>Lorel Ipsum </td>
                        </tr>
                        <tr>
                            <td>Lorel Ipsum </td>
                            <td>Lorel Ipsum </td>
                            <td>Lorel Ipsum </td>
                        </tr>
                        <tr>
                            <td>Lorel Ipsum </td>
                            <td>Lorel Ipsum </td>
                            <td>Lorel Ipsum </td>
                        </tr>
                         <tr>
                            <td>--- </td>
                            <td>Lorel Ipsum </td>
                            <td>Lorel Ipsum </td>
                        </tr>
                         <tr>
                            <td>--- </td>
                            <td>--- </td>
                            <td>Lorel Ipsum </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div> 
    </div>

</section>

<section id="team">
    <div class="container">
        <div class="col-sm-12">
            <ul class="list-inline list-unstyled text-center">
                <li>
                    <img src="img/tochi.jpg" class="img-rounded img-responsive"/>    
                    <h5 class="text-info">John Doo</h5>
                    <p class="text-muted">CEO</p>
                </li>
                <li>
                    <img src="img/tochi.jpg" class="img-circle img-responsive"/>    
                    <h5 class="text-info">John Doo</h5>
                    <p class="text-muted">CTO</p>
                </li>
                <li>
                    <img src="img/tochi.jpg" class="img-thumbnail img-responsive"/>    
                    <h5 class="text-info">John Doo</h5>
                    <p class="text-muted">CTI</p>                    
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="newsletter" class="text-center">
    <div class="container">
        <div class="row">
            <div>
                <h4>Subscribe for new letter to get fresh new info daily! </h4>                
            <form class="form-inline" role="form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="your name"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="your email" />
                </div>
                <input type="submit" class="btn btn-primary" value="Join now!"/>
            </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="embed-responsive embed-responsive-4by3">
                <!--<iframe src="video/bell.mp4" class="embed-responsive-item"> </iframe>-->
                <video class="embed-responsive-item" controls>
                    <source src="video/bell.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="img/logo1.png" class="img-responsive"/>
            </div>
            <div class="col-sm-2">
                <h5 class="text-left">The company</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Packt Publishing</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5 class="text-left">Socials</h5>
                <ul class="list-unstyled">
                    <li><a href="#">facebook</a> </li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5 class="text-left">Support</h5>
                <ul class="list-unstyled">
                <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms and Conditions </a></li>
                    <li><a href="#">Privacy policyr</a></li>
                    <li><a href="#">Help desk</a></li>
                    
                </ul>
            </div>
            <div class="col-sm-4">
                <address>
                    <strong>Company name</strong>
                    Address Line 1<br />
                    Address Line 2<br />
                    <abbr title="phone">P:</abbr> (+27)764 5678
                </address>
            </div>
        </div>
    </div>
</footer>

<script src="http://localhost/local-cdn/jquery/jquery-1.11.3.min.js"></script>
<script src="http://localhost/local-cdn/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<!--<script src="http://localhost/local-cdn/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>-->
<script src="js/main.js"> </script>

</body>
</html>