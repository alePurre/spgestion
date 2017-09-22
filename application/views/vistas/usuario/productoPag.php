<?php

  $this->load->Helper('html');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">   
    <title>Listado de alumnos</title>
  
    <!-- Se enlaza el archivo Bootstrap core CSS -->
    <?php echo link_tag('css/bootstrap.min.css'); ?>
  </head>
  <body>
      <div class="container">
          <div class="col-md-12">
            <h1 class="page-header">ALUMNOS</h1>            
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>                 
                      <th>Codigo</th>
                      <th>Detalle</th>
                      <th>Stock</th>
                      <th>Cantidad Minima</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if($productos !== FALSE) {
                      // Se imprimen los datos de los alumnos
                      foreach ($productos as $fila) {
                    ?>
                     <tr>                       
                        <td><?php echo $fila->idProducto?></td>
                        <td><?php echo $fila->detalle?></td>
                        <td><?php echo $fila->stock?></td>
                        <td><?php echo $fila->cantMin?></td>
                      </tr>
                    <?php                   
                  }
                }
                ?>
              </tbody>
            </table>
            <ul class="pagination">
            <?php
              /* Se imprimen los números de página */           
              echo $this->pagination->create_links();
            ?>
            </ul>
          </div>
        </div>
    </div>   
  </body>
</html>