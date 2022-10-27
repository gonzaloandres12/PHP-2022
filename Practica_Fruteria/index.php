<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app/style.css">
</head>
<body>


    <?php
    include_once "app/funciones.php";
    session_start();
    if(!isset($_SESSION['nombreCliente'])){
        if(!isset($_REQUEST["ordenBut"])){
            include_once "app/entrada.php";

        }else{
            switch ($_REQUEST["ordenBut"]){
                case "Entrar":
                //guardar sesion
                $_SESSION['nombreCliente'] = $_REQUEST['nombre'];
                include_once "app/lafruteria.php";
                break;
            }
        }
    }else{

        if(isset($_REQUEST['ordenFrut'])){
            switch ($_REQUEST["ordenFrut"]){
                case "Anotar":
                    mostrarFrutas($_REQUEST['frutas'],$_REQUEST['cantidad']);
                    include_once "app/lafruteria.php";

                    break;
                case "Terminar":
                    //nueva vista que muetra el pedido y un boton para un nuevo cliente
                    include_once "app/finPedido.php";
                    break;
            }
        }
        if(isset($_SESSION['nombreCliente']) && !isset($_REQUEST['ordenFrut'])){
            include_once "app/lafruteria.php";
        }
    }
       
        


     
    
        
    ?>



 
    

    
</body>
</html>