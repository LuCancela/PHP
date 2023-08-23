<?php include('cabecalho.php') ?>





<form action="filme-salvar.php" class="container formulario" method="POST" enctype="multipart/form-data">
    <h1>Cadastro de De Aula</h1>
    <div class="row">
        <div class="mb-3 col-12">
            <label for="nomeFilme" class="form-label">Aula</label>
            <input type="text" class="form-control" id="nome" placeholder="Ex: Titanic" name="nome">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-12">
            <label for="sinopse" class="form-label">Conteúdo</label>
            <textarea name="sinopse" id="sinopse" cols="30" rows="10" class="form-control" name="sinopse"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-4">
            <label for="ano" class="form-label">Ano da aula</label>
            <input type="number" class="form-control" id="ano" placeholder="Ex: 2020" name="ano">
        </div>
        <div class="mb-3 col-4">
            <label for="diretor" class="form-label">Professor</label>
            <input type="text" class="form-control" id="diretor" placeholder="Ex: Jorge Junior" name="diretor">
        </div>
        <div class="mb-3 col-4">
            <label for="genero" class="form-label">Aulas</label>
            <select name="genero" id="" class="form-control">
                <?php

                $stmt = $pdo->prepare("select * from aula");

                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

                ?>

                    <option value="<?php echo $row['aula'] ?>">

                        <?php echo $row['aula'] ?>

                    </option>

                <?php } ?>
            </select>
        </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-light">Salvar</button>
    </div>
</form>

<?php include('rodape.php') ?>