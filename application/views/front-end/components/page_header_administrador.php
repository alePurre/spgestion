<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title><?php echo $title; ?></title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap-theme.css'); ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo base_url('assets/front-end/css/custom.css'); ?>"> 

    <!-- Carga estilos grocery_CRUD solo si llega la variable css_files -->
    <?php if (isset($css_files)): ?>
    <?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php endif; ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/front-end/js/html5shiv.js"></script>
    <script src="assets/front-end/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
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
                    <h1>Examin-Ar</h1>
                    <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url('assets/front-end/img/logo.png'); ?>" alt="logoExaminar" />
                    </a>
                </a>
                
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="<?php echo base_url('admin/Administrador'); ?>">Inicio</a></li>
                    <li id="promociones"><a href="<?php echo base_url('admin/Promociones/gestion'); ?>">Gestion Promociones</a></li>
                    <li id="preguntas"><a href="<?php echo base_url('admin/Preguntas'); ?>">Gestion Preguntas</a></li>                  
                    <li id="contacto"><a href="<?php echo base_url('admin/Contactos'); ?>">Ver Contactos</a></li>    
                    <li id="temas"><a href="<?php echo base_url('admin/Temas'); ?>">Gestion Temas</a></li>
                    <li id="unidades"><a href="<?php echo base_url('admin/Unidades'); ?>">Gestion Unidades</a></li>
                    <li id="Usuarios"><a href="<?php echo base_url('admin/Usuarios'); ?>">ABM Usuarios</a></li>
                    <li><a class="btn" href="<?php echo base_url('admin/Logout'); ?>">Salir</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->