<?php include('cabecalho.php') ?>




<div class="pets">
            <h2 class="h1 text-center my-5">Veja as <strong>Aulas</strong></h2>
            <div class="lista-de-imagens row">              
                <?php
                        $stmt = $pdo->prepare("select * from aula");
                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

                            echo "
                                   
                                   
                                    <div class='descricao'>
                                        <div class='oculto'>
                                        <h2>$row[idAula] </h2>
                                        </div>
                                        <h5><a href='genero.php'>Aula:</a></h5>
                                        <h3> $row[aula]</h3>
                                            <h4>Aula: $row[aula]<br>
                                                Conteudo: $row[conteudo]
                                                <p>$row[professor]</p>
                                                <p>$row[data]</p></h4>
                                    </div>
                                </div>
                                    ";
                        }
                ?>
                
            </div>
        </div>

<?php include('rodape.php') ?>