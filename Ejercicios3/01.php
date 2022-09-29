<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>

<style>
    table{
       border:1px solid black;
       border-collapse:collapse;
    }
    </style>
</head>
<body>

   <?php
   $array = [];
   for ($i=0; $i <20; $i++) { 
    $numerosRand = random_int(1,10);
    array_push($array, $numerosRand);
 }

?>

<table class="default">
<tr>

   <?php
      foreach ($array as $x) {
        echo "<td>".$x."</td>";
       } 
   ?>
 </tr>
 </table>

 <?php
   function maximo($value){
      return max($value);
   }

   function minimo($value){
      return min($value);
   }

   function nVecesRepite($value){
      $valorMasRep = array_count_values($value);
      
   
      return max($valorMasRep);
   }
  $numeros = maximo($array);
  echo "Valor maximo ".$numeros."<br>";
  $numeros = minimo($array);
  echo "Valor minimo ".$numeros."<br>";
  $numeros = nVecesRepite($array);
  echo "Valor que mas se repite ".$numeros."<br>";
  
 ?>


</body>
</html>