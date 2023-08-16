<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$conteudo = $_POST['conteudo'];
$periodo = $_POST['periodo'];
    
include("conexao.php");

$stmt = $pdo->prepare("insert into tbcontato values(null,'$nome','$email','$cpf','$idade','$conteudo','$periodo ')");	    
$stmt ->execute();    

header("location:professor.php");   
?>