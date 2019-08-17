<!DOCTYPE html>
<html>
<head lang="en">
    <title>Bootstrap Landing Page</title>
    <link rel="stylesheet" href="http://localhost/local-cdn/bootstrap-3.3.4-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <meta charset="UTF-8" />
    <meta name="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<header>
    <div class="container">
        <div class="row">
        <!--row 1 -->
            <a href="#Comany" class="brand pull-left">Company Name</a>
        
            <ul class="list-inline list-unstyled pull-right"> 
                <li><a href="#about"> About </a></li>
                <li><a href="#features"> Features </a></li>
                <li><a href="#pricing"> Pricing </a></li>
                <li><a href="#contact"> Contact </a></li>
            </ul>
        </div>
    </div>
</header>
<section id="contact" class="container" >
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal" role="form" id="form" action="process.php" method="get">
                <div class="form-group">
                    <lable form="name" class="control-label col-sm-2">Name</lable>
                    <div class="col-sm-10">
                        <input type="text" id="name" placeholder="your full name" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <lable for="email" class="control-label col-sm-2">Email</lable>
                    <div class="col-sm-10">
                        <input type="email" id="email" placeholder="enter your email" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="control-label col-sm-2">Message</label>
                    <div class="col-sm-10">
                        <textarea rows="5" id="message" placeholder="enter your message" class="form-control"> </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div>
                            <lable class="checkbox"><input type="checkbox" /> I want to subscribe to recieve updates from the copmany </lable>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-lg btn-success" />
                    </div>   
                </div>
            </form> 
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
<script src="js/main.js"> </script>
</body>
</html>