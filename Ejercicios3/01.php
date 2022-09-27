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
<table class="default">
<tr>
   <td>Celda 1</td>
</tr>
</table>
   <?php
$array = [];
 for ($i=0; $i <20; $i++) { 
    $numerosRand = random_int(1,10);
    array_push($array, $numerosRand);
 }
 print_r($array);

 

?>




</body>
</html>