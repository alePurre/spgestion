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
                <div>
                    <label>Rubro:</label>
                    <select class="caja" placeholder="Seleccione un rubro">
                        <option value="volvo">Seleccione el Rubro</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                    <form>
                        <label>Buscar:</lavel>
                        <input type="text" name="detalle" placeholder="Códifgo de producto">
                        <input type="text" name="detalle" placeholder="Nombre del producto">
                        <input type="submit" class="btn btn-info" value="Buscar" />
                    </form> 
                </div>
               <!--
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
                            Stock
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
               -->
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