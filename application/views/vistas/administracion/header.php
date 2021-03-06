<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>SPgestion</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap-theme.css'); ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo base_url('assets/front-end/css/custom.css'); ?>"> 


</head>

<body class="home" style="margin-top:100px;">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse miNavBar navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand">
                    <h1>SPgestión</h1>
                    <a href="<?php echo base_url(); ?>">
                        <!--<img src="<?php echo base_url('assets/front-end/img/logo.jpg'); ?>" alt="logoExaminar" />-->
                    </a>
                </a>
                
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="<?php echo base_url() ?>stock_controlador">Stock</a></li>
                    <li id="empresa"><a href="<?php echo base_url('application/controllers/usuarios_controller'); ?>">Faltantes</a></li>
                    <li id="promociones"><a href="<?php echo base_url('promociones'); ?>">Ordenes de Provisión</a></li>                  
                    <li id="contacto"><a href="<?php echo base_url('contacto'); ?>">Pedido a depósito</a></li>                    
                    <li><a class="btn" href="<?php echo base_url(''); ?>">Salir</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->
    <div class="container">