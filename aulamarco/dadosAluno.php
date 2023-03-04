<?php

    $nome=$_POST['txNome'];
    $idade = $_POST['txIdade'];
    $verificacao="";

    

    if($idade<=10){
        $verificacao = "Criança e menor de idade.";
    }
    else if($idade<=17){
        $verificacao= "Menor de idade";
    }
    else{
      $verificacao= "Maior de idade";
    }

    echo "Seu nome é: $nome, sua idade é:  $idade, Você é: $verificacao";

?>
