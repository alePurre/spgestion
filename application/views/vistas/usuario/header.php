<!DOCTYPE html>
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
                    <li class="active" ><a href="<?php echo base_url() ?>usuario.php">Mis pedidos pendientes</a></li>
                    <li ><a href="nuevo_pedido.php">Nuevo Pedido</a></li>
                    <li><a href="pedidos_retirados.php">Pedidos Retirados</a></li>
                                   
                    <li><a class="btn" href="<?php echo base_url(''); ?>">Salir</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->
    <div class="container">