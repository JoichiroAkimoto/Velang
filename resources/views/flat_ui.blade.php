<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
   <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Loading Bootstrap -->
   <link href="css/bootstrap.css" rel="stylesheet"><!-- Loading Bootstrap -->
    <link href="css/flat-ui.min.css" rel="stylesheet"><!-- Loading Flat UI -->
    <link href="css/starter-template.css" rel="stylesheet"><!--Bootstrap theme(Starter)-->
    <link href="css/velang.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
 
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Velang</a>
  </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class='active'><a href="#">Home</a></li>
                <li><a href="#">HowToUse</a></li>
                <li><a href="#">SignUp</a></li>
                <li><a href="#">Login</a></li>
            </ul>
  </div><!--/.nav-collapse -->
  </div>
</nav>
 <!-- <img class="logo" src="img/vege.jpg" alt="vege">
<div class="container"> -->

@yield('content')
<!-- </div>/.container -->
<hr noshade>
<div class="copyright">
          Copyright (C) 2019  Joichiro Akimoto. All Rights Reserved.
</div>
 
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/video.js"></script>
<script src="js/flat-ui.min.js"></script>
 
<script src="js/prettify.js"></script>
<script src="js/application.js"></script>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>