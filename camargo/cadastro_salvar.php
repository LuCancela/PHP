<!-- Aqui mandamos o cadastro para o banco. -->
<?php include("conexao.php"); ?>

<?php 

$nome= $_POST['nome'];
$email= $_POST['email'];
$cpf= $_POST['cpf'];
$idade= $_POST['idade'];
$senha= $_POST['senha'];

echo $nome;
echo $email;
echo $cpf;
echo $idade;
echo $senha;


$stmt = $pdo->prepare("insert into professor
values(null,'$nome','$email','$cpf','$idade','$senha')");	    
$stmt ->execute();
header("Location: login.php");


?>

