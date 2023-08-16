<?php

    require('conexao.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    echo $nome . $senha;

    $stmt = $pdo->prepare("select * from professor where nome = '$nome' and senha = '$senha'");
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_BOTH);
        
    
    $_SESSION['id'] = $row[0];
    
    header('location:index.php')

?>