<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>LUCIDEZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap-responsive.css" />
        <!--<link rel="stylesheet" href="css/css.css" />-->
        <link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" />
        <script src="Scripts/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url')?>/Scripts/modernizr-2.5.3.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url')?>/Scripts/bootstrap.js"></script>
        <script src="<?php bloginfo('template_url')?>/Scripts/bootstrap-transition.js"></script>
        <script src="<?php bloginfo('template_url')?>/Scripts/bootstrap-collapse.js"></script>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
      <div class="container">
          
    <div class="row">
        <div class="span12">
             <!-- HEADER
    ================================================== -->
            <header class="margen">
             <div class="row-fluid">
                 <!-- CLIMA-->
        <div class="span1">
             <img src="<?php bloginfo('template_url')?>/img/clima/nublado.jpg" /><br />
           <span>19°C</span>
        </div>
                 <!-- LOGOTIPO-->
          <div class="span5 offset3">
            <img class="logo" src="<?php bloginfo('template_url')?>/img/logo.jpg" />
        </div>
                 <!-- FECHA-->
         <div class="span3">
        <div class="row-fluid">
            <div class="span12">
            <span>MARTES, 20 DE MAYO | 12:21:37 PM</span>
            <input class="span11" type="search" placeholder="Buscar" />
             </div></div>
            <div class="clearfix"></div>
            <div class="row-fluid">
             <div class="derecha rsocial">
            <a href="#"><img src="<?php bloginfo('template_url')?>/img/twi.jpg" /></a>
            <a href="#"><img src="<?php bloginfo('template_url')?>/img/face.jpg" /></a>
             </div>
            <div class="clearfix"></div>
        </div></div>
      
      </div></header>

    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">PORTADA</a></li>
                <li><a href="#">Política</a></li>
                <li><a href="#">Economía</a></li>
                <li><a href="#">Nacional</a></li>
                <li><a href="#">Mundo</a></li>
                <li><a href="#">Deporte</a></li>
                <li><a href="#">Cultural</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div>
          <!-- /.navbar-wrapper -->
      </div>
        </div>