<!DOCTYPE html><!--index de stock-controlador-->
<html lang="es">


<h1> STOCK </h1>
	<form method="post" action="<?php echo base_url() ?>stock_controlador/buscar/">
	<a class="btn btn-success" href="<?php echo base_url() ?>stock_controlador/guardar"> Agregar producto </a> 
	<a class="btn btn-success" href="<?php echo base_url() ?>stock_controlador/hacer_ping"> Realizar Pedido </a>
	<input type="text" name="detalle" value="" style="height:35px;">
	<input type="submit" class="btn btn-success" value="Buscar" />
	</form> 
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
</div>
<script type="text/javascript">
   $(".eliminar_informe").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este producto?")) {
            location.href = href;
         }
      });
   });
   

   
</script>