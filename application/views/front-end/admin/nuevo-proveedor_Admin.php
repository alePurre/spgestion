<html>
    <head>
        <meta charset="UTF-8">
          <head>
        <meta charset="UTF-8">
 <!-- ................Encabezado.................  -->        
        <title>SP Gestion</title>
        <link type="text/css" href="../css/margenes.css" rel="stylesheet" />
        <link type="text/css" href="../css/bootstrap.css" rel="stylesheet" />
        <link type="text/css" href="../fonts/glyphicons-halflings-regular.eot" rel="stylesheet" />
    </head>
    <body>
         <div class="container">
            <div style="background-color: #819FF7; height:130px">
                <p style="display: block;
                          margin-top: 1em;
                          margin-bottom: 1em;
                          margin-left: 100px;
                          margin-right: 200px;" with="30"> 
                    <font color="white" size="13%"> Sistema de Inventario</font><br>
                    <font color="white" size="5%"> Servicio Penitenciario</font>
                 </p>

            </div>
            
      
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mariano Irala</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Usuario <span class="sr-only">(current)</span></a></li>
        <li class="active"> <a href="#">Administración</a></li>
        <li ><a href="#">Deposito</a></li>
        <li><a href="#">Recursos Humano</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.html">SALIR</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <ul class="nav nav-tabs">
           <li><a href="../admin/aprobar-pago_Admin.php">Pagos a Proveedor</a></li>
           <li ><a href="../admin/stock_Admin.php">Stock</a></li>
           <li><a href="../admin/pedido-proveedor_Admin.php">Pedidos a Proveedor</a></li>
           <li><a href="../admin/productos_Admin.php">Productos</a></li> 
           <li class="active"><a href="../admin/lista-proveedores_Admin.php">Proveedores</a></li> 
            
        </ul>
 <!-- ................ FIN DE Encabezado.................  -->
 <div style="margin-left:50px; margin-top:20px;">
         <h1>Nuevo Proveedor</h1>
         <br>
            <table class="table">
                <tr width="20%">
                    <td width="20%">
                        Nombre:
                    </td>
                    <td width="50px">
                        <input type="text" style="width:200px;">
                    </td>
                </tr>
                <tr width="20%">
                    <td width="20%">
                        Dirección:
                    </td>
                    <td width="50px">
                        <input type="text" style="width:200px;">
                    </td>
                </tr>
                <tr width="20%">
                    <td width="20%">
                        Localidad:
                    </td>
                    <td width="50px">
                        <input type="text" style="width:200px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        Provincia
                    </td>
                    <td>
                       <input type="text" style="width:200px;">
                    </td>
                </tr>
                <tr width="20%">
                    <td width="20%">
                        Teléfono
                    </td>
                    <td width="50px">
                        <input type="text" style="width:200px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../admin/lista-proveedores_Admin.php" class="btn btn-primary">Aceptar</a>
                        <a href="../admin/lista-proveedores_Admin.php" class="btn btn-primary">Cancelar</a>
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
        </div>
      </div>
    </body>
</html>
