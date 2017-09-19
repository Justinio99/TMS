<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?> | Bbc MVC</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-Awesome-4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <script src="/js/jquery-3.2.1.min.js"></script>

    <script src="/js/header.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="c-nav-bar-centerd">

  <button class="hamburger hamburger--spring" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  <img id="logo" src="images/logoTMS.png">
  <h1><?= $heading ?></h1>




</div>
<div class="dropdown-logo">
  <i class="fa fa-user-circle loginButton" aria-hidden="true"></i>
  <div class="dropdown-content">
      <a><p><?= $user ?></p></a>
    <a href="#">Log out</a>


  </div>
</div>

<div class="dropdown">
<ul>
<div class"submenu "><a href="/Home">Home</a></div>  <!--  Hier alle Webseiten eintragen -->
  <div class"submenu"><a href="/Tasks">Tasks</a></div>
  <div class"submenu"><a href="/TaskErfassen">Task erfassen</a></div>
  <div class"submenu"><a href="benutzererfassen">Benutzer erfassen</a></div>
</ul>

</div>


    <div class="container">
