<?php

function  calcucarApusta($dinero,$parOimpar){
    if($_SESSION['dinero']>=$dinero && $_SESSION['dinero']!=0){
        $numeroAleatorio = random_int(0,1);
        $valor = "";
    
        if ($numeroAleatorio%2==0){
            $valor = "Par";
        }else{
            $valor = "Impar";
        }
        if($parOimpar == $valor){
            $_SESSION['dinero'] = $_SESSION['dinero']+$dinero;
            return "Resultado de la apuesta : ".$valor. " Ganaste";
        }else{ 
            $_SESSION['dinero'] = $_SESSION['dinero']-$dinero; 
            return "Resultado de la apuesta :".$valor. " Perdiste";
        }
    }else{
        return "Error no disponde de ".$dinero." euros.";
    }


}