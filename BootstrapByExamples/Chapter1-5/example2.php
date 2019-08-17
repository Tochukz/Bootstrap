<!DOCTYPE html>
<html>
<head lang="en">
    <title>Bootstrap By Example </title>
    <link rel="stylesheet" type="text/css" href="http://localhost/local-cdn/bootstrap-3.3.4-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <meta name="X-UA-Compatible" content="IE=egde" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
</head>
<body>
<!--Header row -->
<header class="jumbotron">
    <div class="container">
        <h1>Bootstrap by Examples </h1>
        <h2 class="h4">Learning Bootstrap professional </h2>
        <a href="#" class="btn btn-default btn-lg" role="btn">Link </a>
    </div>
</header>
<div class="container">

    <div class="row">
    <!--row 2 -->
        <div class="col-md-offset-4 col-md-4 col-sm-6 col-lg-push-4">
            <h3>Some text <span class="small">Secondary text </span></h3>
        </div>
        <div class="col-md-4 col-sm-6 col-lg-pull-4">
            <h3>Add to favourite <small> <kbd class="nowrap">ctrl + d </kbd></small></h3>
        </div>
    </div>

    <div class="row">
     <!-- row 3 -->
        <div class="col-md-3 col-xs-5">
            <pre>
&lt;script&gt;
function _(id){
    return document.getElementById(id);
}
&lt;/script&gt;

            </pre>
        </div>
        <div class="col-md-9 col-xs-7">
            <img src="img/websta.jpg" class="img-responsive hidden-xs"/>
            <img src="img/mobile.jpg" class="img-responsive visible-xs" />
        </div>
    </div>
    <div class="row">
    <!-- row 4 -->
        <div class="col-md-3 hidden-xs col-sm-3" >
            <img src="img/play.png" class="img-responsive" />

        </div>
        <div class="col-md-6 col-xs-offset-1 col-xs-11 col-sm-6 col-sm-offset-0">
            <blockquote>
                <p>I am going to make a lot of money from web technology this year 2017</p>
                <footer><cite title="author"> Tochukwu Nwachukwu</cite></footer>
            </blockquote>
             
        </div>
        <div class="col-md-3 col-xs-7 col-sm-3">
            <img src="img/logo1.png" class="img-responsive"/>
        </div>
        <div class="col-xs-5 visible-xs hidden-sm hidden-md hidden-large" >
            <img src="img/play.png" class="img-responsive" />

        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <p class="text-left"> <code>&lt; Left &gt;</code> </p>
        </div>
        <div class="col-md-3">
            <p class="text-center">Center</p>
        </div>
        <div class="col-md-3">
            <p class="justify">Justify </p>
        </div>
        <div class="col-md-3">
            <p class="right">Right </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h3> Lowercase</h3>
            <p class="text-lowercase"> Tochukwu Nwachukwu is working pretty had to be a tech savy developer. He will be a profecent front end and back end developer. 
            After then, he will move on to become a Mobile applicarion developer for the Andriod</p>
        </div>
        <div class="col-md-6">
            <div clss="row">
                <div class="col-md-6">
                    <h3> Uppercase</h3>
                    <p class="text-uppercase">Tochukwu Nwachukwu is going to get a Job by October. Developer job. make some money and lead a good life. 
                    perhaps or not, return home for christmas. But this year will most certianly end on a good note</p>

                </div>
                <div class="col-md-6">
                    <h3>Capitalize</h3>
                    <p class="text-capitalize">I will be a Geophysicist, wed developer, mobile application developer, panist father, husband etc.</p>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h3> Strong and Emphasis</h3>
            <p>This is a <strong>strong</strong> text and the other is an <em>emphasis</em>.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10 ">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="success">
                            <h4 class="text-center"> Free plan</h4>
                        </th>
                        <th class="info">
                            <h4 class="text-center"> Standard plan</h4>
                        </th>
                        <th class="danger">
                            <h4 class="text-center">Premium plan</h4>
                        </th>

                    </tr>

                </thead>
                <tfoot>
                    <tr>
                        <td>
                            <a href="#" class="btn btn-success btn-block" role="button"/>Purchase</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-block" role="button"/>Purchase </a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-block" role="button"/>Purchase</a> 
                        </td>
                    </tr>

                </tfoot>
                <tbody>
                    <tr>
                        <td> 
                            <h5 class="text-center">$0 </h5>
                        </td>
                        <td> 
                            <h5 class="text-center">$99</h5>
                        </td>
                        <td>
                            <h5 class="text-center"> $999 </h5>
                        </td>
                    </tr>
                    <tr>
                        <td> Lourel Ipsum </td>
                        <td> Lourel Ipsum  </td>
                        <td> Lourel Ipsum </td>
                    </tr>
                    <tr>
                        <td> Lourel Ipsum </td>
                        <td> Lourel Ipsum  </td>
                        <td> Lourel Ipsum </td>
                    </tr>
                    <tr>
                        <td> Lourel Ipsum </td>
                        <td> Lourel Ipsum  </td>
                        <td> Lourel Ipsum </td>
                    </tr>
                    <tr>
                        <td> Lourel Ipsum </td>
                        <td> Lourel Ipsum  </td>
                        <td> Lourel Ipsum </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="pull-left">Shift Left </div>
        <div class="pull-right">Shift Rifht </div>
    </div>
    <footer class="row jumbotron">
        <div class="col-md-2">
            <img src="img/tw.png" class="img-responsive"/>
        </div>
        <div class="col-md-7">
            <ul class="list-unstyled list-inline">
                <li><a href="#">Document</a> </li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Contact</a> </li>
            </ul>
        </div>
        <div class="col-md-3">
            <address>
                <strong>MyWebstation</strong> <br />
                8th Street Vrededorp,<br />
                Johannesburg<br />
            </address>
        </div>
    </footer>
</div>

<script src="img/http://localhost/local-cdn/jquery/jquery-1.11.3.min.js"></script>
<script src="img/http://localhost/local-cdn/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>