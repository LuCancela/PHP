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

        $Nota1 = $_POST['txP1'];
        $Nota2= $_POST['txP2'];
        $Nota3= $_POST['txP3'];
        $Nota4= $_POST['txP4'];

        $media = ($Nota1 + $Nota2 + $Nota3 + $Nota4) / 4;


        echo "<br />
            A sua nota P1 é: $Nota1 <br />
            Sua nota P2 é: $Nota2 <br />
            Sua nota P3 é: $Nota3 <br />
            Sua nota P4 é: $Nota4 <br />
            Sua média é: $media";

        if($media>=6){
            echo "<h1 style = 'color: #2393DB'> Aprovado </h1>";
        }
        else{
            echo "<h2 style = 'color: #FC1715'> Reprovado </h2>";
        }

        // ! não
        // || ou  
        // && e 
        
        if($Nota1<0 && $Nota1>10){
            echo "Nota Inválida";

        }




    ?>
    </body>
</html>