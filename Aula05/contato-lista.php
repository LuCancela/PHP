<!-- $pdo-> prepare ele vai "preparar o codigo para receber um codigo mysql"
    -> execute executa o código php e guarda ele
    Row= Linha

    STMT = Statement
    Fetch = pega os dados de um determinado formato(matriz ou objeto)
    FETCH_BOOT = traz em formato em matriz
    <tr> cria linha no HTML
    <td> cria colunas
!-->


<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>PHP e BANCO DE DADOS</title>

</head>
<body>

<section>
    <!-- Pegeui do contato e fiz algumas alterações para que fosse possível listar, remover e alterar no banco sem entrar no banco-->
    <form action="contato-alterar.php" method="post">      
        <div>
          <input type="hidden" name="txIdContato" value="<?php echo @$_GET['id']; ?>" />
        </div>		

        <div>
            <input type="text" placeholder="Nome" name="txNome" value="<?php echo @$_GET['nome']; ?>" />
        </div>		

        <div>
            <input type="text" placeholder="E-mail" name="txEmail" value="<?php echo @$_GET['email']; ?>" />
        </div>		

        <div>
            <input type="text" placeholder="Assunto" name="txAssunto" value="<?php echo @$_GET['assunto']; ?>" />
        </div>		

        <div>
            <textarea placeholder="Mensagem" name="txMensagem" >
              <?php echo @$_GET['msg']; ?>  
            </textarea>
        </div>

        <div>
            <input type="submit" value="Salvar" />
        </div>
    </form>

    </section>

    <section>
        <table class="table-striped">
            <thead>
                <tr>

                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Menssagem</th>

                </tr>    
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->prepare("select * from tbcontato");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                    echo "<tr class='celula'>";
                        echo "<td> $row[0] </td>";						
                        echo "<td> $row[1] </td>";						
                        echo "<td> $row[2] </td>";						
                        echo "<td> $row[3] </td>";											
                        echo "<td> $row[4] </td>";		
                        echo "<td>
                            <a href'contato-editar.php?id=$row[0]&nome=$row[1]&email=$row[2]&assunto=$row[3]&mensagem=$row[4]'> Editar </a>
                            <a href='contato-remover.php?id=$row[0]'> Remover </a>
                            <td> ";		
                    echo "</tr>";
                }	
                ?>
            </tbody>

        </table>
    </section>
    
</body>
</html>

