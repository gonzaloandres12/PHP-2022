<?php
function usuarioOk($usuario, $contraseña) :bool {
  
   if(strlen($usuario)>=8){
      
      if($contraseña == strrev($usuario)){
         return true;
      }else{
         return false;
      }
   }else{
      return false;
   }
    
}

function longitud($str){
   //Comprobar la inserccion de codigo
   strip_tags($str);
   return   strlen($str);
}

function nPalabras($str){
  
   return count(str_word_count($str, 1));

}

function letraMasRep($str){
   strip_tags($str);
   $letraMax = "";
   $max = 0;
   foreach (count_chars($str, 1) as $i => $val) {
     if($val>$max){
         $max = $val;
         $letraMax = chr($i);
     }
   }
  return $letraMax;
}


function palabraMasRep($str){
   strip_tags($str);
$maxStr = [];
   foreach (str_word_count($str, 1) as $key => $value) {
      $maxStr+=[$value=>mb_substr_count($str,$value)];
   }
   
   arsort($maxStr);

 return key($maxStr);
}
