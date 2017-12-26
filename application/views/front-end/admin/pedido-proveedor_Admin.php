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
           <li><a href="../admin/stock_Admin.php">Stock</a></li>
          <li class="active"><a href="../admin/pedido-proveedor_Admin.php">Pedidos a Proveedor</a></li>
          <li><a href="../admin/productos_Admin.php">Productos</a></li>   
          <li><a href="../admin/lista-proveedores_Admin.php">Proveedores</a></li> 
        </ul>
 <!-- ................ FIN DE Encabezado.................  -->
         <div>
           <form action="hacerPedidoUsuario.php" methos="post">  
            <div>
             <table>
                 <tr height="80px">
                     <td width="100px"><label><h3>Proveedor:</h3> </label></td>
                     <td><h4><select >
                           <option value="volvo">Seleccione proveedor</option>
                           <option value="saab">Saab</option>
                           <option value="mercedes">Mercedes</option>
                           <option value="audi">Audi</option>
                         </select></td></h4>
                 </tr>
             </table>
            </div>
            <div> 
                <h3>Agregar producto al pedido:</h3>
                <br> 
                <table>
                     <thead>
                    <tr>
                        <th width="250px" style="text-align: center;">
                            Codigo  
                        </th>
                        <th width="250" style="text-align: center;">
                            Producto
                        </th>
                        <th width="80" style="text-align: center;">
                            Cantidad
                        </th>
                        <th width="80" style="text-align: center;">
                            Stock Actual
                        </th>
                        <th width="10px" style="text-align: center;">
                            Agregar
                        </th>
                    </tr>
                </thead>
                 <tr>
                    <td width="200px" style="text-align: center;"> 
                        <select>
                           <option value="volvo">Seleccione codigo producto</option>
                           <option value="saab">Saab</option>
                           <option value="mercedes">Mercedes</option>
                           <option value="audi">Audi</option>
                         </select>
                    </td>
                    <td style="text-align: center;"> 
                        <select>
                         <option value="volvo">Seleccione producto</option>
                         <option value="saab">Saab</option>
                         <option value="mercedes">Mercedes</option>
                         <option value="audi">Audi</option>
                       </select>
                     </td>
                 <td style="text-align: center;">
                        <input type="text" value="0" style="width:40px">
                    </td>
                    <td style="text-align: center;">
                        <input type="text" value="0" style="width:40px">
                    </td>
                    <td style="text-align: center;">
                       <a href="editar_pedido.php"><span style=" width: 20px" class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                      
                    </td>
                </tr>
            </table>
            </div>    
              
               <div class="tabla">
               <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="80" style="text-align: center;">
                            Codigo  
                        </th>
                        <th width="250" style="text-align: center;" >
                            Producto
                        </th>
                        <th width="80" style="text-align: center;" >
                            Cantidad
                        </th>
                        <th width="80" style="text-align: center;">
                            Stock Actual
                        </th>
                        <th width="10px" style="text-align: center;">
                            Editar/Eliminar
                        </th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        235490
                    </td>
                    <td>
                       Resma hoja A4
                    </td>
                    <td>
                        2
                    </td>
                    <td>
                        45
                    </td>
                    <td>
                       <a href="editar_pedido.php"><span style=" width: 20px" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                       <a href="eliminar_pedido.php"><span style=" width: 20px" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </td>
                </tr>
            </table>
            <table>
                 <tr height="60px">
                     <td align="center" width="100">
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                     </td>
                     <td align="center" width="100">
                         <a href="usuario.php"> <input type="button" class="btn btn-primary" value="Cancelar"></a>
                     </td>
                 </tr>
            </table>
         </div>
        </div> 
    </body>
</html>