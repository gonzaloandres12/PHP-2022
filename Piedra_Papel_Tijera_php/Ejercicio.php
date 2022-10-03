<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>

        .game{
            font-size: 60px;
        }
        p{
            font-size: 30px;
        }

    </style>
</head>
<body>
    <div>
    <h1>!Piedra , papel, tijera!</h1>
    <p>Actualize la página para mostrar otra partida</p>
    </div>
    <?php
    define ('PIEDRA1',"&#x1F91C;");
    define ('PIEDRA2',"&#x1F91B;");
    define ('TIJERAS',"&#x1F596;");
    define ('PAPEL',"&#x1F91A;" );

    //2 valores random 1-4
    $jugador1 = random_int(1,3);
    $jugador2 = random_int(1,3);
    ?>

    <p>Jugador 1 &emsp; Jugador 2</p>
    <div class="game">
        <?php 
        //Asigno el emoticono a un variable con el mismo nombre
        $piedra1 = PIEDRA1;
        $piedra2 = PIEDRA2;
        $tijeras = TIJERAS;
        $papel = PAPEL;
        // 1=>piedara 2=>papel  3=>tijera
        // 1=>piedara 2=>papel  3=>tijera
        // 1=>piedara 2=>papel  3=>tijera
        // 1=>piedara 2=>papel  3=>tijera

        //Regular space: &nbsp;
        //Two spaces gap: &ensp;
        //Four spaces gap: &emsp;

        if($jugador1 == 1 && $jugador2 == 1){
            //piedra y piedra = empate
            echo "&nbsp;".$piedra1;
            echo "&emsp;"."&ensp;".$piedra2."<br>";
            echo "<p>Ha sido un empate</p>";
            echo "<p>Recarga la pagina para otra partida</p>";
        }elseif($jugador1 == 2 && $jugador2 == 2){
            //papel y papel = empate
            echo "&nbsp;".$papel;
            echo "&emsp;"."&ensp;".$papel."<br>";
            echo "<p>Ha sido un empate</p>";
            echo "<p>Recarga la pagina para otra partida</p>";

        }elseif($jugador1 == 3 && $jugador2 == 3){
            //tijera y tijera empate
            echo "&nbsp;".$tijeras;
            echo "&emsp;"."&ensp;".$tijeras."<br>";
            echo "<p>Ha sido un empate</p>";
            echo "<p>Recarga la pagina para otra partida</p>";

        }elseif($jugador1 == 1 && $jugador2==2){
            //piedra y papel = gana j2
            echo "&nbsp;".$piedra1;
            echo "&emsp;"."&ensp;".$papel."<br>";
            echo "<p>Ha ganado el jugador 2</p>";
            echo "<p>Recarga la pagina para otra partida</p>";
        }
        elseif($jugador1 == 1 && $jugador2==3){
            //piedra y tijera = gana j1
            echo "&nbsp;".$piedra1;
            echo "&emsp;"."&ensp;".$tijeras."<br>";
            echo "<p>Ha ganado el jugador 1</p>";
            echo "<p>Recarga la pagina para otra partida</p>";

        }elseif($jugador1== 2 && $jugador2 == 1){
            //papel y piedra = j1
            echo "&nbsp;".$papel;
            echo "&emsp;"."&ensp;".$piedra2."<br>";
            echo "<p>Ha ganado el jugador 1</p>";
            echo "<p>Recarga la pagina para otra partida</p>";


        }elseif($jugador1 == 2 && $jugador2==3){
            //papel y tijera = j2
            echo "&nbsp;".$papel;
            echo "&emsp;"."&ensp;".$tijeras."<br>";
            echo "<p>Ha ganado el jugador 2</p>";
            echo "<p>Recarga la pagina para otra partida</p>";


        }elseif($jugador1 == 3 && $jugador2 == 1){
            //tijera y piedra = j2
            echo "&nbsp;".$tijeras;
            echo "&emsp;"."&ensp;".$piedra2."<br>";
            echo "<p>Ha ganado el jugador 2</p>";
            echo "<p>Recarga la pagina para otra partida</p>";
        }elseif($jugador1 == 3 && $jugador2 == 2){
            //tijera  y papel = j1
            echo "&nbsp;".$tijeras;
            echo "&emsp;"."&ensp;".$papel."<br>";
            echo "<p>Ha ganado el jugador 1</p>";
            echo "<p>Recarga la pagina para otra partida</p>";
        }

        ?>



    </div>
</body>
</html>