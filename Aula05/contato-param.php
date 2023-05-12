
<?php include("conexao.php"); ?>

<?php
    //consulta comparando
    $id = _GET['x'];

    $stmt = $pdo->prepare("select * from tbcontato where idcontato='$id'");
    $stmt ->execute();

    $row = $stmt ->fetch(PDO::FETCH_BOTH);

    return $row;

?>
