<?php
require_once 'ctrUsuario.php';
$a= new NuevoPedido();
while ($post = each($_POST))
{
    
    $a->lineapedido[]=$post[0];
    $a->lineapedido[]=$post[1];
    //array_push($a->lineapedido,$post[0],$post[1]);
    //echo $post[0] . " = " . $post[1];
}

print_r($a->lineapedido);