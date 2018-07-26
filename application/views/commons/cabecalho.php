<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('resources/vendor/bootstrap/css/bootstrap.min.css');?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('resources/vendor/font-awesome/css/font-awesome.min.css');?>">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/fontastic.css');?>">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/grasp_mobile_progress_circle-1.0.0.min.css');?>">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url('resources/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css');?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/style.blue.css');?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/custom.css');?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('resources/img/favicon.ico');?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url('resources/img/zwz.jpg');?>" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Zé Wagner</h2><span>Excurções, Transporte e Turismo</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>Z</strong><strong class="text-primary">W</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?php echo base_url();?>"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="<?php echo base_url('welcome/teste2');?>"> <i class="icon-form"></i>Cadastrar Cliente</a></li>
            <li><a href="<?php echo base_url('welcome/teste3');?>"> <i class="icon-form"></i>Listar Clientes</a></li>
            <li><a href="<?php echo base_url('welcome/teste4');?>"> <i class="icon-form"></i>Gerar Carnês</a></li>
            <li><a href="<?php echo base_url('welcome/login');?>"> <i class="icon-interface-windows"></i>Login page                             </a></li>
            </ul>
        </div>
        
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?php echo base_url();?>" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary"></strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
               
                <!-- Log out-->
                <li class="nav-item"><a href="<?php echo base_url('welcome/logout');?>" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-in"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    