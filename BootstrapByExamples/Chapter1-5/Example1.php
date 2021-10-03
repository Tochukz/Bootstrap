<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Page Design</title>
    
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <!-- row 1 -->
       <div class="row">
            <header class="col-md-12">
                <h1> A simple landing page example</h1>
                <h2 class="h4"> Sub title for support</h2>
                <a href="#" class="btn btn-default btn-lg" role="button">Link</a>
            </header>
       </div>
    </div>
</div>
<div class="container">
    <!-- row 2 -->
   <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <h3>Some text <small>Secondary text </small></h3>
        </div>
        <div class="col-md-4">
            <h3>
                Add to favourite 
                <small><kbd> <kbd>ctrl</kbd> + <kbd>d</kbd> </kbd> </small>
            </h3>
        </div>
   </div>
    <!-- row 3 -->
   <div class="row">
        <div class="col-md-4">
            <pre>
&lt;script&gt;
    return document.getElementById('id');
&lt;/script&gt;
            </pre>
        </div>
         <div class="col-md-8">
            <img src="/img/websta.jpg" class="img-responsive"/>
        </div>
   </div>
    <!-- row 4 -->
   <div class="row">
        <div class="col-md-3">
            <img src="/img/play.png" class="img-responsive"/>
        </div>
        <div class="col-md-6">
            <blockquote> 
                <p>I am goinng to make thousand of Rand writing code for the web, front end and back end...</p>
                <footer> <cite title="source title">Tochukwu Nwachukwu</cite> </footer>
            </blockquote>
        </div>
        <div class="col-md-3">
            <img src="/img/logo1.png" class="img-responsive"/>
        </div>
   </div>
    <!-- row 5 -->
   <div class="row">
        <div class="col-md-3">
            <p class="text-left"><code> &lt; Left &gt; </code> </p>
        </div>
         <div class="col-md-3">
            <p class="text-center">Center </p>
        </div>
         <div class="col-md-3">
            <p class="text-justify">Justify </p>
        </div>
        <div class="col-md-3">
            <p class="text-right">Right </p>
        </div>
   </div>
    <!-- row 6 -->
   <div class="row">
        <div class="col-md-3">
            <h3> Text Lowercase </h3>
            <p class="text-lowercase">Tochukwu Programmer prgramming in Javascript, PHP and Java, building websites, web applications and mobile app
            getting clients making money very busy with job, making lot and lots of money living happily married</p>
        </div>
         <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h3>Text Uppercase</h3>
                    <p class="text-uppercase"> Tochukwu Geophysicist knowing seismic and resistivity earnied masters degree and Phd doing so very fine. 
                    Travelling around the world working in various places in africa nad over sees</p>
                </div>
                <div class="col-md-6">
                    <h3>Text Capitalize</h3>
                    <p class="text-capitalize"> tochukwu pianist playing recitals at church, a virtuso like marvin ghostien, playing blues site reading and
                     even playing off heart, wonderful</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h3>Strong and Emphasis</h3>
            <p> <strong>Strong and energetic</strong> and <em> emphasis and attention to details</em></p>
        </div>
   </div>
    <!-- row 7 -->
    <div class="row">
        <div class="col-md-offset-1 col-md-10 ">
        <table class="table table-bordered table-striped table-responsive" role="table">
            <thead>
                <tr>
                    <th class="success"> <h4 class=" text-center">Free plan</h4></th>
                    <th class="info"><h4 class=" text-center">Standard plan</h4> </th>
                    <th class="danger"><h4 class=" text-center">Premium plan</h4></th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td><a href="#" class="btn btn-success btn-block" role="button">Puchase </a></td>
                    <td><a href="#" class="btn btn-info btn-block" role="button">Purchase </a></td>
                    <td><a href="#" class="btn btn-danger btn-block" role="button">Purchase </a></td>
                </tr>

            </tfoot>
            <tbody>
                <tr>
                    <td> <h3 class=" text-center">$0</h3> </td>
                    <td><h3 class=" text-center">$99</h3></td>
                    <td><h3 class=" text-center">$999</h3></td>
                </tr>
                <tr>
                    <td>Lorel ipsum</td>
                    <td>Lorel ipsum</td>
                    <td>Lorel ipsum</td>
                </tr>
                <tr>
                    <td>Lorel ipsum</td>
                    <td>Lorel ipsum</td>
                    <td>Lorel ipsum</td>
                </tr>
                <tr>
                    <td>Lorel ipsum</td>
                    <td>Lorel ipsum</td>
                    <td>Lorel ipsum</td>
                </tr>
                <tr>
                    <td>Lorel ipsum</td>
                    <td>Lorel ipsum</td>
                    <td>Lorel ipsum</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <!--row 8 -->
    <div class="row">
        <div class="pull-left">
            first div
        </div>
        <div class="pull-right">
            second div
        </div>
    </div>
    <!-- row 9 -->
   <footer class="row jumbotron">
        <div class="col-md-2">
            <img src="/img/tw.png" class="img-responsive"/>
        </div>
        <div class="col-md-7">
            <ul class="list-unstyled list-inline">
                <li><a href="#"> Documentation</a> </li>
                <li><a href="#">Bootstrap</a> </li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Contact </a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <address>
                MyWebstation <br />
                Address 1 <br />
                Address 2 <br />
                <abbr> P</abbr> +27 63 364 1007
            </address>
        </div>
   </footer>
   
</div>
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>