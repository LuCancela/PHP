<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <li> <a href="index.php"> Home </a> </li>
            <li> <a href="contato.php"> Contato </a> </li>
            <li> <a href="contato-lista.php"> Listar Contatos </a> </li>
        <ul>
    </nav>

    <h1>
        Início
    </h1>

    <section>
        <?php
            $stmt = $pdo->prepare ("SELECT  f.idFilme,
                                            f.filme,
                                            f.idGenero,
                                            g.genero
                                            From tbfilme f
            inner join tbGenero g
            on f.Genero = g.idGenero limit 3");
            $stmt ->execute();

            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){      

        ?>
            <figure style="float:left;">
            <figcaption>        
                    <h1> <?php echo $row[1] ?> </h1>   
                    <h2> Duração </h2>   
                    <h3> Descrição </h3>   
                    <p> <?php echo $row[3] ?> </p>   
                </figcaption>
            </figure>

        <?php }	?>

        <selection>
                
        <section>

    </section>
    
</body>
</html>