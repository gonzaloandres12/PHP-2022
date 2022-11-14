<?php
session_start();

include_once 'app/funciones.php';
include_once 'app/acciones.php';
//session_destroy();
// Tabla de usuarios
if (!isset ($_SESSION['tuser'])){
    $_SESSION['tuser'] = cargarDatos();  
}
print_r($_SESSION['tuser']);
// Div con contenido
$contenido="";
$error ="";
if ($_SERVER['REQUEST_METHOD'] == "GET" ){
    
    if ( isset($_GET['orden'])){
        switch ($_GET['orden']) {
            case "Nuevo"    : accionAlta(); break;
            case "Borrar"   : accionBorrar   ($_GET['id']); break;
            case "Modificar": accionModificar($_GET['id']); break;
            case "Detalles" : accionDetalles ($_GET['id']);break;
            case "Terminar" : accionTerminar(); break;
        }
    }
} 
// POST Formulario de alta o de modificación
else {
    if (  isset($_POST['orden'])){
         switch($_POST['orden']) {
             case "Nuevo"    : $error=accionPostAlta(); break;
             case "Modificar": accionPostModificar(); break;
             case "Detalles":break; // No hago nada
         }
    }
}
$contenido .= mostrarDatos();

// Muestro la página principal
include_once "app/layout/principal.php";




