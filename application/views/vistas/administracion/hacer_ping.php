<h1> Resultado de la prueba: </h1>
	<?php if (count($ping_controlador)): 
		   
		   echo "<table class='table tableborder'>
			<thead>
				<tr>
					<th> IP </th>
					<th> Seccion </th>
				</tr>
			</thead>
			<tbody>";
		   foreach($ping_controlador as $item): 
				$dominio=$item->ip;
				$starttime = microtime(true);
				$file      = @fsockopen ($dominio, 80, $errno, $errstr, 1);
				$stoptime  = microtime(true);
				$status    = 0;
			 
				if (!$file) $status = -1;  // Site is down
				else {
					fclose($file);
					$status = ($stoptime - $starttime) * 1000;
					$status = floor($status);
				}
				echo "<tr>";
						if ($status <> -1) {
							echo "<td style='width: 35%'>".$dominio."</td>";
							echo "<td style='width: 35%'>".$ubicacion."</td>";
							echo "<td style='width: 35%'>".$descripcion."</td>";
							echo "<td style='width: 35%'>Conectado</td>";
							
						} else {
							echo "<td style='width: 35%'>".$dominio."</td>";
							echo "<td style='width: 35%'>".$ubicacion."</td>";
							echo "<td style='width: 35%'>".$descripcion."</td>";
							echo "<td style='width: 35%'>Desconectado</td>";
						}
				echo "<tr>";
		    endforeach; 
			echo"</tbody>
			</table>";
		
		else: 
			echo 'No hay dispositivos cargados';
		endif; ?>
<div> <a class="btn btn-info" href="<?php echo base_url() ?>ping_controlador"> Volver atrás </a> </div>