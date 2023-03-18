<head>
    <link rel="stylesheet" href="style.css">
</head>

<?php


 $nome= $_POST['txName'];
 $idade= $_POST['txIdade'];
 $peso= $_POST['txPeso'];
 
 $verificacao="";
 if($idade <18){
     $verificacao=" <br>  Você é menor de idade";
 }
 else if ($idade>=18){
     $verificacao=" <br> Você é maior de idade";
 } 
 
 $obeso="";
 if($peso >=100){
    echo "<body class='vermelho' echo  Você está acima do peso, fazer regime </p>";
     $obeso="<br>  Você está acima do peso, precisa emagrecer";
 }
 else if($peso < 100){
     $obeso="<br> Seu peso está quase na média ";
 }
 
  echo "Seu nome é $nome <br> Sua idade é $idade anos  $verificacao  <br> Seu peso é $peso kg $obeso";

?>