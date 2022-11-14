<?php



function accionDetalles($id){
    $usuario = $_SESSION['tuser'][$id];
    $nombre  = $usuario[0];
    $login   = $usuario[1];
    $clave   = $usuario[2];
    $comentario=$usuario[3];
    $orden = "Detalles";
    include_once "layout/formulario.php";
    exit();
}

function accionAlta(){
    $nombre  = "";
    $login   = "";
    $clave   = "";
    $comentario = "";
    $orden= "Nuevo";
    include_once "layout/formulario.php";
    exit();
}

function accionPostAlta(){
 
    limpiarArrayEntrada($_POST); //Evito la posible inyección de código
    $nuevo = [ $_POST['nombre'],$_POST['login'],$_POST['clave'],$_POST['comentario']];
    //Comprobar si el login que introduce ya exsite
    $bool =  false;
    foreach ($_SESSION['tuser'] as $key => $value) {
        if($nuevo[1] == $value[1]){
            $bool = true;
            break;
            print_r($value[1]);
        }
    }
    if($bool==true){
       //vuelve a cargar el formulario cn los valores que tenia antes
       return "Ese login ya esiste prueba con otro";
    }else
    {
        $_SESSION['tuser'][]= $nuevo;
        return "Usuario creado";

    }
}


function accionTerminar(){
    volcarDatos($_SESSION['tuser']);
    session_destroy();
}

function accionBorrar($id){
    unset($_SESSION['tuser'][$id]);
    $arr2 = array_values($_SESSION['tuser']);
    $_SESSION['tuser'] = $arr2;

    
    
}

function accionModificar($id){
    $usuario = $_SESSION['tuser'][$id];
    $nombre  = $usuario[0];
    $login   = $usuario[1];
    $clave   = $usuario[2];
    $comentario=$usuario[3];
    $orden = "Modificar";
    include_once "layout/formulario.php";
    exit();
}

function accionPostModificar(){
    limpiarArrayEntrada($_POST);
    $modificado = [$_POST['nombre'],$_POST['login'],$_POST['clave'],$_POST['comentario']];
    $posicion = $_GET['id'];
    $_SESSION['tuser'][$posicion]=[$modificado[0],$modificado[1],$modificado[2],$modificado[3]];

}

