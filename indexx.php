<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $dado1 = rand(1,6);
   $dado2 = rand(1,6);
   $dado3 = rand(1,6);
   $dado4 = rand (1,6);
   $usuario = $dado1 + $dado2;
   $computador = $dado3 + $dado4; 

    echo "<br> usuário";
    echo "<br><img src = 'dados/$dado1.PNG'>";
    echo "<img src = 'dados/$dado2.PNG'>";
    echo "<br> computador";
    echo "<br><img src = 'dados/$dado3.PNG'>";
    echo "<img src = 'dados/$dado4.PNG'>";
    echo "<br>A soma dos valores lançados pelo usuário é: $usuario";
    echo "<br>A soma dos valores lançados pelo computador é: $computador";
    
    if ($usuario > $computador){
        echo "<br>O ganhador é você, usuário!";
    }
    else if ($usuario == $computador)
        echo "<br>Deu empate!";
    else 
        echo "<br>O ganhador é o computador!";
    
    ?>
    <br>

<form>
    <input type = "submit" value = "jogar">
</form>



</body>
</html>