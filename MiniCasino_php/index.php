<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino</title>
</head>
<body>


<?php

    include_once "app/funciones.php";

    session_start();
    if(!isset($_SESSION['dinero'])){
        if(!isset($_REQUEST["ordenBut"])){
            if(isset($_COOKIE['visitasUser'])){
                setcookie("visitasUser", $_COOKIE['visitasUser']+1, time()+ 30*24*60*60); // Un mes

            }else{
                $valorCookie = 0;
            setcookie("visitasUser", $valorCookie, time()+ 30*24*60*60); // Un mes
            }
            include_once "app/entrada.php";
        }else{
            switch ($_REQUEST["ordenBut"]){
                case "Entrar":
                    //guarda sesion
                $_SESSION['dinero'] = $_REQUEST['dineroCliente'];
                include_once "app/casino.php";
                break;
            }
        }
    }else{
       if(isset($_REQUEST['ordenCasino'])){
        switch($_REQUEST['ordenCasino']){
            case "Apostar":
                echo calcucarApusta($_REQUEST['cantApuesta'],$_REQUEST['tipoApuesta']);
                include_once "app/casino.php";

            break;

            case "Abandonar":
                include_once "app/finCasino.php";
                break;
        }
   }else{
    include_once "app/casino.php";
   }
    }

    ?>
    



    
</body>
</html>