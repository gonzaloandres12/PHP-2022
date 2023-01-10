<?php
include_once "AccesoDatos.php";
$db = AccesoDatos::getModelo();
$db->updateEntradas($user->cod_cliente);
$user = $db->comprobarLogin($nombre,$clave);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>
<body>

    Bienvenido Usuario:<?=$user->nombre?><br> 
    Has etrado <?=$user->veces?> veces<br>
    Esta es su lista de pedidos del cliente con código <?=$user->cod_cliente?>:<br>
    <?php 
    $total = 0;
   if (count($tpedidos)>0){ ?>
   
    	<table border=1><th>Producto</th><th>Precio</th>
    		<?php foreach ($tpedidos as $pedidios ) { ?>
        	<tr>
        	<td><?=$pedidios->producto?></td>
        	<td><?=$pedidios->precio?></td>
        	</tr>
   	 	 <?php $total += $pedidios->precio;?>
    <?php } ?>
    <tr>
    <td>Total</td>
    <td><?=$total?></td>
    </tr>
     </table>  
     <?php }else{
         ?>no existen pedidos para este cliente<?php
     } ?>
</body>
</html>