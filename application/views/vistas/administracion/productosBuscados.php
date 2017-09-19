<h1> Productos Encontrados </h1>
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
<form method="post" action="<?php echo base_url() ?>stock_controlador/guardar_post/<?php echo $idProducto ?>">
    <div class="row">
       <label> Detalle </label>
       <textarea type="text" name="detalle" required="required" ><?php echo $detalle ?></textarea>
    </div> <div class="row">
       <label> Stock </label>
       <input type="text" name="stock" required="required" style="width: 10%;" value="<?php echo $stock ?>" />
    </div>
    <div class="row">
       <label> CantMin </label>
       <input type="text" name="cantMin" required="required" style="width: 10%;" value="<?php echo $cantMin; ?>"/>
    </div>
    <div class="row">
       <label> CantMax </label>
       <input type="text" name="cantMax"  required="required" style="width: 10%;" value="<?php echo $cantMax; ?>"/>
    </div>
    <div class="row">
		<hr>
       <input type="submit" class="btn btn-success" value="Guardar" />
       <a class="btn btn-danger" href="<?php echo base_url() ?>stock_controlador"> Cancelar </a>
    </div>
</form>			