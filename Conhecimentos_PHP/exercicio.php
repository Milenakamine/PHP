<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Estudo PHP - Introdução</title>
</head>



<body class="all">

    <!-- cabeçalho -->
    <header class="containerP">
        <h1>Exercício</h1>
        <h2>Visualização de Exercício</h2>

    </header>

    <!-- criação de navegação -->
    <nav class="navegacao">
        
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde"> Sem Formatação</a>

        <a href="index.php" class="vermelho">Voltar</a>
    </nav>



    <!-- pricipal -->
    <main class="containerS">
        <div class="conteudo">
            <!-- PHP -->
            <?php

                // sintaxe de como colocar o código php dentro de um html
                // include($_GET['dir'] . "/teste.php");
                // chamando um diretório sem a pasta, só com o comando $_GET['dir' e chamando o arquivo "/teste.php"]
                
                // outra maneira de chamar o teste
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
                // include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");O comando GET tem a ver com dados enviados para a url(http://) 
                // foi dado um parametro de DIR (diretório) e o file (arquivo dentro do diretório).php
                // é uma condição, se não passar a condição proposta não vai rodar.
                

            ?>

        </div>

    </main>


    <!-- rodape -->
    <footer class="containerT">
        <!-- php para colocar a data, por padrão o php utiliza o sistema de data D=DIA, M=MES, Y=ANO, S=SEGUNDOS -->
        Produzido pela desenvolvedora: Milena Akamine <?= date('Y') ?> </footer>
        <!-- HTML                                     PHP -->
    </body>
    
</html>

