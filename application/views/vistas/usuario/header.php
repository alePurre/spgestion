<!DOCTYPE html>
<head>
    
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
        var fila=0;
        arreglo = new array();
        var cols= 2;
        
       // for (var i = 0; i<cols; i++){
        //    arreglo[i]=[];
       // }
        function agregarLinea(id, desc){
               
                var col = 0;
             
                var tabla = '<tr><td name="'+id+'">'+id+'</td><td name="'+desc+'">'+desc+'</td><td><input type="text" name="'+id+'" required="required" value=0 style="width:70px;"></td><td>Editar/Eliminar</td></tr>';
                $("#agregar").append(tabla);
                //Cargo un arreglo bidimensional
                arreglo[fila][col] = id;
                col = col + 1;
                arreglo[fila][col]= desc;
                fila = fila + 1 ;
                 console.log(arreglo);
        };  
              
            
            
        </script>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>SPgestion</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <!--<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">-->
    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/css/estiloSPgestion.css'); ?>">
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
                    <li class="active" ><a href="<?php echo base_url() ?>ctrUsuario/pedidosRealizados">Mis pedidos realizados</a></li>
                    <li ><a href="<?php echo base_url() ?>ctrUsuario/nuevoPedido">Nuevo Pedido</a></li>
                    <li><a href="<?php echo base_url() ?>ctrUsuario/pedidosRetirados">Pedidos Retirados</a></li>
                                   
                    <li><a class="btn" href="<?php echo base_url(''); ?>">Salir</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->
    <div class="contenedorUsuario">