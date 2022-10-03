<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Dados</title>
    <style>
    .game{
        font-size: 40px;
    }
    p{
        font-size: 30px;
    }
    h1{
        font-size: 50px;
    }

    </style>
</head>
<body>
    <!-- FUNCION PARA EL JUEGO--> 
    <?php
        function funcionJuego($array) {
            $random_arr=array_rand($array,5);
            $puntos =0;
            foreach ($random_arr as $key) {
               echo $array[$key];

                $puntos += $key;               
            }
            $valorMax = max($random_arr);
            $valorMin = min($random_arr);

            $puntos -= $valorMax;
            $puntos -= $valorMin;

            echo "&emsp;Puntos ".$puntos;

            return $puntos;
        }

          
            

     ?>
    <h1>Cinco dados</h1>
    <p>Actualice la página para mostrar una nueva tirada.<p>

    <?php
    
    define ('DADO1',"&#9856;");
    define ('DADO2',"&#9857;");
    define ('DADO3',"&#9858;");
    define ('DADO4',"&#9859;");
    define ('DADO5',"&#9860;");
    define ('DADO6',"&#9861;");

    $array_dados = [1=>DADO1,2=>DADO2,3=>DADO3
                    ,4=>DADO4,5=>DADO5,6=>DADO6];?>

    <div class="game">JUGADOR 1 <?php $jugador1=funcionJuego($array_dados); ?> </div>
    <br> 
    <div class="game">JUGADOR 2 <?php $jugador2=funcionJuego($array_dados); ?></div>
    <br> 
    <div class="game"><?php if($jugador1==$jugador2){echo "Ha sido un empate";}elseif($jugador1>$jugador2){ echo "Ha ganado el Jugador 1";}else{echo "Ha ganado el Jugador 2";}  ?></div>
    
    

</body>
</html>