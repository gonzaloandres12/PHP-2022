<?php

function mostrarFrutas($fruta,$cantidad){
    if(isset($_SESSION['pedidos'][$fruta])){
        $_SESSION['pedidos'][$fruta]+=$cantidad;
    }else{
        $_SESSION['pedidos'][$fruta]=$cantidad;
    }
   

}