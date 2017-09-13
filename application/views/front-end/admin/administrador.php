<?php
echo('<br><br><br><br><br><br><br>');
echo ('<h1> PAGINA INICIO ADMINISTRADOR</h1> <br>');
$id_sesion=session_id();
echo $id_sesion;
$algo=$_SESSION['valor'];
var_dump($algo);
?>
