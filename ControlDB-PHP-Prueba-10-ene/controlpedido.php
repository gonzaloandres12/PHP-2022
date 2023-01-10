<?php
include_once "AccesoDatos.php";
include_once "Cliente.php";
include_once "Pedido.php";

if(empty($_GET['nombre'] || empty($_GET['clave'])))
{
    $msg="Error unos de los valores esta vacio";
    include_once "vistaerror.php";
    exit();
} 
$nombre = $_GET['nombre'];
$clave = $_GET['clave'];

$db = AccesoDatos::getModelo();

$user = $db->comprobarLogin($nombre,$clave);
if($user == false){
    $msg = "Error el valor es incorrecto";
    include_once "vistaerror.php";
    exit();
}



$tpedidos = $db->pedidosCliente($user->cod_cliente);

include_once "vistapedidos.php";
?>