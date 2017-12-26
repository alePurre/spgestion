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
            <li class="active"><a href="../admin/aprobar-pago_Admin.php">Pagos a Proveedor</a></li>
            <li><a href="../admin/stock_Admin.php">Stock</a></li>
            <li><a href="../admin/pedido-proveedor_Admin.php">Pedidos a Proveedor</a></li>
            <li><a href="../admin/productos_Admin.php">Productos</a></li> 
            <li><a href="../admin/lista-proveedores_Admin.php">Proveedores</a></li> 
        </ul>
 <!-- ................ FIN DE Encabezado.................  -->

<div class="container">
    <h3>Aprobar pago a proveedor: </h3>
    <br>
    <h4><b> Proveedor:</b><select>
        <option value="volvo">Jeanmco</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
        </select> </h4>
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="25%" style="text-align: center;">
                    Nº de Factura  
                </th>
                <th width="30%" style="text-align: center;" >
                    Fecha
                </th>
                <th width="30%" style="text-align: center;" >
                    Monto
                </th>
                <th width="15%" style="text-align: center;">
                    Seleccionar
                </th>
            </tr>
        </thead>
        <tr>
            <td>
                235490
            </td>
            <td>
               16/10/2016
            </td>
            <td>
                $12850
            </td>
            <td>
                <input type="checkbox" name="vehicle" style="transform: scale(1.5); margin-left: 48%" value="Bike">
            </td>
            
        </tr>
        <tr>
            <td>
                235490
            </td>
            <td>
               25/09/2016
            </td>
            <td>
               $10500
            </td>
            <td>
                <input type="checkbox" name="vehicle" style="transform: scale(1.5); margin-left: 48%" value="Bike">
            </td>
        </tr>
        <tr>
            <td>
                12456
            </td>
            <td>
               15/09/2016
            </td>
            <td>
                $20000
            </td>
            <td>
                <input type="checkbox" name="vehicle" style="transform: scale(1.5); margin-left: 48%" value="Bike">
            </td>
        </tr>
         <tr>
            <td>
                65378
            </td>
            <td>
               12/08/2016
            </td>
            <td>
                $12300
            </td>
            <td>
                <input type="checkbox" name="vehicle" style="transform: scale(1.5); margin-left: 48%" value="Bike">
            </td>
        </tr>
    </table>
    <table>
       <tr>
            <td><input type="button" class="btn btn-primary" value="Pagar"></td>
            <td><input type="button" class="btn btn-primary" value="Cancelar"></td>
        </tr>
    </table>
</div>
         
         
</body>
