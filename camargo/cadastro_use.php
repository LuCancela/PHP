<?php include("cabecalho.php"); ?>

<form action="cadastro_salvar.php" method="POST" class="d-flex justify-content-center flex-column w-100 align-items-center">

<label for="">Nome Completo:</label>
<input type="text" name="nome">

<label for="email">Email:</label>
<input type="text" name="email" required>


<label for="cpf">Cpf:</label>
<input type="text" name="cpf" required>

<label for="idade">Idade:</label>
<input type="text" name="idade" required> <br>

<label for="senha">Senha:</label>
<input type="text" name="senha" required> <br>

<input type="submit" value="Salvar" required class="btn btn-primary">
</form>

<?php if (isset($erro)) { ?>
        <p><?php echo $erro; ?></p>
    <?php } ?>





<?php include("rodape.php")?>