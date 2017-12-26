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
    <div>
        <form method="post" action="<?php echo base_url() ?>ctrUsuario/buscar/">
            <label> 
            <h2>Agregar producto al pedido:</h2>
            <h3>Filtrar búsqueda:</h3>
            Seleccione una opción:
            <input type="radio" name="filtro" value="male" checked> Código
            <input type="radio" name="filtro" value="female" checked> Descripción<br>
            </lavel>
            <select class="caja" placeholder="Seleccione un rubro">
                <option value="volvo">Seleccione el Rubro</option>
                <option value="saab">Ferreteria</option>
                <option value="mercedes">Librería</option>
                <option value="audi">Mecánica</option>
                <option value="audi">Informática</option>
            </select>

            <input type="text" name="detalle" value="" style="height:35px;">
            <input type="submit" class="btn btn-success" value="Buscar" />
            <input type="submit" class="btn btn-success" value="Solicitar Nuevo Producto" />
        </form>            
    </div>
    <div>
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
           <tbody id="nom">
              <?php foreach($stock_controlador as $item): ?>
                 <tr>
                    <td style="text-align: center; width: 25%"> <?php echo $item->idProducto ?> </td> 
                    <td style="text-align: center; width: 25%"> <?php echo $item->detalle ?> </td>
                    <td style="text-align: center; width: 25%"> <?php echo $item->stock ?> </td>
                    <td style="text-align: center;"><button class="btn1" onclick="agregarLinea(<?php echo $item->idProducto ?>,'<?php echo $item->detalle ?>')"><span style=" width: 20px" class="glyphicon glyphicon-plus" aria-hidden="true"></button></td>
                </tr>
              <?php endforeach; ?>
           </tbody>
        </table>
        <?php else: ?>
        <p> No hay productos cargados </p>
        <?php endif; ?>
    </div>
    <div class="tabla">
        <form method="post" action="<?php echo base_url() ?>ctrUsuario/guardar_pedido_usuario/<?php ?>">
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
                         <th width="10px" style="text-align: center;">
                             Editar/Eliminar
                         </th>
                     </tr>
                 </thead>
                 <tbody id="agregar">

                </tbody> 
            </table>
            <table>
             <tr height="60px">
                 <td align="center" width="150">
                    <input type="submit" class="btn btn-success" value="Enviar" />
                 </td>
                 <td align="center" width="150">
                     <a href="usuario.php"> <input type="button" class="btn btn-info" value="Cancelar"></a>
                 </td>
             </tr>
            </table>
        </form>
    </div>
</div>


</body>
</html>