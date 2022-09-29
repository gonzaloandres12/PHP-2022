<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php 
    
    $array = ["El Pais" => "https://elpais.com/","El Mundo" => "https://www.elmundo.es/",
    "ABC" => "https://www.abc.es/", "La Razon" => "https://www.larazon.es/",
    "La Vanguardia" => "https://www.lavanguardia.com/"];

    $rand =array_rand($array);
    
    echo "<a href=".$array[$rand].">"."<li>".$rand."</li>"."</a>";
    

    ?>
    </ul>
</body>
</html>