<h1> <?php echo $detalle->detalle ?> </h1>
<h1>Stock : <?php echo $detalle->stock; ?></h1>
<h2>Cantidad Mínima Recomendada: <?php echo nl2br($detalle->cantMin) ?> </h2>
<br />
<div> <a class="btn btn-info" href="<?php echo base_url() ?>stock_controlador"> Volver atrás </a> </div>