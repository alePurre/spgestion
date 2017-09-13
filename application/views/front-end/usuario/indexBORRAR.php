<!DOCTYPE html><!--index de stock-controlador-->
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
<div="container">
<h1> STOCK </h1>
	<form method="post" action="<?php echo base_url() ?>stock_controlador/buscar/">
	<a class="btn btn-success" href="<?php echo base_url() ?>stock_controlador/guardar"> Agregar producto </a> 
	<a class="btn btn-success" href="<?php echo base_url() ?>stock_controlador/hacer_ping"> Realizar Pedido </a>
	<input type="text" name="detalle" value="" style="height:35px;">
	<input type="submit" class="btn btn-success" value="Buscar" />
	</form> 
<?php if (count($stock_controlador)): ?>
 <table class="table tableborder">
    <thead>
       <tr>
          <th> Detalle </th>
		  <th> Stock </th>
          <th> cantMax </th>
          <th> cantMin </th>
		  <th> Accion </th>
       </tr>
    </thead>
    <tbody>
       <?php foreach($stock_controlador as $item): ?>
          <tr>
             <td style="width: 25%"> <?php echo $item->detalle ?> </td>
			 <td style="width: 25%"> <?php echo $item->stock ?> </td>
             <td style="width: 25%"> <?php echo $item->cantMax ?> </td>
			 <td style="width: 25%"> <?php echo $item->cantMin ?> </td>
             <td>  <a class="btn btn-info" href="<?php echo base_url() ?>stock_controlador/ver/<?php echo $item->idProducto ?>"> Ver </a> </td>
             <td>  <a class="btn btn-info" href="<?php echo base_url() ?>stock_controlador/guardar/<?php echo $item->idProducto ?>"> Editar </a> </td>
             <td>  <a class="btn btn-danger eliminar_informe" href="<?php echo base_url() ?>stock_controlador/eliminar/<?php echo $item->idProducto ?>"> Eliminar </a> </td>
          </tr>
       <?php endforeach; ?>
    </tbody>
 </table>
<?php else: ?>
 <p> No hay productos cargados </p>
<?php endif; ?>
</div>
<script type="text/javascript">
   $(".eliminar_informe").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este producto?")) {
            location.href = href;
         }
      });
   });
   

   
</script>