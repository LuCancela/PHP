<?php 

include("conexao.php");
$aula = $_POST['nome'];
$conteudo = $_POST['sinopse'];
$professor = $_POST['ano'];
$data = $_POST['diretor'];





$stmt = $pdo->prepare("insert into aula
values(null,'$aula','$conteudo','$professor','$data')");	    
$stmt ->execute();

header("location:cartaz.php");   
?>