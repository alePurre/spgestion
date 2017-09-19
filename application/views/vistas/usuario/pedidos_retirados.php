<!DOCTYPE html>
<html>
 <!-- ................Encabezado.................  -->
    <head>
        <meta charset="UTF-8">
        <title>SP Gestion</title>
        <link type="text/css" href="../css/margenes.css" rel="stylesheet" />
        <link type="text/css" href="../css/bootstrap.css" rel="stylesheet" />
        <link type="text/css" href="../fonts/glyphicons-halflings-regular.eot" rel="stylesheet" />
    </head>
    <body>
         <div class="container">
            <div style="background-color: #819FF7; height:130px">
                <p with="30"> 
                    <font color="white" size="13%"> Sistema de Inventario</font><br>
                    <font color="white" size="5%"> Servicio Penitenciario</font>
                 </p>

            </div>
            
      
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Gonzalo Herrera</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Usuario <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Administración</a></li>
        <li><a href="#">Deposito</a></li>
        <li><a href="#">Recursos Humano</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">SALIR</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <ul class="nav nav-tabs">
            <li ><a href="usuario.php">Pedidos realizados</a></li>
            <li ><a href="nuevo_pedido.php">Nuevo Pedido</a></li>
            <li class="active"><a href="pedidos_retirados.php">Pedidos Retirados</a></li>
            
        </ul>
<!-- ................Fin Encabezado.................  -->
        <div class="tabla">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="80" align="center">
                            Fecha
                        </th>
                        <th width="250" align="center">
                            Destino u Obra
                        </th>
                        <th width="10px" align="center">
                            Ver/Editar/Eliminar
                        </th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        29/02/2016
                    </td>
                    <td>
                       Arreglo computadoras
                    </td>
                    <td>
                       <a href="ver_pedido.php"><span  style=" width: 20px" class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                       <a href="eliminar_pedido.php"><span style=" width: 20px" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </td>
                </tr>
            </table>
        </div>
      </div>
    </body>
</html>
