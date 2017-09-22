<!DOCTYPE html>
           <form action="hacerPedidoUsuario.php" methos="post">  
            <div>
             <table>
                 <tr height="80px">
                     <td width="120px"><label>Destino u Obra: </label></td>
                     <td><input type="text" class="form-control" name="nomArticulo"></td>
                 </tr>
                 <tr>
                     <td><label>Descripción:</label></td>
                     <td><input type="text" class="form-control" name="cantArticulo" style="width:200px;height:100px"></td>
                 </tr>
             </table>
            </div>
            <div> 
                <br>  
                <h3>Agregar producto al pedido:</h3>
                <br>    
                <h4>Filtrar búsqueda:</h4>
                <br> 
                <div >
                     <label>--</lavel>
                    <select class="caja" placeholder="Seleccione un rubro">
                        <option value="volvo">Seleccione el Rubro</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                    <form>
                        <label>--</lavel>
                        <input type="text" name="detalle" placeholder="Códifgo de producto"> <label>--</lavel>
                        <input type="text" name="detalle" placeholder="Nombre del producto"> <label>--</lavel>
                        <input type="submit" class="btn btn-info" value="Buscar" />
                    </form> 
                </div>
               <div >
               <?php if (count($stock_controlador)): ?>
                    <table class="table tableborder">
                       <thead>
                          <tr>
                            <th style="text-align: center;"> Código </th>
                            <th style="text-align: center;"> Descripción </th>
                            <th style="text-align: center;"> Cantidad </th>
                            <th style="text-align: center;"> Agregar </th>
                          </tr>
                       </thead>
                       <tbody>
                          <?php foreach($stock_controlador as $item): ?>
                             <tr>
                                <td style="text-align: center; width: 25%"> <?php echo $item->idProducto ?> </td> 
                                <td style="text-align: center; width: 25%"> <?php echo $item->detalle ?> </td>
                                <td style="text-align: center; width: 25%"> <input type="text" id="cantSol"></td>
                                <td style="text-align: center;"><a class="btn" href="<?php echo base_url() ?>stock_controlador/ver/<?php echo $item->idProducto ?>"> <span style=" width: 20px" class="glyphicon glyphicon-plus" aria-hidden="true"> </a> </td>
                            </tr>
                          <?php endforeach; ?>
                       </tbody>
                    </table>
                   <?php else: ?>
                    <p> No hay productos cargados </p>
               <?php endif; ?>
                </div   >
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
                            Stock
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
                        <input type="submit" class="btn btn-info" value="Enviar">
                     </td>
                     <td align="center" width="100">
                         <a href="usuario.php"> <input type="button" class="btn btn-info" value="Cancelar"></a>
                     </td>
                 </tr>
            </table>
         </div>
        </div> 
    </body>
</html>