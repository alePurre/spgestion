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
           <li class="active"><a href="../admin/stock_Admin.php">Stock</a></li>
           <li><a href="../admin/pedido-proveedor_Admin.php">Pedidos a Proveedor</a></li>
           <li><a href="../admin/productos_Admin.php">Productos</a></li> 
           <li><a href="../admin/lista-proveedores_Admin.php">Proveedores</a></li> 
            
        </ul>
 <!-- ................ FIN DE Encabezado.................  -->
<div class="container">
    <h3>Stock por producto: <select>
                            <option value="volvo">Articulos Librería</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                          </select> </h3>
   
    <br>
    <h3>Imprimir <a href="editar_pedido.php"><span style=" width: 20px" class="glyphicon glyphicon-print" aria-hidden="true"></span>
           
    </h3>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="80" style="text-align: center;">
                    Codigo  
                </th>
                <th width="550" style="text-align: center;" >
                    Producto
                </th>
                <th width="150" style="text-align: center;" >
                    Stock
                </th>
                <th width="150" style="text-align: center;">
                    Cantidad Mínima
                </th>
            </tr>
        </thead>
        <tr>
            <td>
                235490
            </td>
            <td>
               Resma de Hojas Oficio
            </td>
            <td>
                33
            </td>
            <td>
                <input type="text" value="2" style="width: 40px">
            </td>
            
        </tr>
        <tr>
            <td>
                235490
            </td>
            <td>
               Resma de Hojas A4
            </td>
            <td>
                45
            </td>
            <td>
                <input type="text" value="2" style="width: 40px">
            </td>
        </tr>
        <tr>
            <td>
                12456
            </td>
            <td>
               Birome azul trazo fino
            </td>
            <td>
                40
            </td>
            <td>
                <input type="text" value="2" style="width: 40px">
            </td>
        </tr>
         <tr>
            <td>
                65378
            </td>
            <td>
               Cartulina amarilla A4
            </td>
            <td>
                5
            </td>
            <td>
                <input type="text" value="1" style="width: 40px">
            </td>
        </tr>
    </table>
   
</div>
         
         
</body>
