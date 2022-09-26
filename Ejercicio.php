<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <h1>!Piedra , papel, tijera!</h1>
    <p>Actualize la página para mostrar otra partida</p>
    <?php
    define ('PIEDRA1',"&#x1F91C;");
    define ('PIEDRA2',"&#x1F91B;");
    define ('TIJERAS',"&#x1F596;");
    define ('PAPEL',"&#x1F91A;" );

    //2 valores random 1-4
    $rand1 = random_int(1,3);
    $rand2 = random_int(1,3);
    
    function juegoPPT($valor1,$valor2){

        if($valor1 == $valor2){
            echo "<p>Jugador 1</p> <br> ";
        }else if($valor1>$valor2){
            //gana jugador1
        }else if ($valor1<$valor2){
            //gana jugador 2
        }


    }

    juegoPPT($rand1,$rand2);

    ?>
</body>
</html>
