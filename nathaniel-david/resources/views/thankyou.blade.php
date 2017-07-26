<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Austin Web Development - NATHANIEL-DAVID</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/mobile.css">
  </head>
  <body class="thanks-body">
<div class="section-top">
       <nav class="navbar  navbar-inverse  navbar-fixed-top">
        <div class="container">
          <button type="button" class="navbar-toggle"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          >
          <span class="sr-only"> Toggle navigation</span>
          <span class="icon-bar"> </span>
          <span class="icon-bar"> </span>
          <span class="icon-bar"> </span>
          </button>

         <a class="navbar-brand logo" href="/">NATHANIEL-DAVID <span id="logo-sub">Web Development</span></a>
         
             <div class="navbar-collapse collapse nav-menu">
                 <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/quotes') }}"></i>Quotes</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                   <li class=""><a href="/services">Services</a></li>
                   <li> <a href="/reviews">Reviews</a> </li>
                   <li> <a href="/process">Process</a> </li>
                 </ul>
             </div>
        </div>
      </nav>
    </div>
    <div class="container col-xs-12 col-sm-12 col-md-5 col-md-offset-6 col-lg-5 col-lg-offset-6" style="margin-top: 50px;">
      <h1 style="color: #fff;">Thank You</h1><hr>
      <h2 style="color: #fff;">I will review your submitted information and you can expect to hear from me within a day!</h2>
    </div>
      <div class="navbar  navbar-inverse navbar-fixed-bottom"> 
       <div class="container">
         <div class="footer-p">
          <p> email: <a href="mailto:me@nathaniel-david.tech">me@nathaniel-david.tech</a> | Nathaniel-David Web Development | Austin Texas | 210 367 3596</p>
         </div>
            
       </div>
     </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slider.js"></script>
  </body>
</html>