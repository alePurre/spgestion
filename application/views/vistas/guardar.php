<h1> Guardar Modificación </h1>
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